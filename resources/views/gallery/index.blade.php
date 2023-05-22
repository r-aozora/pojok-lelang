@extends('layout.main')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Gallery Lelang</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item">Lelang</li>
                    <li class="breadcrumb-item active">Gallery Lelang</li>
                </ol>
            </nav>
        </div>
        <section class="section">
            <div class="row align-items-top">
                @foreach ($lelang as $item)
                    <div class="col-lg-6">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-5"> 
                                    <img src="{{ url('img/barang/'.$item->foto) }}" style="max-width: 200px; max-height: 200px" class="img-fluid rounded-start" alt="Foto Barang">
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $item->nama_barang }}</h5>
                                        <p class="card-text"> Harga saat ini:
                                            @if ($item->penawaran_harga === null)
                                                Rp {{ $item->harga_awal }}
                                            @else
                                                Rp {{ $item->penawaran_harga }}
                                            @endif
                                        </p>
                                        <p class="card-text">Tanggal lelang:
                                            {{ $item->created_at }}
                                        </p>
                                        <div class="btn-group">
                                            @if (Auth::check())
                                                <a href="{{ url('gallery/'.$item->id) }}" type="button" class="btn btn-sm text-white" style="background-color: #055E68; border-radius:20px">Ikut Lelang</a>
                                            @else
                                                <a href="{{ url('/login') }}" type="button" class="btn btn-sm text-white" style="background-color: #055E68; border-radius:20px">Ikut Lelang</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>    
        </section>
    </main>
@endsection