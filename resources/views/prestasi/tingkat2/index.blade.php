@extends('dashboard.layout')
@section('title')
Prestasi/Tingkat2
@endsection
@section('isi')
<div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4><b>DATA TARUNA TINGKAT II YANG BERPRESTASI</b></h4>
                <p class="mb-0">Semoga membantu</p>
            </div>
        </div>
        {{-- <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Layout</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Blank</a></li>
            </ol>
        </div> --}}
    </div>
    @include('dashboard.alert')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
               
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicModal">+ Data</button>
                <div class="col-auto">
                    <form action="">
                    <label class="sr-only">Name</label>
                    <input type="search" class="form-control mb-2" placeholder="Search....">
                </form>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-responsive-sm">
                        <thead>
                            <tr>
                                <th style="color:black; text-align:center">No</th>
                                <th style="color:black; text-align:center">Nip/Nama</th>
                                <th style="color:black; text-align:center">Jurusan</th>
                                <th style="color:black; text-align:center">Prestasi</th>
                                <th style="color:black; text-align:center">Tgl</th>
                             
                                <th style="color:black; text-align:center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                           <tr>
                            <td style="color:black; text-align:center">{{$loop->iteration}}</td>
                            <td style="color:black; text-align:center">{{$item->nit}} {{ $item->nama }}</td>
                            <td style="color:black; text-align:center">{{$item->jurusan}}</td>
                            <td style="color:black; text-align:center">{{$item->prestasi}}</td>
                            <td style="color:black; text-align:center">{{$item->tgl_indo}}</td>
                            <td style="text-align: center">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicModal{{ $item->id }}"><i class="fa-solid fa-pen-to-square"></i> Edit</button>
                                @include('prestasi.tingkat2.modal-edit')
                                <form method="POST" action="{{ route('Tingkat2-prestasi.destroy', $item->id) }}" class="d-inline">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-sm btn-danger delete-btn" type="button">
                                        <i class="fa-solid fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                           </tr>
                           @endforeach
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
    @include('prestasi.tingkat2.modal')
@endsection