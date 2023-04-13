@extends('layout.main')

@section('content')
    <div class="container mb-3">
        <h2 class="mt-3">Detail Barang</h2>
        <div class="row">
            <div class="col">
                <div class="card mt-3 mb-3">
                    <div class="card-body">
                        <div class="card-header mb-3" style="background-color:#055E68; max-height:60px">
                            <h5 class="card-title mt-2 fw-medium text-light">{{ $barang->nama_barang }}</h5>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <img src="{{ $barang->foto }}" class="rounded mx-auto d-block img-fluid" alt="" style="weight:200px; height:200px;">
                            </div>
                            <div class="col-9">
                                <form>
                                    @csrf
                                    <div class="form-outline mb-3">
                                        <input type="text" class="form-control" id="id" value="{{ $barang->id_barang }}" readonly>
                                        <label for="id" class="form-label">ID Barang</label>
                                    </div>
                                    <div class="form-outline mb-3">
                                        <input type="text" class="form-control" id="nama" value="{{ $barang->nama_barang }}" readonly>
                                        <label for="nama" class="form-label">Nama Barang</label>
                                    </div>
                                    <div class="form-outline mb-3">
                                        <input type="date" class="form-control" id="tanggal" value="{{ $barang->created_at }}" readonly>
                                        <label for="tanggal" class="form-label">Tanggal</label>
                                    </div>
                                    <div class="form-outline mb-3">
                                        <input type="number" class="form-control" id="harga" value="{{ $barang->harga_awal }}" readonly>
                                        <label for="harga" class="form-label">Harga Awal</label>
                                    </div>
                                    <div class="form-outline mb-3">
                                        <textarea class="form-control" id="deskripsi" rows="5" readonly>{{ $barang->deskripsi }}</textarea>
                                        <label for="deskripsi" class="form-label">Deskripsi Barang</label>
                                    </div>
                                    <div>
                                        <a href="{{ url('barang') }}"  class="btn btn-outline"><i class="bi bi-arrow-left"></i> Kembali</a>
                                        <a href="{{ url('barang/'.$barang->id_barang.'/edit') }}" class="btn text-white" style="background-color: #055E68"><i class="bi bi-pencil-square"></i> Edit</a>
                                        <form onsubmit="return confirm('Data Akan Dihapus')" action="{{ url('barang/'.$barang->id_barang) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn text-white" style="background-color: #055E68" role="button"><i class="bi bi-trash"></i> Hapus</button>
                                        </form>
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