@extends('layout.main')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Detail Petugas</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item">Data Lelang</li>
                    <li class="breadcrumb-item"><a href="{{ url('/petugas') }}">Data Petugas</a></li>
                    <li class="breadcrumb-item active">Detail Data</li>
                </ol>
            </nav>
        </div>
        <section class="section profile">
            <div class="row">
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                            @if ($petugas->level === 'Administrator')
                                <img src="{{ asset('img/avatar-admin.png') }}" alt="" class="rounded-circle">
                            @elseif ($petugas->level === 'Petugas')
                                <img src="{{ asset('img/avatar-petugas.png') }}" alt="" class="rounded-circle">
                            @endif
                            <h2>{{ $petugas->nama }}</h2>
                            <h3>{{ $petugas->level }}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-body pt-3">
                            <div class="profile-overview">
                                <h5 class="card-title">Detail Petugas</h5>
                                <div class="row mb-3">
                                    <div class="col-lg-3 col-md-4 label ">ID Petugas</div>
                                    <div class="col-lg-9 col-md-8">{{ $petugas->id }}</div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-3 col-md-4 label">Nama Petugas</div>
                                    <div class="col-lg-9 col-md-8">{{ $petugas->nama }}</div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-3 col-md-4 label">Username</div>
                                    <div class="col-lg-9 col-md-8">{{ $petugas->username }}</div>
                                </div>
                                {{-- <div class="row mb-3">
                                    <div class="col-lg-3 col-md-4 label">Password</div>
                                    <div class="col-lg-9 col-md-8">{{ $petugas->password }}</div>
                                </div> --}}
                                <div class="row mb-3">
                                    <div class="col-lg-3 col-md-4 label">Level</div>
                                    <div class="col-lg-9 col-md-8">{{ $petugas->level }}</div>
                                </div>
                            </div>
                            <div class="text-center"> 
                                <a href="{{ url('petugas/'.$petugas->id.'/edit') }}" class="btn btn-sm text-white" style="background-color:#055E68; border-radius:20px"><i class="bi bi-pencil-square"></i> Edit</a>
                                @if (Auth::user()->id !== $petugas->id)
                                    <form onsubmit="return confirm('Data Akan Dihapus')" action="{{ url('petugas/'.$petugas->id) }}" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm text-white" style="background-color:#055E68; border-radius:20px" role="button"><i class="bi bi-trash"></i> Hapus</button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection