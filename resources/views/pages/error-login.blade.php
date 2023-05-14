@extends('layout.main-2')

@section('content')
    <main>
        <div class="container">
            <section class="section error-404 min-vh-100 d-flex flex-column align-items-center justify-content-center">
                <h1>404</h1>
                @if (Auth::check())
                    <h2>Anda sudah Log In</h2>
                    <a class="btn text-white" style="background-color: #055E68; border-radius:15px" href="{{ url('/') }}">Kembali ke dashboard</a>
                @else
                    <h2 class="mb-2 mt-2">Anda belum Log In.</h2>
                    <h2 class="mt-0 mb-3">Silakan Log In untuk mengakses Pojok Lelang secara lengkap.</h2>
                    <a class="btn text-white" style="background-color: #055E68; border-radius:15px" href="{{ url('/login') }}">Log In</a>
                @endif
            </section>
        </div>
    </main>
@endsection