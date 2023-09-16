@extends('dashboard.layout')
@section('title')
Pelanggaran/Tingkat1
@endsection
@section('isi')
<div class="container-fluid">
<div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
            <h4>PASAL TARUNA DAN TARUNI</h4>
            <p class="mb-0">catar (catatan taruna)</p>
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
                @if(auth()->user()->admin())
                <button type="button" class="btn btn-warning" data-toggle="modal" data-target=".bd-example-modal-sm"><i class="fa-solid fa-file-excel"></i> Import</button>
                <a href="{{ route('export-pasal') }}" class="btn btn-success" style="margin-right: 47em">Export <i class="fa-solid fa-file-excel"></i></a>
                @endif
                <div class="col-auto">
                    <form action="">
                    <label class="sr-only">Name</label>
                    <form action="" method="GET">

                        <input type="search" name="search" id="search" class="form-control mb-2" placeholder="Search....">
                    </form>
                </form>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-responsive-sm">
                        <thead>
                            <tr>
                                <th class="col-1" style="color:black; text-align:center">No</th>
                                <th style="color:black; text-align:center">Pasal</th>
                                
                             
                                <th class="col-3" style="color:black; text-align:center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                           <tr>
                            <th style="color:black; text-align:center">{{$loop->iteration}}</th>
                            <td style="color:black; text-align:center">{{$item->pasal}}</td>
                            <td style="text-align: center">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicModal{{ $item->id }}"><i class="fa-solid fa-pen-to-square"></i> Edit</button>
                                @include('pasal.modal-edit')
                                <form method="POST" action="{{ route('pasal.destroy', $item->id) }}" class="d-inline">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-sm btn-danger delete-btn" type="button">
                                        <i class="fa-solid fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                            @endforeach
                           </tr>
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@include('pasal.import')
@include('pasal.modal')
@endsection