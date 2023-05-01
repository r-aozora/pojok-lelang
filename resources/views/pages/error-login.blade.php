<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta name="robots" content="noindex, nofollow">
        <meta content="" name="description">
        <meta content="" name="keywords">

        <title>{{ $title }}</title>

        @include('part.link')
    </head>

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }
    </style>

    <body>
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
    </body>
</html>