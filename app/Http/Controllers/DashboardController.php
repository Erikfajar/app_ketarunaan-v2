<?php

namespace App\Http\Controllers;

use App\Models\Tingkat_dua;
use App\Models\Tingkat_satu;
use App\Models\Tingkat_tiga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){

        //Chart untuk Pelanggaran
        $dataA = DB::table('Tingkat_satu')->where('tipe','pelanggaran')
        ->select('tgl', DB::raw('COUNT(*) as count_a'))
        ->groupBy('tgl')
        ->get();
        $dataB = DB::table('Tingkat_dua')->where('tipe','pelanggaran')
        ->select('tgl', DB::raw('COUNT(*) as count_b'))
        ->groupBy('tgl')
        ->get();
        $dataC = DB::table('Tingkat_tiga')->where('tipe','pelanggaran')
        ->select('tgl', DB::raw('COUNT(*) as count_c'))
        ->groupBy('tgl')
        ->get();
    
        $chartPelanggaran = $dataA->merge($dataB)->merge($dataC);

        //chart untuk prestasi
        $dataD = DB::table('Tingkat_satu')->where('tipe','prestasi')
        ->select('tgl', DB::raw('COUNT(*) as count_d'))
        ->groupBy('tgl')
        ->get();
        $dataE = DB::table('Tingkat_dua')->where('tipe','prestasi')
        ->select('tgl', DB::raw('COUNT(*) as count_e'))
        ->groupBy('tgl')
        ->get();
        $dataF = DB::table('Tingkat_tiga')->where('tipe','prestasi')
        ->select('tgl', DB::raw('COUNT(*) as count_f'))
        ->groupBy('tgl')
        ->get();
    
        $chartPrestasi = $dataD->merge($dataE)->merge($dataF);

        //Statistik Grafik chart Pelanggaran
        $countA = DB::table('Tingkat_satu')->where('tipe','pelanggaran')->count();
        $countB = DB::table('Tingkat_dua')->where('tipe','pelanggaran')->count();
        $countC = DB::table('Tingkat_tiga')->where('tipe','pelanggaran')->count();
    
        // Menggabungkan jumlah data dari tiga tabel
        $data = [$countA, $countB, $countC];
    
        // Label yang sesuai dengan setiap data
        $labels = ['Tingkat 1', 'Tingkat 2', 'Tingkat 3'];
    
        // Warna latar belakang untuk setiap bagian Donut
        $backgroundColor = ['red', 'blue', 'green'];


        //Statistik Grafik chart Prestasdi
        $countD = DB::table('Tingkat_satu')->where('tipe','prestasi')->count();
        $countE = DB::table('Tingkat_dua')->where('tipe','prestasi')->count();
        $countF = DB::table('Tingkat_tiga')->where('tipe','prestasi')->count();
    
        // Menggabungkan jumlah data dari tiga tabel
        $dataP = [$countD, $countE, $countF];
    
        // Label yang sesuai dengan setiap data
        $labelsP = ['Tingkat 1', 'Tingkat 2', 'Tingkat 3'];
    
        // Warna latar belakang untuk setiap bagian Donut
        $backgroundColorP = ['red', 'blue', 'green'];
        
        $tingkat1pelanggaran = Tingkat_satu::where('tipe','pelanggaran')->count();
        $tingkat1prestasi = Tingkat_satu::where('tipe','prestasi')->count();
        $tingkat2pelanggaran = Tingkat_dua::where('tipe','pelanggaran')->count();
        $tingkat2prestasi = Tingkat_dua::where('tipe','prestasi')->count();
        $tingkat3pelanggaran = Tingkat_tiga::where('tipe','pelanggaran')->count();
        $tingkat3prestasi = Tingkat_tiga::where('tipe','prestasi')->count();
        $jumlah = $tingkat1pelanggaran + $tingkat2pelanggaran + $tingkat3pelanggaran;
        $jumlahprestasi = $tingkat1prestasi + $tingkat2prestasi + $tingkat3prestasi;
        return view('dashboard.index',compact('dataP', 'labelsP', 'backgroundColorP','data', 'labels', 'backgroundColor','chartPelanggaran','dataA','dataB','dataC','tingkat1pelanggaran','tingkat1prestasi','tingkat2pelanggaran','tingkat3pelanggaran','tingkat2prestasi','tingkat3prestasi','jumlah','jumlahprestasi','chartPrestasi','dataD','dataE','dataF'));
    }
}
