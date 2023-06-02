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
                                                <td>{{ $item->id }}</a></td>
                                                <td>{{ $item->nama_barang }}</a></td>
                                                <td>{{ $item->created_at }}</td>
                                                <td>
                                                    @if ($item->nama === null)
                                                        Belum ada Pemenang
                                                    @else
                                                        {{ $item->nama }}
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($item->harga_akhir === null)
                                                        @if ($item->penawaran_harga === null)
                                                            Rp {{ $item->harga_awal }}
                                                        @else
                                                            Rp {{ $item->penawaran_harga }}
                                                        @endif
                                                    @else
                                                        Rp {{ $item->harga_akhir }}
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($item->status === '0')
                                                        <button class="btn btn-sm btn-secondary">
                                                            Belum Dibuka
                                                        </button>
                                                    @elseif ($item->status === 'Dibuka')
                                                        <button class="btn btn-sm text-white" style="background-color: #055E68">
                                                            Lelang Dibuka
                                                        </button>
                                                    @elseif ($item->status === 'Ditutup')
                                                        <button class="btn btn-sm btn-secondary">
                                                            Lelang Ditutup
                                                        </button>
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
            <section class="section">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data Realtime Lelang</h5>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama Barang</th>
                                    <th scope="col">Peserta Lelang Tertinggi</th>
                                    <th scope="col">Harga</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($lelang as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nama_barang }}</td>
                                        <td>
                                            @if ($item->nama === null)
                                                -
                                            @else
                                                {{ $item->nama }}
                                            @endif
                                        </td>
                                        <td>
                                            @if ($item->penawaran_harga === null)
                                                Rp {{ $item->harga_awal }}
                                            @else
                                                Rp {{ $item->penawaran_harga }}
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection