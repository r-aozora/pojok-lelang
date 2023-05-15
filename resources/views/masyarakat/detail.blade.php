@extends('layout.main')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Detail Masyarakat</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item">Data Lelang</li>
                    <li class="breadcrumb-item"><a href="{{ url('/masyarakat') }}">Data Masyarakat</a></li>
                    <li class="breadcrumb-item active">Detail Data</li>
                </ol>
            </nav>
        </div>
        <section class="section profile">
            <div class="row">
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                            <img src="{{ asset('img/avatar-masyarakat.png') }}" alt="" class="rounded-circle">
                            <h2>{{ $masyarakat->nama }}</h2>
                            <h3>{{ $masyarakat->level }}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-body pt-3">
                            <div class="profile-overview">
                                <h5 class="card-title">Detail Masyarakat</h5>
                                <div class="row mb-3">
                                    <div class="col-lg-3 col-md-4 label ">ID</div>
                                    <div class="col-lg-9 col-md-8">{{ $masyarakat->id }}</div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-3 col-md-4 label">Nama Lengkap</div>
                                    <div class="col-lg-9 col-md-8">{{ $masyarakat->nama }}</div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-3 col-md-4 label">Username</div>
                                    <div class="col-lg-9 col-md-8">{{ $masyarakat->username }}</div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-3 col-md-4 label">Telepon</div>
                                    <div class="col-lg-9 col-md-8">{{ $telepon }}</div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-3 col-md-4 label">Level</div>
                                    <div class="col-lg-9 col-md-8">{{ $masyarakat->level }}</div>
                                </div>
                            </div>
                            <div class="text-center"> 
                                <a href="{{ url('masyarakat/'.$masyarakat->id.'/edit') }}" class="btn btn-sm text-white" style="background-color:#055E68; border-radius:20px"><i class="bi bi-pencil-square"></i> Edit</a>
                                <form onsubmit="return confirm('Data Akan Dihapus')" action="{{ url('masyarakat/'.$masyarakat->id) }}" method="post" class="d-inline">
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