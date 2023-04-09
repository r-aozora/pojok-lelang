@extends('layout.main')

@section('content')
    <div class="container mb-4">
        <h2 class="mt-3">Tambah Data Masyarakat</h2>
        <div class="row">
            <div class="col">
                <div class="card mt-3 mb-3">
                    <div class="card-body">
                        {{-- <div class="card-header mb-3" style="background-color:#055E68; max-height:60px">
                            <h5 class="card-title mt-2 fw-medium text-light">{{ $masyarakat->nama }}</h5>
                        </div> --}}
                        <div class="row">
                            <div class="col-3">
                                <img src="../../img/avatar-masyarakat.png" class="mx-auto d-block img-fluid" alt="" style="weight:200px; height:200px; border-radius:100px">
                            </div>
                            <div class="col-9">
                                <form action="{{ url('/masyarakat') }}" method="post">
                                    @csrf
                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" id="id" placeholder="ID Masyarakat" value="{{ Session::get('id') }}">
                                        <label for="id">ID Masyarakat</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="nama" placeholder="Nama Masyarakat" value="{{ Session::get('nama') }}">
                                        <label for="nama">Nama Lengkap</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="username" placeholder="Username" value="{{ Session::get('username') }}">
                                        <label for="username">Username</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control" id="password" placeholder="Password">
                                        <label for="password">Password</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="level" aria-placeholder="Level">
                                            <option selected value="Masyarakat">Masyarakat</option>
                                        </select>
                                        <label for="level">Level</label>
                                    </div>
                                        <a href="{{ url('masyarakat') }}" type="button" class="btn btn-outline"><i class="bi bi-arrow-left"></i> Kembali</a>
                                        <button type="submit" class="btn text-white" style="background-color:#055E68"><i class="bi bi-box-arrow-in-down"></i> Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
