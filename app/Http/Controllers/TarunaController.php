<?php

namespace App\Http\Controllers;

use App\Models\Taruna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TarunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        Session::flash('tingkat', $request->tingkat);

        $request->validate(
            [
                'nit' => 'required|unique:taruna',
                'nama' => 'required',
                'jurusan' => 'required',
                'tingkat' => 'required',
            ],
            [
                'nit.required' => 'nit wajib diisi',
                'nit.unique' => 'nit sudah digunakan',
                'nama.required' => 'nama wajib diisi',
                'jurusan.required' => 'jurusan wajib diisi',
                'tingkat.required' => 'Tingkat wajib diisi',
            ]
        );
        $data = [
            'nit' => $request->nit,
            'nama' => $request->nama,
            'jurusan' => $request->jurusan,
            'tingkat' =>$request->tingkat,
        ];

        Taruna::create($data);
        return back()->with('success','Berhasil menambahkan data');
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
        Session::flash('tingkat', $request->tingkat);

        $request->validate(
            [
                'nit' => 'required',
                'nama' => 'required',
                'jurusan' => 'required',
                'tingkat' => 'required',
            ],
            [
                'nit.required' => 'nit wajib diisi',
                'nama.required' => 'nama wajib diisi',
                'jurusan.required' => 'jurusan wajib diisi',
                'tingkat.required' => 'Tingkat wajib diisi',
            ]
        );
        $data = [
            'nit' => $request->nit,
            'nama' => $request->nama,
            'jurusan' => $request->jurusan,
            'tingkat' =>$request->tingkat,
        ];

        Taruna::where('id', $id)->update($data);
        return back()->with('success','Berhasil Edit data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Taruna::where('id', $id)->delete();
        return back()->with('success','Berhasil hapus data');
    }
}
