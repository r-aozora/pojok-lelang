@extends('layout.main')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Detail Lelang</h1>
            <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item">Lelang</li>
                <li class="breadcrumb-item"><a href="{{ url('/gallery') }}">Gallery Lelang</a></li>
                <li class="breadcrumb-item active">Detail Lelang</li>
            </ol>
            </nav>
        </div>
        <section class="section profile">
            <div class="row">
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                            <img src="{{ url('img/barang/'.$lelang->foto) }}" alt="" style="max-width: 200px; max-height: 200px">
                            <h2>{{ $lelang->nama_barang }}</h2>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-body pt-3">
                            <ul class="nav nav-tabs nav-tabs-bordered">
                                <li class="nav-item"> <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button></li>
                                @if ($lelang->status === 'Dibuka')
                                    <li class="nav-item"> <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-bid">Tawar</button></li>
                                @endif
                            </ul>
                            <div class="tab-content pt-2">
                                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                    <h5 class="card-title">Profile Details</h5>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">ID Lelang</div>
                                        <div class="col-lg-9 col-md-8">{{ $lelang->id }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">ID Barang</div>
                                        <div class="col-lg-9 col-md-8">{{ $lelang->id_barang }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Nama Barang</div>
                                        <div class="col-lg-9 col-md-8">{{ $lelang->nama_barang }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Harga Awal</div>
                                        <div class="col-lg-9 col-md-8">Rp {{ $lelang->harga_awal }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Tanggal</div>
                                        <div class="col-lg-9 col-md-8">{{ $lelang->created_at }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Harga Saat Ini</div>
                                        <div class="col-lg-9 col-md-8">
                                            @if ($lelang->penawaran_harga === null)
                                                Rp {{ $lelang->harga_awal }}
                                            @else
                                                Rp {{ $lelang->penawaran_harga }}
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Deskripsi Barang</div>
                                        <div class="col-lg-9 col-md-8">{{ $lelang->deskripsi_barang }}</div>
                                    </div>
                                </div>
                                <div class="tab-pane fade profile-menu" id="profile-bid">
                                    <h5 class="card-title">Form Penawaran</h5>
                                    <p>Masukkan harga Anda untuk memenangkan lelang</p>
                                    <form action="{{ url('/gallery') }}" method="post">
                                        @csrf
                                        <input name="id_lelang" type="hidden" class="form-control" id="id_lelang" value="{{ $lelang->id }}">
                                        <input name="id_barang" type="hidden" class="form-control" id="id_barang" value="{{ $lelang->id_barang }}">
                                        <input name="id_masyarakat" type="hidden" class="form-control" id="id_masyarakat" value="{{ Auth::user()->id }}">
                                        <div class="row mb-3">
                                            <label for="penawaran_harga" class="col-md-4 col-lg-3 col-form-label">Harga Anda</label>
                                            <div class="col-md-8 col-lg-9"> 
                                                <input name="penawaran_harga" type="text" class="form-control" id="penawaran_harga">
                                                <div class="invalid-feedback"> Masukkan harga yang valid</div>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-sm text-white" style="background-color: #055E68; border-radius: 15px">Tawar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection