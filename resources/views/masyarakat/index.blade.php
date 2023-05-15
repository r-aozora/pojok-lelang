@extends('layout.main')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Data Masyarakat</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item">Data Lelang</li>
                    <li class="breadcrumb-item active">Data Masyarakat</li>
                </ol>
            </nav>
            </div>
            <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Data Masyarakat</h5>
                            @if (Auth::user()->level === 'Administrator')
                                <p>Di sini Anda dapat mengelola data masyarakat. Mulai dari tambah data, lihat data, edit data, sampai hapus data.</p>
                            @else
                                <p>Di sini Anda hanya dapat melihat data masyarakat.</p>
                            @endif
                                <div class=" d-flex flex-wrap justify-content-center mt-3">
                                    <div class="col-6 mb-4">
                                        <div class="col-sm-6">
                                            <form action="{{ url('masyarakat') }}" method="get" class="col-12" role="search" style="border-radius: 20px">
                                                <input type="search" class="form-control form-control-sm me-1" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Search..." aria-label="Search">
                                                {{-- <button class="btn" type="submit" style="color:#055E68"><i class="bi bi-magnifying-glass"></i></button> --}}
                                            </form>
                                        </div>
                                    </div>
                                <div class="text-end col-6">
                                    @if (Auth::user()->level === 'Administrator')
                                        <a href="{{ url('masyarakat/create') }}" type="button" class="btn btn-sm text-white" style="background-color: #055E68; border-radius:20px">
                                            <i class="bi bi-plus"></i> Tambah Data
                                        </a>
                                    @endif
                                </div>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Nama Lengkap</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">Telepon</th>
                                        @if (Auth::user()->level === 'Administrator')
                                            <th scope="col">Lainnya</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($masyarakat as $item)
                                        <tr>
                                            <td><a href="{{ url('masyarakat/'.$item->id) }}">{{ $item->id }}</a></td>
                                            <td><a href="{{ url('masyarakat/'.$item->id) }}">{{ $item->nama }}</a></td>
                                            <td><a href="{{ url('masyarakat/'.$item->id) }}">{{ $item->username }}</a></td>
                                            <td>{{ $item->telepon }}</td>
                                            @if (Auth::user()->level === 'Administrator')
                                                <td>
                                                    <a href="{{ url('masyarakat/'.$item->id.'/edit') }}" class="btn btn-sm text-white" style="background-color: #055E68; border-radius: 20px"><i class="bi bi-pencil-square"></i></a>
                                                    <form onsubmit="return confirm('Data Akan Dihapus')" action="{{ url('masyarakat/'.$item->id) }}" method="post" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm text-white" style="background-color: #055E68; border-radius: 20px" role="button"><i class="bi bi-trash"></i></button>
                                                    </form>
                                                </td>
                                            @endif
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $masyarakat->withQueryString()->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection