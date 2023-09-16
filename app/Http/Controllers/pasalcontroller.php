<?php

namespace App\Http\Controllers;

use App\Models\pasal;
use App\Exports\PasalExport;
use App\Imports\PasalImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Session;

class pasalcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->search){
            $data = pasal::search($request->search)->get();
        } else{

            $data = pasal::latest()->get();
        }
        return view('pasal.index', compact('data'));
    }

    public function tampila()
    {
        $data = pasal::latest()->get();
        return view('pasal.export', compact('data'));
    }

    public function import(Request $request) 
    {
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('pasal', $namaFile);

        Excel::import(new PasalImport, public_path('/pasal/'.$namaFile));
        return redirect()->route('pasal.index')->with('success', 'Berhasil Import Pasal');
        // Excel::import(new PasalImport, 'pasal.xlsx');
        
        // return redirect('/')->with('success', 'Berhasil Import Pasal');
    }

  function export() 
    {
        return Excel::download(new PasalExport, 'Pasal.xlsx');
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
        Session::flash('pasal', $request->pasal);

        $request->validate([
            'pasal' => 'required'
        ], [
            'pasal.required' => 'pasal wajib di isi'
        ]);

        $data = [
            'pasal' => $request->pasal,
        ];

        pasal::create($data);
        return redirect()->route('pasal.index')->with('success', 'pasal berhasil dibuat');
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
        Session::flash('pasal', $request->pasal);

        $request->validate([
            'pasal' => 'required'
        ], [
            'pasal.required' => 'pasal wajib di isi'
        ]);

        $data = [
            'pasal' => $request->pasal,
        ];

        pasal::where('id', $id)->update($data);
        return redirect()->route('pasal.index')->with('success', 'pasal berhasil dibuat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        pasal::where('id', $id)->delete();
        return redirect()->route('pasal.index')->with('success', 'Berhasil melakukan delete data');
    }
}
