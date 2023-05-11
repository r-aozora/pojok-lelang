@extends('layout.main')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Aktivasi Lelang</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item">Data Lelang</li>
                    <li class="breadcrumb-item active">Aktivasi Lelang</li>
                </ol>
            </nav>
            </div>
            <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Data Aktivasi Lelang</h5>
                            <p>Di sini Anda dapat mengelola data lelang. Mulai dari tambah data, lihat data, edit data, sampai hapus data.</p>
                                <div class="d-flex flex-wrap justify-content-center mt-3">
                                    <div class="col-6 mb-4">
                                        <div class="col-sm-6">
                                            <form action="{{ url('lelang') }}" method="get" class="col-12" role="search" style="border-radius: 20px">
                                                <input type="search" class="form-control form-control-sm me-1" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Search..." aria-label="Search">
                                                {{-- <button class="btn" type="submit" style="color:#055E68"><i class="bi bi-magnifying-glass"></i></button> --}}
                                            </form>
                                        </div>
                                    </div>
                                <div class="text-end col-6">
                                    @if (auth()->user()->level === 'Petugas')
                                        <a href="{{ url('lelang/create') }}" type="button" class="btn btn-sm text-white" style="background-color: #055E68; border-radius:20px">
                                            <i class="bi bi-plus"></i> Tambah Data
                                        </a>
                                    @endif
                                    @if (auth()->user()->level === 'Petugas' || auth()->user()->level === 'Administrator')
                                        <a href="{{ url('/laporan') }}" type="button" class="btn btn-sm text-white" style="background-color: #055E68; border-radius:20px">
                                            <i class="bi bi-printer"></i> Print Laporan
                                        </a>
                                    @endif
                                </div>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Nama Barang</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Pemenang</th>
                                        <th scope="col">Harga Tertinggi</th>
                                        <th scope="col">Status</th>
                                        @if (Auth::user()->level === 'Petugas')
                                            <th scope="col">Lainnya</th>  
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($lelang as $item)
                                        <tr>
                                            <td><a href="{{ url('lelang/'.$item->id) }}">{{ $item->id_lelang }}</a></td>
                                            <td><a href="{{ url('lelang/'.$item->id) }}">{{ $item->nama_barang }}</a></td>
                                            <td>{{ $item->created_at }}</td>
                                            <td>{{ $item->id_masyarakat }}</td>
                                            <td>{{ $item->harga_akhir }}</td>
                                            <td>
                                                @if ($item->status === '')
                                                    Lelang Belum Dibuka
                                                @elseif ($item->status === 'Dibuka')
                                                    Lelang Dibuka
                                                @elseif ($item->status === 'Ditutup')
                                                    Lelang Ditutup
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ url('lelang/'.$item->id.'/edit') }}" class="btn btn-sm text-white" style="background-color: #055E68; border-radius: 20px"><i class="bi bi-pencil-square"></i></a>
                                                <form onsubmit="return confirm('Data Akan Dihapus')" action="{{ url('lelang/'.$item->id) }}" method="post" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm text-white" style="background-color: #055E68; border-radius: 20px" role="button"><i class="bi bi-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $lelang->withQueryString()->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection