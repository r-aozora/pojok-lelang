@extends('layout.main')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Tambah Data Barang</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item">Data Lelang</li>
                    <li class="breadcrumb-item"><a href="{{ url('/barang') }}">Data Barang</a></li>
                    <li class="breadcrumb-item active">Tambah Data</li>
                </ol>
            </nav>
        </div>
        <section class="section profile">
            <div class="row">
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                            <img src="{{ asset('img/avatar-petugas.png') }}" alt="" class="rounded-circle">
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-body pt-3">
                            <h5 class="card-title">Tambah Data</h5>
                            <form action="{{ url('barang') }}" method="post">
                                @csrf
                                <div class="row mb-3">
                                    <label for="id" class="col-md-4 col-lg-3 col-form-label">ID Barang</label>
                                    <div class="col-md-8 col-lg-9"> 
                                        <input name="id" type="number" class="form-control" id="id">
                                        <div class="invalid-feedback"> Masukkan ID yang valid</div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="nama" class="col-md-4 col-lg-3 col-form-label">Nama Narang</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="nama" type="text" class="form-control" id="nama">
                                        <div class="invalid-feedback"> Masukkan nama barang yang valid</div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="username" class="col-md-4 col-lg-3 col-form-label">Harga Awal</label>
                                    <div class="col-md-8 col-lg-9"> 
                                        <input name="username" type="text" class="form-control" id="username">
                                        <div class="invalid-feedback"> Masukkan username yang valid</div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="deskripsi" class="col-md-4 col-lg-3 col-form-label">Deskripsi Barang</label>
                                    <div class="col-md-8 col-lg-9"> 
                                        <textarea name="deskripsi" class="form-control" style="height: 100px"></textarea>
                                        <div class="invalid-feedback"> Masukkan deskripsi yang valid</div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="foto" class="col-md-4 col-lg-3 col-form-label">Foto Barang</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="foto" class="form-control" type="file" id="foto">
                                        <div class="invalid-feedback"> Masukkan foto yang valid</div>
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