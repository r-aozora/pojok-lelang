@extends('layout.main')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Profile</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item">Lelang</li>
                    <li class="breadcrumb-item active">Aktivasi Lelang</li>
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
                            <form action="{{ url('/lelang') }}" method="post">
                                @csrf
                                <input type="hidden" name="id_petugas" id="id_petugas" class="form-control" value="{{ Auth::user()->id }}">
                                <div class="row mb-3">
                                    <label for="id_barang" class="col-md-4 col-lg-3 col-form-label">Barang</label>
                                    <div class="col-md-8 col-lg-9">
                                        <select name="id_barang" class="form-select" id="id_barang" required>
                                            <option disabled selected>Pilih Barang</option>
                                            @foreach ($barang as $item)
                                                <option value="{{ $item->id }}">{{ $item->nama_barang }}</option>
                                            @endforeach
                                        </select>
                                        <div class="invalid-feedback"> Masukkan barang yang valid</div>
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