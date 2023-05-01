@extends('layout.main')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Data Petugas</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item">Data Lelang</li>
                    <li class="breadcrumb-item active">Data Petugas</li>
                </ol>
            </nav>
            </div>
            <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Data Petugas</h5>
                            <p>Di sini Anda dapat mengelola data petugas. Mulai dari tambah data, lihat data, edit data, sampai hapus data.</p>
                            <div class=" d-flex flex-wrap justify-content-center mt-3">
                                <div class="col-6 col-lg-6 mb-2 mb-lg-0 me-lg-auto" style="white-space:nowrap">
                                    <div class="col-sm-6">
                                        <form action="{{ url('petugas') }}" method="get" class="col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto" role="search">
                                            <input type="search" class="form-control form-control-sm me-1" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Search..." aria-label="Search">
                                            <button class="btn" type="submit" style="color:#055E68"><i class="bi bi-magnifying-glass"></i></button>
                                        </form>
                                    </div>
                                </div>
                            <div class="text-end col-6 col-lg-6 me-lg-auto">
                                <a href="{{ url('petugas/create') }}" type="button" class="btn btn-sm text-white" style="background-color: #055E68">
                                    <i class="bi bi-plus"></i> Tambah Data
                                </a>
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Nama Petugas</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">Level</th>
                                        <th scope="col">Lainnya</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($petugas as $item)
                                        <tr>
                                            <td><a href="{{ url('petugas/'.$item->id) }}">{{ $item->id }}</a></td>
                                            <td><a href="{{ url('petugas/'.$item->id) }}">{{ $item->nama }}</a></td>
                                            <td><a href="{{ url('petugas/'.$item->id) }}">{{ $item->username }}</a></td>
                                            <td><a href="{{ url('petugas/'.$item->id) }}">{{ $item->level }}</a></td>
                                            <td>
                                                <a href="{{ url('petugas/'.$item->id.'/edit') }}" class="btn btn-sm text-white" style="background-color: #055E68; border-radius: 20px"><i class="bi bi-pencil-square"></i> Edit</a>
                                                <form onsubmit="return confirm('Data Akan Dihapus')" action="{{ url('petugas/'.$item->id) }}" method="post" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm text-white" style="background-color: #055E68; border-radius: 20px" role="button"><i class="bi bi-trash"></i> Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $petugas->withQueryString()->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection