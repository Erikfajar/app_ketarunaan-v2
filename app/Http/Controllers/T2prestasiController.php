<?php

namespace App\Http\Controllers;

use App\Models\Tingkat_dua;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class T2prestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->search){
            
            $data = Tingkat_dua::search($request->search)->get();
        } else{
            $data = Tingkat_dua::where('tipe','prestasi')->latest()->get();
        }
        
        return view('prestasi.tingkat2.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Session::flash('nit', $request->nit);
        Session::flash('nama', $request->nama);
        Session::flash('jurusan', $request->jurusan);
        Session::flash('prestasi', $request->prestasi);
        Session::flash('tgl', $request->tgl);
 
    
        
      

        $request->validate(
            [
                'nit' => 'required',
                'nama' => 'required',
                'jurusan' => 'required',
                'prestasi' => 'required',
                'tgl' => 'required',
                
           
            ],
            [
                'nit.required' => 'nit wajib diisi',
                'nama.required' => 'nama wajib diisi',
                'jurusan.required' => 'jurusan wajib diisi',
                'prestasi.required' => 'prestasi wajib diisi',
                'tgl.required' => 'tanggal wajib diisi',
               
            ]
        );
  
        

        $data = [
            'nit' => $request->nit,
            'nama' => $request->nama,
            'jurusan' => $request->jurusan,
            'prestasi' => $request->prestasi,
            'tgl' => $request->tgl,
            'tipe' =>'prestasi',
        
            
        ];
        Tingkat_dua::create($data);
        return redirect()->route('Tingkat2-prestasi.index')->with('success', 'Berhasil menambahkan data ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Session::flash('nit', $request->nit);
        Session::flash('nama', $request->nama);
        Session::flash('jurusan', $request->jurusan);
        Session::flash('prestasi', $request->prestasi);
        Session::flash('tgl', $request->tgl);
 
    
        
      

        $request->validate(
            [
                'nit' => 'required',
                'nama' => 'required',
                'jurusan' => 'required',
                'prestasi' => 'required',
                'tgl' => 'required',
                
           
            ],
            [
                'nit.required' => 'nit wajib diisi',
                'nama.required' => 'nama wajib diisi',
                'jurusan.required' => 'jurusan wajib diisi',
                'prestasi.required' => 'prestasi wajib diisi',
                'tgl.required' => 'tanggal wajib diisi',
               
            ]
        );
  
        

        $data = [
            'nit' => $request->nit,
            'nama' => $request->nama,
            'jurusan' => $request->jurusan,
            'prestasi' => $request->prestasi,
            'tgl' => $request->tgl,
            'tipe' =>'prestasi',
        
            
        ];
        tingkat_dua::where('id', $id)->where('tipe', 'prestasi')->update($data);
        return redirect()->route('Tingkat2-prestasi.index')->with('success', 'Berhasil edit data ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tingkat_dua::where('id', $id)->where('tipe', 'prestasi')->delete();
        return redirect()->route('Tingkat2-prestasi.index')->with('success', 'Berhasil melakukan delete data');
    }
}
