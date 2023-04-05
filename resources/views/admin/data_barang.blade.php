@extends('layout.main')
@section('content')
    <div class="container">
        <h3 class="mt-3">Data Barang</h3>
        <div class="row">
            <div class="col">
                <div class="card mt-3 mb-3">
                    <div class="card-body">
                        <div class="card-header" style="background-color:#055E68; max-height:60px">
                            <h5 class="card-title mt-2 fw-medium text-light">Data Barang</h5>
                        </div>                        
                        <div class=" d-flex flex-wrap justify-content-center mt-4">
                            <div class="col-6 col-lg-6 mb-2 mb-lg-0 me-lg-auto" style="white-space:nowrap">
                                <div class="col-sm-6">
                                    <form class="col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto" role="search">
                                        <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                                    </form>
                                </div>
                            </div>
                        <div class="text-end col-6 col-lg-6 me-lg-auto">
                            <button type="button" class="btn text-white" data-bs-toggle="modal" data-bs-target="#tambahBarang" style="background-color: #055E68">
                                <i class="bi bi-plus"></i> Tambah
                            </button>

                            {{-- Modal --}}
                            <div class="modal fade" id="tambahBarang" tabindex="-1" aria-labelledby="tambahBarang" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: #055E68">
                                            <h5 class="modal-title text-light" id="tambahBarang">Tambah Data Barang</h5>
                                        </div>
                                    <div class="modal-body">
                                        <div class="form-floating mb-3">
                                            <input type="text" name="id" class="form-control" placeholder="ID Barang">
                                            <label class="text-start" for="id">ID Barang</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" name="nama" class="form-control" placeholder="Nama Barang">
                                            <label for="nama">Nama Barang</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" name="harga" class="form-control" placeholder="Harga Awal">
                                            <label for="harga">Harga Awal</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <textarea name="deskripsi" class="form-control" placeholder="Deskripsi Barang" style="height:100px">
                                            <label for="deskripsi">Deskripsi Barang</label>
                                        </div>
                                    </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline" data-bs-dismiss="modal"><i class="bi bi-arrow-left-short"></i> Tutup</button>
                                            <button type="button" class="btn text-white" style="background-color:#055E68"><i class="bi bi-box-arrow-in-down"></i> Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Tabel --}}
                        <table class="table table-bordered mt-4" style="text-align: center">
                            <thead>
                                <tr>
                                    <th>ID Barang</th>
                                    <th>Nama Barang</th>
                                    <th>Tanggal</th>
                                    <th>Harga Awal</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <a class="btn btn-sm text-white d-inline" style="background-color:#055E68" href="#" role="button"><i class="bi bi-clipboard"></i></a>
                                        <a class="btn btn-sm text-white d-inline" style="background-color:#055E68" href="#" role="button"><i class="bi bi-pencil-square"></i></a>
                                        <a class="btn btn-sm text-white d-inline" style="background-color:#055E68" href="#" role="button"><i class="bi bi-trash"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection