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
                        <div class=" d-flex flex-wrap justify-content-center mt-3">
                            <div class="col-6 col-lg-6 mb-2 mb-lg-0 me-lg-auto" style="white-space:nowrap">
                                <div class="col-sm-6">
                                    <form action="{{ url('barang') }}" method="get" class="col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto" role="search">
                                        <input type="search" class="form-control form-control-sm me-1" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Search..." aria-label="Search">
                                        <button class="btn" type="submit" style="color:#055E68"><i class="bi bi-magnifying-glass"></i></button>
                                    </form>
                                </div>
                            </div>
                        <div class="text-end col-6 col-lg-6 me-lg-auto">
                            <a href="{{ url('barang/create') }}" type="button" class="btn btn-sm text-white" style="background-color: #055E68">
                                <i class="bi bi-plus"></i> Tambah Data
                            </a>
                        </div>
                        <table class="table table-bordered" style="text-align: center">
                            <thead>
                                <tr>
                                    <th>ID Barang</th>
                                    <th>Nama Barang</th>
                                    <th>Tanggal</th>
                                    <th>Harga Awal</th>
                                    <th>Lainnya</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($barang as $item)
                                <tr>
                                    <td>{{ $item->id_barang }}</td>
                                    <td>{{ $item->nama_barang }}</td>
                                    <td>{{ $item->create_at }}</td>
                                    <td>{{ $item->harga_awal }}</td>
                                    <td>
                                        <button type="button" class="btn btn-sm text-white dropdown-toggle" style="background-color:#055E68" data-bs-toggle="dropdown" aria-expanded="false" role="button">
                                            <i class="bi bi-gear"></i> Aksi
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="{{ url('barang/'.$item->id_barang) }}" class="btn btn-sm dropdown-item " role="button"><i class="bi bi-clipboard"></i> Detail</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('barang/'.$item->id_barang.'/edit') }}" class="btn btn-sm dropdown-item"><i class="bi bi-pencil-square"></i> Edit</a>
                                            </li>
                                            <li>
                                                <form onsubmit="return confirm('Data Akan Dihapus')" action="{{ url('barang/'.$item->id_barang) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm dropdown-item" role="button"><i class="bi bi-trash"></i> Hapus</button>
                                                </form>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $barang->withQueryString()->links() }}
                        <div class="pt-3">
                            <a href="{{ url('profile') }}" class="btn" style="color:#055E68">
                                <i class="bi bi-arrow-left"></i> Kembali
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection