<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/sytle.css">
    
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
}
    </style>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        @if (auth()->user()->level === 'Administrator')
            @include('layout.navbar_admin')
        @elseif (auth()->user()->level === 'Petugas')
            @include('layout.navbar_petugas')
        @elseif (auth()->user()->level === 'Masyarakat')
            @include('layout.navbar_user')
        @endif

        @yield('content')

        @include('layout.footer')

        @include('partials.script')
    </div>
</body>
</html>
