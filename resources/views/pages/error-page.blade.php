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
                    <h2>Halaman yang Anda cari tidak ada.</h2>
                    <a class="btn" href="{{ url('/') }}">Kembali ke Dashboard</a>
                </section>
            </div>
        </main>
    </body>
</html>