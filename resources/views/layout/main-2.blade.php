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
    {{-- <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }
    </style> --}}
    <body>
        @include('sweetalert::alert')

        @yield('content')

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> 
        @include('part.script')
    </body>
</html>