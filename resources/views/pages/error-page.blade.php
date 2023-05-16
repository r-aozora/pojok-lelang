@extends('layout.main-2')

@section('content')
    <main>
        <div class="container">
            <section class="section error-404 min-vh-100 d-flex flex-column align-items-center justify-content-center">
                <h1>404</h1>
                <h2>Halaman yang Anda cari tidak ada.</h2>
                <a class="btn" href="{{ url('/') }}">Kembali ke Dashboard</a>
            </section>
        </div>
    </main>
@endsection