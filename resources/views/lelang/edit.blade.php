@extends('layout.main')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Profile</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item">Lelang</li>
                    <li class="breadcrumb-item active">Buka Lelang</li>
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
                            @if ($lelang->status === '0' || $lelang->status === 'Ditutup')
                                <h5 class="card-title">Buka Lelang</h5>
                                <form action="{{ url('lelang/'.$lelang->id) }}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <div class="row mb-3">
                                        <label for="status" class="col-md-4 col-lg-3 col-form-label">Buka Lelang</label>
                                        <div class="col-md-8 col-lg-9">
                                            <select name="status" class="form-select" id="status" required>
                                                <option disabled selected>Status</option>
                                                <option value="Dibuka">Buka Lelang</option>
                                            </select>
                                            <div class="invalid-feedback"> Masukkan status yang valid</div>
                                        </div>
                                    </div>
                                    <div class="text-center"> 
                                        <button type="submit" class="btn btn-sm text-white" style="background-color:#055E68; border-radius:20px"><i class="bi bi-box-arrow-in-down"></i> Simpan</button>
                                    </div>
                                </form>
                            @elseif ($lelang->status === 'Dibuka')
                                <h5 class="card-title">Tutup Lelang</h5>
                                <form action="{{ url('lelang/'.$lelang->id) }}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="id_masyarakat" id="id_masyarakat" class="form-control" value="{{ $lelang->id_masyarakat }}">
                                    <input type="hidden" name="harga_akhir" id="harga_akhir" class="form-control" value="{{ $lelang->harga_akhir }}">
                                    <div class="row mb-3">
                                        <label for="status" class="col-md-4 col-lg-3 col-form-label">Buka Lelang</label>
                                        <div class="col-md-8 col-lg-9">
                                            <select name="status" class="form-select" id="status" required>
                                                <option disabled selected>Status</option>
                                                <option value="Ditutup">Tutup Lelang</option>
                                            </select>
                                            <div class="invalid-feedback"> Masukkan status yang valid</div>
                                        </div>
                                    </div>
                                    <div class="text-center"> 
                                        <button type="submit" class="btn btn-sm text-white" style="background-color:#055E68; border-radius:20px"><i class="bi bi-box-arrow-in-down"></i> Simpan</button>
                                    </div>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection