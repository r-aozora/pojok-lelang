@extends('layout.main')
@section('content')
<div class="container">
    <h2 class="mt-4">Dashboard</h2>
    <div class="row">
        <div class="col">
            <div class="card mt-4 mb-4">
                <div class="card-body">
                    <div class="card-header mb-4" style="background-color:#055E68; max-height:60px">
                        <h5 class="card-title mt-2 fw-bold text-light">Profile {{ auth()->user()->nama }}</h5>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <img src="../img/person-circle.svg" class="rounded mx-auto d-block img-fluid" alt="" style="weight:200px; height:200px;">
                        </div>
                        <div class="col-9">
                            <div class="mb-3">
                                <label for="id" class="form-label">ID</label>
                                <input type="number" class="form-control" id="id" placeholder="{{ auth()->user()->id }}" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" placeholder="{{ auth()->user()->nama }}" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" placeholder="{{ auth()->user()->username }}" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="{{ auth()->user()->password }}" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="level" class="form-label">Level</label>
                                <input type="text" class="form-control" id="level" placeholder="{{ auth()->user()->level }}" readonly>
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
                <div class="card mt-4 mb-4">
                    <div class="card-body">
                        <h5 class="card-title mt-2 fw-bold" style="color:#055E68">Menu Administrator</h5>
                        <table class="table table-bordered mt-4" style="text-align: center">
                        <thead>
                            <tr>
                            <th><i class="bi bi-people px-1"></i>Data Masyarakat</th>
                            <th><i class="bi bi-box px-1"></i>Data Petugas</th>
                            <th><i class="bi bi-box2 px-1"></i>Data Barang</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td><a class="btn text-white" style="background-color:#055E68" href="#" role="button">Buka<i class="bi bi-door-open px-1"></i></a></td>
                            <td><a class="btn text-white" style="background-color:#055E68" href="#" role="button">Buka<i class="bi bi-door-open px-1"></i></a></td>
                            <td><a class="btn text-white" style="background-color:#055E68" href="#" role="button">Buka<i class="bi bi-door-open px-1"></i></a></td>
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
                <div class="card mt-4 mb-4">
                    <div class="card-body">
                        <div class="card-header" style="background-color:#055E68; max-height:60px">
                            <h5 class="card-title mt-2 fw-bold text-light">Menu Petugas</h5>
                        </div>
                        <table class="table table-bordered mt-4" style="text-align: center">
                            <thead>
                                <tr>
                                <th><i class="bi bi-people px-1"></i>Data Masyarakat</th>
                                <th><i class="bi bi-box px-1"></i>Data Barang</th>
                                <th><i class="bi bi-box2 px-1"></i>Data Lelang</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td><a class="btn text-white" style="background-color:#055E68" href="#" role="button">Buka<i class="bi bi-door-open px-1"></i></a></td>
                                <td><a class="btn text-white" style="background-color:#055E68" href="#" role="button">Buka<i class="bi bi-door-open px-1"></i></a></td>
                                <td><a class="btn text-white" style="background-color:#055E68" href="#" role="button">Buka<i class="bi bi-door-open px-1"></i></a></td>
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
                <div class="card mt-4 mb-4">
                    <div class="card-body">
                        <div class="card-header" style="background-color:#055E68; max-height:60px">
                            <h5 class="card-title mt-2 fw-bold text-light">History Lelang</h5>
                        </div>                        <table class="table table-bordered mt-4" style="text-align: center">
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