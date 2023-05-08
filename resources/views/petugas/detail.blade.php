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
                    <li class="breadcrumb-item active">Detail Petugas</li>
                </ol>
            </nav>
        </div>
        <section class="section profile">
            <div class="row">
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                            @if ($petugas->level === 'Administrator')
                                <img src="{{ asset('img/avatar-admin.png') }}" alt="Profile" class="rounded-circle">
                            @elseif ($petugas->level === 'Petugas')
                                <img src="{{ asset('img/avatar-petugas.png') }}" alt="Profile" class="rounded-circle">
                            @endif
                            <h2>{{ $petugas->nama }}</h2>
                            <h3>{{ $petugas->level }}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-body pt-3">
                            <ul class="nav nav-tabs nav-tabs-bordered">
                                <li class="nav-item"> <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Detail</button></li>
                                <li class="nav-item"> <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit</button></li>
                                <li class="nav-item"> <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-hapus">Hapus</button></li>
                            </ul>
                        <div class="tab-content pt-2">
                            <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                <h5 class="card-title">Detail Petugas</h5>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">ID Petugas</div>
                                    <div class="col-lg-9 col-md-8">{{ $petugas->id }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Nama Petugas</div>
                                    <div class="col-lg-9 col-md-8">{{ $petugas->nama }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Username</div>
                                    <div class="col-lg-9 col-md-8">{{ $petugas->username }}</div>
                                </div>
                                {{-- <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Password</div>
                                    <div class="col-lg-9 col-md-8">{{ $petugas->password }}</div>
                                </div> --}}
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Level</div>
                                    <div class="col-lg-9 col-md-8">{{ $petugas->level }}</div>
                                </div>
                            </div>
                            <div class="tab-pane fade profile-edit" id="profile-edit">
                                <h5 class="card-title">Edit Data</h5>
                                <form action="{{ url('petugas/'.$petugas->id) }}" method="get">
                                    @csrf
                                    <div class="row mb-3">
                                        <label for="id" class="col-md-4 col-lg-3 col-form-label">ID Petugas</label>
                                        <div class="col-md-8 col-lg-9"> 
                                            <input name="id" type="text" class="form-control" id="id" value="{{ $petugas->id }}" readonly>
                                        </div>
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
                                            <input name="password" type="password" class="form-control" id="password" value="{{ $petugas->password }}">
                                        </div>
                                    </div> --}}
                                    <div class="row mb-3">
                                        <label for="level" class="col-md-4 col-lg-3 col-form-label">Level</label>
                                        <div class="col-md-8 col-lg-9">
                                            <select class="form-select" id="level" required>
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
                            <div class="tab-pane fade" id="profile-hapus">
                                <h5 class="card-title">Hapus Data</h5>
                                @if (Auth::user()->id === $petugas->id)
                                    <p>Anda tidak bisa menghapus diri Anda sendiri.</p>
                                @else 
                                    <p>Disini Anda akan melakukan hapus data. Apa Anda yakin ingin menghapus data?</p>
                                    <form onsubmit="return confirm('Data Akan Dihapus')" action="{{ url('petugas/'.$petugas->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-sm text-white" style="background-color:#055E68; border-radius:20px" role="button"><i class="bi bi-trash"></i> Hapus</button>
                                        </div>
                                    </form>
                                @endif
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection