<?php

namespace App\Http\Controllers;

use App\Models\pasal;
use App\Models\Tingkat_satu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class T1pelanggaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // if($request->search){
        //     $pasal = pasal::all();
        //     $data = Tingkat_satu::search($request->search)->paginate(10);
        // } else{

        //     $pasal = pasal::all();
        //     $data = Tingkat_satu::with('pasal')->where('tipe','pelanggaran')->latest()->paginate(10);
        // }
        $pasal = pasal::all();
        $data = Tingkat_satu::with('pasal')->where('tipe','pelanggaran')->latest()->paginate(10);
        return view('pelanggaran.tingkat1.index',compact('data','pasal'));
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
        // Session::flash('poto', $request->poto);
 
    
        
      

          $request->validate(
            [
                'nit' => 'required',
                'nama' => 'required',
                'jurusan' => 'required',
                'pasal_id' => 'required',
                'tgl' => 'required',
                // 'poto' => 'required',
                
           
            ],
            [
                'nit.required' => 'nit wajib diisi',
                'nama.required' => 'nama wajib diisi',
                'jurusan.required' => 'jurusan wajib diisi',
                'pasal_id.required' => 'pasal_id wajib diisi',
                'tgl.required' => 'tanggal wajib diisi',
                // 'poto.required' => 'poto wajib diisi',
               
            ]
        );
  
        // $foto_file = $request->file('poto');
        // $foto_extensi = $foto_file->extension();
        // $foto_nama = date('ymdhis') . "." . $foto_extensi;
        // $foto_file->move(public_path('poto'), $foto_nama);

        $data = [
            'nit' => $request->nit,
            'nama' => $request->nama,
            'jurusan' => $request->jurusan,
            'pasal_id' => $request->pasal_id,
            'tgl' => $request->tgl,
            
            'tipe' =>'pelanggaran',
        
            
        ];
        Tingkat_satu::create($data);
        return redirect()->route('Tingkat1-pelanggaran.index')->with('success', 'Berhasil menambahkan data ');
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
        tingkat_satu::where('id', $id)->where('tipe', 'pelanggaran')->update($data);
        return redirect()->route('Tingkat1-pelanggaran.index')->with('success', 'Berhasil edit data ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tingkat_satu::where('id', $id)->where('tipe', 'pelanggaran')->delete();
        return redirect()->route('Tingkat1-pelanggaran.index')->with('success', 'Berhasil melakukan delete data');
    }
}
