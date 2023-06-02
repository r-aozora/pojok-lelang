@extends('layout.main')

@section('content')
    <main id="main" class="main main-landing">
        <div class="position-relative overflow-hidden p-5 p-md-5 text-white bg-light bimage" style="background-image:url({{ asset('img/lading2.jpg') }}); background-repeat: no-repeat; position:relative;background-size:cover; ">
            <div class="p-lg-3 my-5 judul">
                <h1 class="display-5 fw-bold">Pojok Lelang</h1>
                <blockquote class="blockquote">
                    <p class="lead fw-normal mt-3">A Real-time Auction Site for Everyone.</p>
                </blockquote>
                <a class="btn btn-sm text-white" href="{{ url('/gallery') }}" style="background-color: #055E68 ;border-radius: 20px">Mulai Lelang</a>
                <figure class="text-end">
                    <blockquote class="blockquote">
                        <p>Everyone can Bid.</p>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                        <cite title="Source Title" style="color:#ffffff">Pojok Lelang</cite>
                    </figcaption>
                </figure>
            </div>
            </div>
                <div class="product-device shadow-sm d-none d-md-block"></div>
                <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
            </div>
        </div>

        <div>
            <h2 class="position-relative overflow-hidden text-center mt-5">Produk Unggulan</h2>
            <div class="album py-4">
                <div class="container">
                    {{-- <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3"> --}}
                    <div class="row align-items-top">
                        <div class="col-lg-6">
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-5">
                                        <img src="{{ url('img/barang/'.$product1->foto) }}" style="max-width: 200px; max-height: 200px" class="img-fluid rounded-start" alt="Foto Barang">
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $product1->nama_barang }}</h5>
                                            <p class="card-text">{{ $product1->deskripsi_barang }}</p>
                                            <p class="card-text">Harga:
                                                @if ($product1->penawaran_harga === null)
                                                    Rp {{ $product1->harga_awal }}
                                                @else
                                                    Rp {{ $product1->penawaran_harga }}
                                                @endif
                                            </p>
                                            <div class="btn-group">
                                                @if (Auth::check())
                                                    <a href="{{ url('gallery/'.$product1->id) }}" type="button" class="btn btn-sm text-white" style="background-color: #055E68; border-radius:20px">Ikut Lelang</a>
                                                @else
                                                    <a href="{{ url('/login') }}" type="button" class="btn btn-sm text-white" style="background-color: #055E68; border-radius:20px">Ikut Lelang</a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-5">
                                        <img src="{{ url('img/barang/'.$product2->foto) }}" style="max-width: 200px; max-height: 200px" class="img-fluid rounded-start" alt="Foto Barang">
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $product2->nama_barang }}</h5>
                                            <p class="card-text">{{ $product2->deskripsi_barang }}</p>
                                            <p class="card-text">Harga:
                                                @if ($product2->penawaran_harga === null)
                                                    Rp {{ $product2->harga_awal }}
                                                @else
                                                    Rp {{ $product2->penawaran_harga }}
                                                @endif
                                            </p>
                                            <div class="btn-group">
                                                @if (Auth::check())
                                                    <a href="{{ url('gallery/'.$product2->id) }}" type="button" class="btn btn-sm text-white" style="background-color: #055E68; border-radius:20px">Ikut Lelang</a>
                                                @else
                                                    <a href="{{ url('/login') }}" type="button" class="btn btn-sm text-white" style="background-color: #055E68; border-radius:20px">Ikut Lelang</a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-6">
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-5">
                                        <img src="{{ url('img/barang/'.$product3->foto) }}" style="max-width: 200px; max-height: 200px" class="img-fluid rounded-start" alt="Foto Barang">
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $product3->nama_barang }}</h5>
                                                <p class="card-text">{{ $product3->deskripsi_barang }}</p>
                                                <p class="card-text">Harga:
                                                    @if ($product3->penawaran_harga === null)
                                                        Rp {{ $product3->harga_awal }}
                                                    @else
                                                        Rp {{ $product3->penawaran_harga }}
                                                    @endif
                                                </p>
                                                <div class="btn-group">
                                                    @if (Auth::check())
                                                        <a href="{{ url('gallery/'.$product3->id) }}" type="button" class="btn btn-sm text-white" style="background-color: #055E68; border-radius:20px">Ikut Lelang</a>
                                                    @else
                                                    <a href="{{ url('/login') }}" type="button" class="btn btn-sm text-white" style="background-color: #055E68; border-radius:20px">Ikut Lelang</a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="px-3 py-1 my-1 text-center">
            <h2 class="mb-5 text">Tentang Kami</h2>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">Pojok Lelang merupakan website lelang online yang ideal bagi semua orang untuk menemukan barang-barang impian mereka dengan mudah, aman, dan efisien.</p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <li class="ms-3" style="list-style:none"><a class="text-muted" style="font-size: 30px" href="https://github.com/r-aozora"><i style="color: #171515" class="bi bi-github mb-0"></i></a></li>
                    <li class="ms-3" style="list-style:none"><a class="text-muted" style="font-size: 30px" href="https://github.com/codezeros18"><i style="color: #C13584" class="bi bi-instagram"></i></a></li>
                    <li class="ms-3" style="list-style:none"><a class="text-muted" style="font-size: 30px" href="https://github.com/cykmila"><i style="color:#3b5998" class="bi bi-facebook"></i></a></li>
                    <li class="ms-3" style="list-style:none"><a class="text-muted" style="font-size: 30px" href="https://github.com/cykmila"><i style="color: #1DA1F2" class="bi bi-twitter"></i></a></li>
                </div>
            </div>
        </div> --}}
    </main>
@endsection