@extends('layout.main')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Profile</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
            </nav>
        </div>
        <section class="section profile">
            <div class="row">
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                            @if (Auth::user()->level === 'Administrator')
                                <img src="img/avatar-admin.png" alt="Profile" class="rounded-circle">
                            @elseif (Auth::user()->level === 'Petugas')
                                <img src="img/avatar-petugas.png" alt="Profile" class="rounded-circle">
                            @elseif (Auth::user()->level === 'Masyarakat')
                                <img src="img/avatar-masyarakat.png" alt="Profile" class="rounded-circle">
                            @endif
                            <h2>{{ Auth::user()->nama }}</h3>
                            <h3>{{ Auth::user()->level }}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-body pt-3">
                            <ul class="nav nav-tabs nav-tabs-bordered">
                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                                </li>
                                @if (Auth::user()->level === 'Administrator' || Auth::user()->level === 'Petugas')
                                    <li class="nav-item">
                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-menu">Menu</button>
                                    </li>
                                @endif
                                @if (Auth::user()->level === 'Masyarakat')
                                    <li class="nav-item">
                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-history">Histori Lelang</button>
                                    </li>
                                    @if ($telepon === null)
                                        <li class="nav-item"> 
                                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-telepon">Telepon</button>
                                        </li>
                                    @endif
                                @endif
                            </ul>
                            <div class="tab-content pt-2">
                                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                    <h5 style="color: #055E68" class="card-title">Profile Details</h5>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label ">ID</div>
                                        <div class="col-lg-9 col-md-8">{{ Auth::user()->id }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Nama Lengkap</div>
                                        <div class="col-lg-9 col-md-8">{{ Auth::user()->nama }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Username</div>
                                        <div class="col-lg-9 col-md-8">{{ Auth::user()->username }}</div>
                                    </div>
                                    @if (Auth::user()->level === 'Masyarakat')
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Telepon</div>
                                                @if ($telepon === null)
                                                    <div class="col-lg-9 col-md-8">Belum ditambahkan</div>
                                                @else
                                                    <div class="col-lg-9 col-md-8">{{ $telepon }}</div>
                                                @endif
                                        </div>
                                    @endif
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Level</div>
                                        <div class="col-lg-9 col-md-8">{{ Auth::user()->level }}</div>
                                    </div>
                                </div>
                                <div class="tab-pane fade profile-menu" id="profile-menu">
                                    <h5 class="card-title">Menu Anda</h5>
                                    <p>Pilih menu untuk mengelola Pojok Lelang</p>
                                    <section class="section contact">
                                        <div class="row gy-4">
                                            <div class="col-xl-12">
                                                <div class="row">
                                                    @if (Auth::user()->level === 'Administrator' || Auth::user()->level === 'Petugas')
                                                        <div class="col-lg-3">
                                                            <a href="{{ url('/masyarakat') }}">
                                                                <div class="info-box card">
                                                                    <i class="bi bi-people"></i>
                                                                    <h3>Data Masyarakat</h3>
                                                                    @if (Auth::user()->level === 'Administrator')
                                                                        <p>Kelola data masyarakat.</p>
                                                                    @elseif (Auth::user()->level === 'Petugas')
                                                                        <p>Lihat data masyarakat.</p>
                                                                    @endif
                                                                </div>
                                                            </a>
                                                        </div>
                                                        @if (Auth::user()->level === 'Administrator')
                                                            <div class="col-lg-3">
                                                                <a href="{{ url('/petugas') }}">
                                                                    <div class="info-box card">
                                                                        <i class="bi bi-person"></i>
                                                                        <h3>Data Petugas</h3>
                                                                        <p>Kalola data petugas.</p>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        @endif
                                                        <div class="col-lg-3">
                                                            <a href="{{ url('/barang') }}">
                                                                <div class="info-box card">
                                                                    <i class="bi bi-boxes"></i>
                                                                    <h3>Data Barang</h3>
                                                                    <p>Kelola data barang.</p>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        @if (Auth::user()->level === 'Petugas')
                                                            <div class="col-lg-3">
                                                                <a href="{{ url('/lelang') }}">
                                                                    <div class="info-box card">
                                                                        <i class="bi bi-bar-chart"></i>
                                                                        <h3>Aktivasi Lelang</h3>
                                                                        <p>Kelola data & aktivasi lelang.</p>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        @endif
                                                        <div class="col-lg-3">
                                                            <a href="{{ url('/laporan') }}">
                                                                <div class="info-box card">
                                                                    <i class="bi bi-clipboard-data"></i>
                                                                    <h3>Laporan lelang</h3>
                                                                    <p>Lihat & print laporan lelang.</p>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <div class="tab-pane fade profile-menu" id="profile-history">
                                    <h5 class="card-title">Histori Lelang</h5>
                                    <p>Berikut adalah history lelang Anda. Anda bisa mengikuti lelang lainnya di <a href="{{ url('/galery') }}">Galery Lelang</a>.</p>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Nama Barang</th>
                                                <th scope="col">Harga Awal</th>
                                                <th scope="col">Harga Tertinggi</th>
                                                <th scope="col">Status Lelang</th>
                                                {{-- <th scope="col">Aksi</th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($history as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->nama_barang }}</td>
                                                    <td>Rp {{ $item->harga_awal }}</td>
                                                    <td>Rp {{ $item->penawaran_harga }}</td>
                                                    <td>
                                                        @if ($item->penawaran_harga === $item->harga_akhir)
                                                            {{-- Selamat Anda memenangkan lelang --}}
                                                            <button type="button" class="btn btn-sm text-white" style="background-color: #055E68; border-radius: 15px" data-bs-toggle="modal" data-bs-target="#modalCheckout">Checkout</button>
                                                            <div class="modal fade" id="modalCheckout" tabindex="-1">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title">Checkout</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="list-group modal-body">
                                                                            <p>Pilih kontak Admin untuk checkout</p>
                                                                            <a href="https://wa.me/+6289513886227" target="blank_" type="button" class="list-group-item list-group-item-action"><i class="bi bi-whatsapp" style="color: #128C7E"></i> Whatsapp</a> 
                                                                            <a href="https://wa.me/+6281284818862" target="blank_" type="button" class="list-group-item list-group-item-action"><i class="bi bi-whatsapp" style="color: #128C7E"></i> Whatsapp</a> 
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade profile-menu" id="profile-telepon">
                                    <h5 class="card-title">Info Telepon</h5>
                                    <p>Anda belum memasukkan nomor telepon. Masukkan nomor telepon untuk melakukan validasi.</p>
                                    <form action="{{ url('/telepon') }}" method="post">
                                        @csrf
                                        <input name="id_user" type="hidden" class="form-control" id="id_user" value="{{ Auth::user()->id }}">
                                        <div class="row form-outline mb-3">
                                            <label for="telepon" class="col-md-4 col-lg-3 col-form-label">No. Telepon</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="telepon" type="number" class="form-control" id="telepon" style="border-radius: 15px">
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-sm text-white" style="background-color: #055E68; border-radius: 15px">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
