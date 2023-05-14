@extends('layout.main')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Detail Barang</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item">Data Lelang</li>
                    <li class="breadcrumb-item"><a href="{{ url('/barang') }}">Data Barang</a></li>
                    <li class="breadcrumb-item active">Detail Data</li>
                </ol>
            </nav>
        </div>
        <section class="section profile">
            <div class="row">
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                            @if ($barang->foto)
                                <img src="{{ url('img/barang'.'/'.$barang->foto) }}" alt="" style="max-width: 200px; max-height: 200px">
                            @endif
                            <h2>{{ $barang->nama_barang }}</h2>
                            {{-- <h3>{{ $barang->nama_barang }}</h3> --}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-body pt-3">
                            <div class="profile-overview">
                                <h5 class="card-title">Detail barang</h5>
                                <div class="row mb-3">
                                    <div class="col-lg-3 col-md-4 label ">ID Barang</div>
                                    <div class="col-lg-9 col-md-8">{{ $barang->id }}</div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-3 col-md-4 label">Nama Barang</div>
                                    <div class="col-lg-9 col-md-8">{{ $barang->nama_barang }}</div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-3 col-md-4 label">Harga Awal</div>
                                    <div class="col-lg-9 col-md-8">{{ $barang->harga_awal }}</div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-3 col-md-4 label">Tanggal</div>
                                    <div class="col-lg-9 col-md-8">{{ $barang->created_at }}</div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-3 col-md-4 label">Deskripsi Barang</div>
                                    <div class="col-lg-9 col-md-8">{{ $barang->deskripsi_barang }}</div>
                                </div>
                            </div>
                            <div class="text-center">
                                <a href="{{ url('barang/'.$barang->id.'/edit') }}" class="btn btn-sm text-white" style="background-color:#055E68; border-radius:20px"><i class="bi bi-pencil-square"></i> Edit</a>
                                <form onsubmit="return confirm('Data Akan Dihapus')" action="{{ url('barang/'.$barang->id) }}" method="post" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm text-white" style="background-color:#055E68; border-radius:20px" role="button"><i class="bi bi-trash"></i> Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection