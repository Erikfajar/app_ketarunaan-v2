<?php

namespace App\Http\Controllers;

use App\Models\Tingkat_dua;
use App\Models\Tingkat_satu;
use App\Models\Tingkat_tiga;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $tingkat1pelanggaran = Tingkat_satu::where('tipe','pelanggaran')->count();
        $tingkat1prestasi = Tingkat_satu::where('tipe','prestasi')->count();
        $tingkat2pelanggaran = Tingkat_dua::where('tipe','pelanggaran')->count();
        $tingkat2prestasi = Tingkat_dua::where('tipe','prestasi')->count();
        $tingkat3pelanggaran = Tingkat_tiga::where('tipe','pelanggaran')->count();
        $tingkat3prestasi = Tingkat_tiga::where('tipe','prestasi')->count();
        $jumlah = $tingkat1pelanggaran + $tingkat2pelanggaran + $tingkat3pelanggaran;
        $jumlahprestasi = $tingkat1prestasi + $tingkat2prestasi + $tingkat3prestasi;
        return view('dashboard.index',compact('tingkat1pelanggaran','tingkat1prestasi','tingkat2pelanggaran','tingkat3pelanggaran','tingkat2prestasi','tingkat3prestasi','jumlah','jumlahprestasi'));
    }
}
