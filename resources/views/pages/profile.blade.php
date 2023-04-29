@extends('layout.main')

@section('content')
    <div class="container">
        <h2 class="mt-4">Dashboard</h2>
        <div class="row">
            <div class="col">
                <div class="card mt-4 mb-4 shadow-lg">
                    <div class="card-body">
                        <div class="card-header mb-4" style="background-color:#055E68; max-height:60px">
                            <h5 class="card-title mt-2 fw-bold text-light">Profile {{ auth()->user()->nama }}</h5>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                @if (auth()->user()->level === 'Administrator')
                                    <img src="../img/avatar-admin.png" class="mx-auto d-block img-fluid" alt="" style="weight:200px; height:200px; border-radius:100px">    
                                @elseif (auth()->user()->level === 'Petugas')
                                    <img src="../img/avatar-petugas.png" class="mx-auto d-block img-fluid" alt="" style="weight:200px; height:200px; border-radius:100px">
                                @elseif (auth()->user()->level === 'Masyarakat')
                                    <img src="../img/avatar-masyarakat.png" class="mx-auto d-block img-fluid" alt="" style="weight:200px; height:200px; border-radius:100px">
                                @endif
                            </div>
                            <div class="col-9">
                                <div class="form-outline mb-3">
                                    <label for="id" class="form-label">ID</label>
                                    <input type="number" class="form-control" id="id" value="{{ auth()->user()->id }}" readonly>
                                </div>
                                <div class="form-outline mb-3">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="nama" value="{{ auth()->user()->nama }}" readonly>
                                </div>
                                <div class="form-outline mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="username" value="{{ auth()->user()->username }}" readonly>
                                </div>
                                <div class="form-outline mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" value="{{ auth()->user()->password }}" readonly>
                                </div>
                                @if (auth()->user()->level === 'Masyarakat')
                                    <div class="form-outline mb-3">
                                        <label for="telepon" class="form-label">No Telepon</label>
                                        <input type="number" class="form-control" id="telepon" readonly>
                                    </div>
                                @endif
                                <div class="form-outline mb-3">
                                    <label for="level" class="form-label">Level</label>
                                    <input type="text" class="form-control" id="level" value="{{ auth()->user()->level }}" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@if (auth()->user()->level === 'Administrator')
    <div class="container mb-4">
        <div class="row">
            <div class="col">
                <div class="card mt-4 mb-4 shadow-lg">
                    <div class="card-body">
                        <div class="card-header" style="background-color:#055E68; max-height:60px">
                            <h5 class="card-title mt-2 fw-bold text-light">Menu Administrator</h5>
                        </div>
                        <table class="table table-bordered mt-4" style="text-align: center">
                            <thead>
                                <tr>
                                    <th class="bi bi-people px-1"> Data Masyarakat</th>
                                    <th class="bi bi-person-vcard px-1"> Data Petugas</th>
                                    <th class="bi bi-boxes px-1"> Data Barang</th>
                                    <th class="bi bi-clipboard-data px-1"> Laporan Lelang</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a class="btn btn-sm text-white" style="background-color:#055E68" href="{{ url('/masyarakat') }}" role="button">Buka <i class="bi bi-arrow-right"></i></a></td>
                                    <td><a class="btn btn-sm text-white" style="background-color:#055E68" href="{{ url('/petugas') }}" role="button">Buka <i class="bi bi-arrow-right"></i></a></td>
                                    <td><a class="btn btn-sm text-white" style="background-color:#055E68" href="{{ url('/barang') }}" role="button">Buka <i class="bi bi-arrow-right"></i></a></td>
                                    <td><a class="btn btn-sm text-white" style="background-color:#055E68" href="{{ url('/lelang') }}" role="button">Buka <i class="bi bi-arrow-right"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@elseif (auth()->user()->level === 'Petugas')
    <div class="container mb-4">
        <div class="row">
            <div class="col">
                <div class="card mt-4 mb-4 shadow-lg">
                    <div class="card-body">
                        <div class="card-header" style="background-color:#055E68; max-height:60px">
                            <h5 class="card-title mt-2 fw-bold text-light">Menu Petugas</h5>
                        </div>
                        <table class="table table-bordered mt-4" style="text-align: center">
                            <thead>
                                <tr>
                                    <th class="bi bi-people px-1"> Data Masyarakat</th>
                                    <th class="bi bi-boxes px-1"> Data Barang</th>
                                    <th class="bi bi-clipboard-data px-1"> Aktivasi Lelang</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a class="btn btn-sm text-white" style="background-color:#055E68" href="{{ url('/masyarakat') }}" role="button">Buka </i><i class="bi bi-arrow-right px-1"></i></a></td>
                                    <td><a class="btn btn-sm text-white" style="background-color:#055E68" href="{{ url('/barang') }}" role="button">Buka </i><i class="bi bi-arrow-right px-1"></i></a></td>
                                    <td><a class="btn btn-sm text-white" style="background-color:#055E68" href="{{ url('/lelang') }}" role="button">Buka </i><i class="bi bi-arrow-right px-1"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@elseif (auth()->user()->level === 'Masyarakat')
    <div class="container mb-4">
        <div class="row">
            <div class="col">
                <div class="card mt-4 mb-4 shadow-lg">
                    <div class="card-body">
                        <div class="card-header" style="background-color:#055E68; max-height:60px">
                            <h5 class="card-title mt-2 fw-bold text-light">History Lelang</h5>
                        </div>                        
                        <table class="table table-bordered mt-4" style="text-align: center">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Barang</th>
                                    <th>Harga Awal</th>
                                    <th>Harga Tertinggi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
</div>
</div>
@endsection