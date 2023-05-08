@extends('layout.main')

@section('content')
    <div class="container mb-4">
        <h2 class="mt-3">Tambah Data Barang</h2>
        <div class="row">
            <div class="col">
                <div class="card mt-3 mb-3">
                    <div class="card-body">
                        {{-- <div class="card-header mb-3" style="background-color:#055E68; max-height:60px">
                            <h5 class="card-title mt-2 fw-medium text-light">{{ $petugas->nama }}</h5>
                        </div> --}}
                        <div class="row">
                            <div class="col-3">
                                <img src="../../img/avatar-petugas.png" class="mx-auto d-block img-fluid" alt="" style="weight:200px; height:200px; border-radius:100px">
                            </div>
                            <div class="col-9">
                                <form action="{{ url('barang') }}" method="post">
                                    @csrf
                                    <div class="form-outline mb-3">
                                        <label for="id">ID Barang</label>
                                        <input type="text" class="form-control" id="id"value="{{ Session::get('id_barang') }}">
                                    </div>
                                    <div class="form-outline mb-3">
                                        <label for="nama">Nama Barang</label>
                                        <input type="text" class="form-control" id="nama" value="{{ Session::get('nama_barang') }}">
                                    </div>
                                    <div class="form-outline mb-3">
                                        <label for="username">Harga Awal</label>
                                        <input type="text" class="form-control" id="username" value="{{ Session::get('harga_awal') }}">
                                    </div>
                                    <div class="form-outline mb-3">
                                        <label for="Deskripsi">Deskripsi Barang</label>
                                        <textarea class="form-control" id="deskripsi" rows="5"></textarea>
                                    </div>
                                    <div class="form-outline mb-3">
                                        <label for="foto" class="form-label">Foto Barang</label>
                                        <input class="form-control" type="file" id="foto">
                                    </div>
                                    <div>
                                        <a href="{{ url('barang') }}" type="button" class="btn btn-outline"><i class="bi bi-arrow-left"></i> Kembali</a>
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
