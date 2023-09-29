@extends('dashboard.layout')
@section('title')
Tingkat satu
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

    @include('dashboard.alert')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicModal">+ Data</button>
                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target=".bd-example-modal-sm" style="margin-right: 52em">Edit Tingkat All</button>
                    @include('taruna.crud.search')
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-responsive-sm">
                            <thead>
                                <tr>
                                    {{-- <th style="width:50px;">
                                        <div class="form-check custom-checkbox checkbox-success check-lg me-3">
                                            <input type="checkbox" class="form-check-input" id="checkAll" required="">
                                            <label class="form-check-label" for="checkAll"></label>
                                        </div>
                                    </th> --}}
                                    <th class="col-1" style="color:black; text-align:center">No</th>
                                    <th style="color:black; text-align:center">Nit/Nama</th>
                                    <th style="color:black; text-align:center">Jurusan</th>
                                    
                                 
                                    <th class="col-3" style="color:black; text-align:center;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                              <tr>
                                {{-- <td>
                                    <div class="form-check custom-checkbox checkbox-success check-lg me-3">
                                        <input type="checkbox" value="" class="form-check-input" id="customCheckBox2" required="">
                                        <label class="form-check-label" for="customCheckBox2"></label>
                                    </div>
                                </td> --}}
                                <td style="text-align: center; color:black">{{ $loop->iteration }}</td>
                                <td style="text-align: center; color:black">{{ $item->nit }} | {{ $item->nama }}</td>
                                <td style="text-align: center; color:black">{{ $item->jurusan }}</td>
                                <td style="text-align: center">
                                    <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#basicModal{{ $item->id }}"><i class="fa-solid fa-user-pen"></i></button>
                                    <form method="POST" action="{{ route('Taruna.destroy', $item->id) }}" class="d-inline">
                                        @csrf @method('DELETE')
                                        <button class="btn btn-sm btn-danger delete-btn" type="button">
                                            <i class="fa-solid fa-trash"></i> 
                                        </button>
                                    </form>
                                </td>
                              </tr>
                              @include('taruna.crud.modal-edit-tingkat1')
                              @include('taruna.crud.modal-edit')
                              @endforeach
                            </tbody>
                        </table>
                        {{ $data->links() }}
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@include('taruna.crud.modal-create')
@endsection