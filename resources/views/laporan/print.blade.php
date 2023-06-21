<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>{{ $title }}</title>
    <meta name="robots" content="noindex, nofollow">
    <meta content="" name="description">
    <meta content="" name="keywords">
    @include('part.link')
</head>
<body>
    <main>
        <section class="section">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center">Laporan Hasil Lelang Online</h5>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">ID Lelang</th>
                                        <th scope="col">Nama Barang</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Pemenang</th>
                                        <th scope="col">Harga Akhir</th>
                                        <th scope="col">Status</th>
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
    @include('part.script')
    <script>window.print()</script>
</body>
</html>
    