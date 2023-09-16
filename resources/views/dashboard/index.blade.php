@extends('dashboard.layout')
@section('title')
dashboard
@endsection
@section('isi')
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
        <div class="col-lg-6 col-sm-6">
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
        <div class="col-lg-6 col-sm-6">
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
        <div class="col-lg-6 col-sm-6">
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
        <div class="col-lg-6 col-sm-6">
            <div class="card">
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
        <div class="col-lg-6 col-sm-6">
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
        <div class="col-lg-6 col-sm-6">
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
        </div>
        <div class="col-lg-6 col-sm-6">
            <div class="card">
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
       
    </div>

</div>
@endsection