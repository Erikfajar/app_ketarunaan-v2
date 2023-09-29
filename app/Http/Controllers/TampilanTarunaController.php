<?php

namespace App\Http\Controllers;

use App\Models\Taruna;
use Illuminate\Http\Request;

class TampilanTarunaController extends Controller
{
    function tingkat_satu(Request $request)
    {
        // if($request->search){
        //     $data = Taruna::where('tingkat','satu')->search($request->search)->paginate(99999);
        // } else{

        // }
        $data = Taruna::where('tingkat', 'satu')->latest()->paginate(10);
        return view('taruna.Tampilan.Tingkat-satu', compact('data'));
    }
    function tingkat_dua(Request $request)
    {
        // if($request->search){
        //     $data = Taruna::where('tingkat', 'dua')->search($request->search)->paginate(99999);
        // }else{

        // }
        $data = Taruna::where('tingkat', 'dua')->latest()->paginate(10);
        return view('taruna.Tampilan.Tingkat-dua', compact('data'));
    }
    function tingkat_tiga(Request $request)
    {
        // if($request->search){
        //     $data = Taruna::search($request->search)->paginate(99999);
        // }else{

        // }
        $data = Taruna::where('tingkat', 'tiga')->latest()->paginate(10);
        return view('taruna.Tampilan.Tingkat-tiga', compact('data'));
    }


    // public function deleteall(Request $request)
    // {
    //     $selectedIds = $request->input('selectedIds');

    //     if (!empty($selectedIds)) {
    //         Taruna::whereIn('id', $selectedIds)->delete();
    //     }

    //     return redirect()->back(); // Kembali ke halaman sebelumnya
    // }

    public function updateTingkat1(Request $request)
    {
        $newValue = $request->input('tingkat');

        if (!empty($newValue)) {
            Taruna::query()->where('tingkat','satu')->update(['tingkat' => $newValue]); // Ganti 'column_name' dengan nama kolom yang ingin Anda update
        }

        // Redirect atau kirim pesan sukses jika diperlukan
        return redirect()->back()->with('success', 'Semua data Tingkat 1 berhasil diupdate.');
    }
    public function updateTingkat2(Request $request)
    {
        $newValue = $request->input('tingkat');

        if (!empty($newValue)) {
            Taruna::query()->where('tingkat','dua')->update(['tingkat' => $newValue]); // Ganti 'column_name' dengan nama kolom yang ingin Anda update
        }

        // Redirect atau kirim pesan sukses jika diperlukan
        return redirect()->back()->with('success', 'Semua data Tingkat 2 berhasil diupdate.');
    }
    public function updateTingkat3(Request $request)
    {
        $newValue = $request->input('tingkat');

        if (!empty($newValue)) {
            Taruna::query()->where('tingkat','tiga')->update(['tingkat' => $newValue]); // Ganti 'column_name' dengan nama kolom yang ingin Anda update
        }

        // Redirect atau kirim pesan sukses jika diperlukan
        return redirect()->back()->with('success', 'Semua data Tingkat 3 berhasil diupdate.');
    }
    public function deleteAll(Request $request)
    {
        // $newValue = $request->input('tingkat');

        
        Taruna::query()->where('tingkat','tiga')->delete(); // Ganti 'column_name' dengan nama kolom yang ingin Anda update

        // Redirect atau kirim pesan sukses jika diperlukan
        return redirect()->back()->with('success', 'Semua data Tingkat 3 berhasil dihapus.');
    }
}
