@extends('layout.main')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Data Barang</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item">Data Lelang</li>
                    <li class="breadcrumb-item active">Data barang</li>
                </ol>
            </nav>
            </div>
            <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Data Barang</h5>
                            <p>Di sini Anda dapat mengelola data barang. Mulai dari tambah data, lihat data, edit data, sampai hapus data.</p>
                                <div class=" d-flex flex-wrap justify-content-center mt-3">
                                    <div class="col-6 mb-4">
                                        <div class="col-sm-6">
                                            <form action="{{ url('barang') }}" method="get" class="col-12" role="search" style="border-radius: 20px">
                                                <input type="search" class="form-control form-control-sm me-1" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Search..." aria-label="Search">
                                                {{-- <button class="btn" type="submit" style="color:#055E68"><i class="bi bi-magnifying-glass"></i></button> --}}
                                            </form>
                                        </div>
                                    </div>
                                <div class="text-end col-6">
                                    <a href="{{ url('barang/create') }}" type="button" class="btn btn-sm text-white" style="background-color: #055E68; border-radius:20px">
                                        <i class="bi bi-plus"></i> Tambah Data
                                    </a>
                                </div>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Nama Barang</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Lainnya</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($barang as $item)
                                        <tr>
                                            <td><a href="{{ url('barang/'.$item->id) }}">{{ $item->id }}</a></td>
                                            <td><a href="{{ url('barang/'.$item->id) }}">{{ $item->nama_barang }}</a></td>
                                            <td>{{ $item->created_at }}</a></td>
                                            <td>Rp. {{ $item->harga_awal }}</a></td>
                                            <td>
                                                <a href="{{ url('barang/'.$item->id.'/edit') }}" class="btn btn-sm text-white" style="background-color: #055E68; border-radius: 20px"><i class="bi bi-pencil-square"></i></a>
                                                <form onsubmit="return confirm('Data Akan Dihapus')" action="{{ url('barang/'.$item->id) }}" method="post" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm text-white" style="background-color: #055E68; border-radius: 20px" role="button"><i class="bi bi-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $barang->withQueryString()->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection