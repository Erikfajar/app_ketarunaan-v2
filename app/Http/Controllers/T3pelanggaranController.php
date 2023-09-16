<?php

namespace App\Http\Controllers;

use App\Models\pasal;
use App\Models\Tingkat_tiga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class T3pelanggaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->search){
            $pasal = pasal::all();
            $data = Tingkat_tiga::search($request->search)->get();
        } else{

            $pasal = pasal::all();
            $data = Tingkat_tiga::with('pasal')->where('tipe','pelanggaran')->latest()->get();
        }
     
        return view('pelanggaran.tingkat3.index',compact('data','pasal'));
     
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
        Session::flash('pasal_id', $request->pasal_id);
        Session::flash('tgl', $request->tgl);
 
    
        
      

        $request->validate(
            [
                'nit' => 'required',
                'nama' => 'required',
                'jurusan' => 'required',
                'pasal_id' => 'required',
                'tgl' => 'required',
                
           
            ],
            [
                'nit.required' => 'nit wajib diisi',
                'nama.required' => 'nama wajib diisi',
                'jurusan.required' => 'jurusan wajib diisi',
                'pasal_id.required' => 'pasal_id wajib diisi',
                'tgl.required' => 'tanggal wajib diisi',
               
            ]
        );
  
        

        $data = [
            'nit' => $request->nit,
            'nama' => $request->nama,
            'jurusan' => $request->jurusan,
            'pasal_id' => $request->pasal_id,
            'tgl' => $request->tgl,
            'tipe' =>'pelanggaran',
        
            
        ];
        Tingkat_tiga::create($data);
        return redirect()->route('Tingkat3-pelanggaran.index')->with('success', 'Berhasil menambahkan data ');
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
        Session::flash('pasal_id', $request->pasal_id);
        Session::flash('tgl', $request->tgl);
 
    
        
      

        $request->validate(
            [
                'nit' => 'required',
                'nama' => 'required',
                'jurusan' => 'required',
                'pasal_id' => 'required',
                'tgl' => 'required',
                
           
            ],
            [
                'nit.required' => 'nit wajib diisi',
                'nama.required' => 'nama wajib diisi',
                'jurusan.required' => 'jurusan wajib diisi',
                'pasal_id.required' => 'pasal_id wajib diisi',
                'tgl.required' => 'tanggal wajib diisi',
               
            ]
        );
  
        

        $data = [
            'nit' => $request->nit,
            'nama' => $request->nama,
            'jurusan' => $request->jurusan,
            'pasal_id' => $request->pasal_id,
            'tgl' => $request->tgl,
            'tipe' =>'pelanggaran',
        
            
        ];
        tingkat_tiga::where('id', $id)->where('tipe', 'pelanggaran')->update($data);
        return redirect()->route('Tingkat3-pelanggaran.index')->with('success', 'Berhasil edit data ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tingkat_tiga::where('id', $id)->where('tipe', 'pelanggaran')->delete();
        return redirect()->route('Tingkat3-pelanggaran.index')->with('success', 'Berhasil melakukan delete data');
    }
}
