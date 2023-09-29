@extends('dashboard.layout')
@section('title')
dashboard
@endsection
@section('isi')
@php

//Chart Pelanggaran
  $dates = $chartPelanggaran->pluck('tgl')->toArray();
    $countsA = $chartPelanggaran->pluck('count_a')->toArray();
    $countsB = $chartPelanggaran->pluck('count_b')->toArray();
    $countsC = $chartPelanggaran->pluck('count_c')->toArray();

//Chart Prestasi
$datess = $chartPrestasi->pluck('tgl')->toArray();
    $countsD = $chartPrestasi->pluck('count_d')->toArray();
    $countsE = $chartPrestasi->pluck('count_e')->toArray();
    $countsF = $chartPrestasi->pluck('count_f')->toArray();

@endphp

<div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Hi Welcome !!</h4>
                <p class="mb-0">Aplikasi Catatan Taruna</p>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            {{-- <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Layout</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Blank</a></li>
            </ol> --}}
        </div>
    </div>

    <div class="row">
        {{-- <div class="col-lg-4 col-sm-6">
            <div class="card">
                <div class="stat-widget-one card-body">
                    <div class="stat-icon d-inline-block">
                        <i class="ti-user text-danger border-danger"></i>
                    </div>
                    <div class="stat-content d-inline-block">
                        <div class="stat-text">Tingkat 1 yang melanggar</div>
                        <div class="stat-digit">{{ $tingkat1pelanggaran }}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6">
            <div class="card">
                <div class="stat-widget-one card-body">
                    <div class="stat-icon d-inline-block">
                        <i class="ti-user text-danger border-danger"></i>
                    </div>
                    <div class="stat-content d-inline-block">
                        <div class="stat-text">Tingkat 2 yang melanggar</div>
                        <div class="stat-digit">{{ $tingkat2pelanggaran }}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6">
            <div class="card">
                <div class="stat-widget-one card-body">
                    <div class="stat-icon d-inline-block">
                        <i class="ti-user text-danger border-danger"></i>
                    </div>
                    <div class="stat-content d-inline-block">
                        <div class="stat-text">Tingkat 3 yang melanggar</div>
                        <div class="stat-digit">{{ $tingkat3pelanggaran }}</div>
                    </div>
                </div>
            </div>
        </div>
      
        <div class="col-lg-4 col-sm-6">
            <div class="card">
                <div class="stat-widget-one card-body">
                    <div class="stat-icon d-inline-block">
                        <i class="ti-user text-primary border-primary"></i>
                    </div>
                    <div class="stat-content d-inline-block">
                        <div class="stat-text">Tingkat 1 yang berprestasi</div>
                        <div class="stat-digit">{{ $tingkat1prestasi }}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6">
            <div class="card">
                <div class="stat-widget-one card-body">
                    <div class="stat-icon d-inline-block">
                        <i class="ti-user text-primary border-primary"></i>
                    </div>
                    <div class="stat-content d-inline-block">
                        <div class="stat-text">Tingkat 2 yang berprestasi</div>
                        <div class="stat-digit">{{ $tingkat2prestasi }}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6">
            <div class="card">
                <div class="stat-widget-one card-body">
                    <div class="stat-icon d-inline-block">
                        <i class="ti-user text-primary border-primary"></i>
                    </div>
                    <div class="stat-content d-inline-block">
                        <div class="stat-text">Tingkat 3 yang berprestasi</div>
                        <div class="stat-digit">{{ $tingkat3prestasi }}</div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="col-lg-6 col-sm-6">
            <div class="card bg-success">
                <div class="stat-widget-one card-body">
                    <div class="stat-icon d-inline-block">
                        <i class="ti-user text-danger border-danger"></i>
                    </div>
                    <div class="stat-content d-inline-block">
                        <div class="stat-text">Total Taruna/i yang melanggar</div>
                        <div class="stat-digit">{{ $jumlah }}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6">
            <div class="card bg-warning">
                <div class="stat-widget-one card-body">
                    <div class="stat-icon d-inline-block">
                        <i class="ti-user text-primary border-primary"></i>
                    </div>
                    <div class="stat-content d-inline-block">
                        <div class="stat-text">Total Taruna/i yang berprestasi</div>
                        <div class="stat-digit">{{ $jumlahprestasi }}</div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Chart Statitik --}}
        <div class="col-lg-6 col-sm-6">
            <div class="card" style="width: 400px; margin-left:2.5cm">
                <div class="stat-widget-one card-body">
                   <h4>Grafik statistik Pelanggaran Taruna</h4>
                   <canvas id="donutChart" width="100" height="100"></canvas>

                </div>
            </div>
        </div>
        {{-- Chart Statitik --}}
        <div class="col-lg-6 col-sm-6">
            <div class="card" style="width: 400px; margin-left:2.5cm">
                <div class="stat-widget-one card-body">
                   <h4>Grafik statistik Prestasi Taruna</h4>
                   <canvas id="donutChartt" width="200" height="200"></canvas>

                </div>
            </div>
        </div>
        {{-- Chart Pelanggaran --}}
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                   <h4>Grafik Pelanggaran Taruna/Taruni</h4>
                 
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="chart-container" style="position: relative; height:80vh; width:700vw">
                            <canvas id="myChart"></canvas>
                        </div>
                                     
                        
                    </div>
                </div>
            </div>
        </div>
     

        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                   <h4>Grafik Prestasi Taruna/Taruni</h4>
                 
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="chart-container" style="position: relative; height:80vh; width:700vw">
                            <canvas id="myChartt"></canvas>
                        </div>
                                     
                        
                    </div>
                </div>
            </div>
        </div>
       
    </div>

</div>

@include('dashboard.script-charts')
@endsection


{{-- <style>
    .card:hover {
       transform: scale(1.1); /* Mengubah skala kartu saat kursor mengarah ke kartu */
   }
</style> --}}