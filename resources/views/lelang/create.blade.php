@extends('layout.main')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Profile</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Users</li>
                    <li class="breadcrumb-item active">Profile</li>
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
                            <h5 class="card-title">Tambah Lelang</h5>
                            <form action="{{ url('/lelang') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="barang" class="col-md-4 col-lg-3 col-form-label">Barang</label>
                                    <div class="col-md-8 col-lg-9">
                                        <select name="barang" class="form-select" id="barang" required>
                                            @foreach ($lelang as $item)
                                                <option value="{{ $item->nama_barang }}">{{ $item->nama_barang }}</option>
                                            @endforeach
                                        </select>
                                        <div class="invalid-feedback"> Masukkan barang yang valid</div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection