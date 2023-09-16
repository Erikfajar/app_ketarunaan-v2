@extends('dashboard.layout')
@section('title')
resgiter
@endsection
@section('isi')
<div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Hi, welcome back!</h4>
                <p class="mb-0">Your business dashboard template</p>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Components</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-xl-12 col-xxl-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Create Akun</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('register/create') }}" id="step-form-horizontal" method="POST" class="step-form-horizontal">
                        @csrf
                        <div>
                           
                            <section>
                                <div class="row">
                                    <div class="col-lg-6 mb-4">
                                        <div class="form-group">
                                            <label class="text-label">Nama</label>
                                            <input type="text" name="name" class="form-control" placeholder="Nama" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-4">
                                        <div class="form-group">
                                            <label class="text-label">Email</label>
                                            <input type="email" name="email" class="form-control" placeholder="email" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-4">
                                        <div class="form-group">
                                            <label class="text-label">Password</label>
                                            <div class="input-group">
                                                <input type="password" class="form-control" id="password" name="password" aria-describedby="inputGroupPrepend2" placeholder="Passoword" name="password" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-4">
                                        <div class="form-group">
                                            <label class="text-label">Password</label>
                                            <select class="form-control" name="role">
                                                <option value="" disabled selected>Pilih Role </option>
                                                <option value="admin">Admin</option>
                                                <option value="user">User</option>
                                               
                                            </select>
                                        </div>
                                    </div>
                                    
                               
                                </div>
                            </section>
                        <button type="submit" class="btn btn-primary">Create Akun</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection