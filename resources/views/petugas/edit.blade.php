@extends('layout.main')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Edit Data Petugas</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item">Data Lelang</li>
                    <li class="breadcrumb-item"><a href="{{ url('/petugas') }}">Data Petugas</a></li>
                    <li class="breadcrumb-item active">Edit Data</li>
                </ol>
            </nav>
        </div>
        <section class="section profile">
            <div class="row">
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                            <img src="{{ asset('img/avatar-petugas.png') }}" alt="" class="rounded-circle">
                            <h2>{{ $petugas->nama }}</h2>
                            <h3>{{ $petugas->level }}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-body pt-3">
                            <h5 class="card-title">Edit Data</h5>
                            <form action="{{ url('petugas/'.$petugas->id) }}" method="post">
                                @csrf
                                @method('put')
                                <div class="row mb-3">
                                    <div class="col-lg-3 col-md-4 label ">ID Petugas</div>
                                    <div class="col-lg-9 col-md-8">{{ $petugas->id }}</div>
                                </div>
                                <div class="row mb-3">
                                    <label for="nama" class="col-md-4 col-lg-3 col-form-label">Nama Petugas</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="nama" type="text" class="form-control" id="nama" value="{{ $petugas->nama }}">
                                        <div class="invalid-feedback"> Masukkan nama petugas yang valid</div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="username" class="col-md-4 col-lg-3 col-form-label">Username</label>
                                    <div class="col-md-8 col-lg-9"> 
                                        <input name="username" type="text" class="form-control" id="username" value="{{ $petugas->username }}">
                                        <div class="invalid-feedback"> Masukkan username yang valid</div>
                                    </div>
                                </div>
                                {{-- <div class="row mb-3">
                                    <label for="password" class="col-md-4 col-lg-3 col-form-label">Password</label>
                                    <div class="col-md-8 col-lg-9"> 
                                        <input name="password" type="password" class="form-control" id="password">
                                        <div class="invalid-feedback"> Masukkan password yang valid</div>
                                    </div>
                                </div> --}}
                                <div class="row mb-3">
                                    <label for="level" class="col-md-4 col-lg-3 col-form-label">Level</label>
                                    <div class="col-md-8 col-lg-9">
                                        <select name="level" class="form-select" id="level" required>
                                            <option selected></option>
                                            <option value="Administrator">Administrator</option>
                                            <option value="Petugas">Petugas</option>
                                        </select>
                                        <div class="invalid-feedback"> Masukkan level yang valid</div>
                                    </div>
                                </div>
                                <div class="text-center"> 
                                    <button type="submit" class="btn btn-sm text-white" style="background-color:#055E68; border-radius:20px"><i class="bi bi-box-arrow-in-down"></i> Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection