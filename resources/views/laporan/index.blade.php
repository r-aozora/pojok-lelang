@extends('layout.main')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Laporan Lelang Online</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active">Print Laporan</li>
                </ol>
            </nav>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Data Hasil Lelang Online</h5>
                            <p>Berikut adalah data hasil lelang yang dapat di print.</p>
                            <div class=" d-flex flex-wrap justify-content-center mt-3">
                                <div class="col-6 mb-3">
                                    <div class="col-sm-6">
                                    </div>
                                </div>
                            <div class="text-end col-6 mb-3">
                                <a href="{{ url('/laporan/print') }}" target="blank_" type="button" class="btn btn-sm text-white" style="background-color: #055E68; border-radius:20px">
                                    <i class="bi bi-printer"></i> Print Laporan
                                </a>
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">ID Lelang</th>
                                        <th scope="col">Nama Barang</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Pemenang</th>
                                        <th scope="col">Harga Akhir</th>
                                        <th scope="col">Status Lelang</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($lelang as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->nama_barang }}</td>
                                            <td>{{ $item->created_at }}</td>
                                            <td>{{ $item->nama }}</td>
                                            <td>Rp {{ $item->penawaran_harga }}</td>
                                            <td>
                                                @if ($item->status === 'Ditutup')
                                                    <button class="btn btn-sm text-white" style="background-color: #055E68">Lelang Selesai</button>
                                                {{-- @else
                                                    <button class="btn btn-sm btn-secondary">{{ $item->status }}</button> --}}
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection