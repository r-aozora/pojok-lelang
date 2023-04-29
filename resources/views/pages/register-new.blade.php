<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>{{ $title }}</title>
        <meta name="robots" content="noindex, nofollow">
        <meta content="" name="description">
        <meta content="" name="keywords">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

        <link href="img/brand-logo-new-2.png" rel="icon">
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
        <link href="https://fonts.gstatic.com" rel="preconnect">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/bootstrap-icons.css" rel="stylesheet">
        <link href="assets/css/boxicons.min.css" rel="stylesheet">
        <link href="assets/css/quill.snow.css" rel="stylesheet">
        <link href="assets/css/quill.bubble.css" rel="stylesheet">
        <link href="assets/css/remixicon.css" rel="stylesheet">
        <link href="assets/css/simple-datatables.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">
    </head>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }
    </style>
    <body>
        <main>
            <div class="container">
                <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5 col-md-6 d-flex flex-column align-items-center justify-content-center">
                            <div class="d-flex justify-content-center py-4"> <a href="{{ url('/') }}" class="logo d-flex align-items-center w-auto"> 
                                <img src="img/brand-logo-new-2.png" alt="Pojok Lelang logo"> 
                                <span class="d-none d-lg-block">Pojok lelang</span> </a></div>
                            <div class="card mb-3">
                            <div class="card-body">
                                <div class="pt-4 pb-2">
                                    <h5 class="card-title text-center pb-0 fs-4">Buat Akun Pojok lelang</h5>
                                    <p class="text-center small">Masukkan detail pribadi untuk membuat akun</p>
                                </div>
                                <form action="{{ url('/register/auth') }}" method="post" class="row g-3 needs-validation" novalidate>
                                    @csrf
                                    <div class="form-outline col-12 mb-1">
                                        <label for="nama" class="form-label">Nama</label> 
                                        <input type="text" name="name" class="form-control" id="nama" required value="{{ Session::get('nama') }}" style="border-radius:15px">
                                        <div class="invalid-feedback">Silakan masukkan nama Anda.</div>
                                    </div>
                                    <div class="form-outline col-12 mb-1">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" name="username" class="form-control" id="username" required value="{{ Session::get('username') }}" style="border-radius:15px">
                                        <div class="invalid-feedback">Silakan pilih username.</div>
                                    </div>
                                    <div class="form-outline col-12 mb-1">
                                        <label for="password" class="form-label">Password</label> 
                                        <input type="password" name="password" class="form-control" id="password" required style="border-radius:15px">
                                        <div class="invalid-feedback">Masukkan password yang valid.</div>
                                    </div>
                                    <div class="col-12 mb-1"> 
                                        <button class="btn text-white w-100" type="submit" style="background-color: #055E68;border-radius:15px">Buat Akun</button>
                                    </div>
                                    <div class="col-12">
                                        <p class="text-center small mb-0">Sudah punya akun? <a href="{{ url('/login') }}">Log In</a></p>
                                    </div>
                                </form>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                </section>
            </div>
        </main>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>  
        <script src="assets/js/apexcharts.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/chart.min.js"></script>
        <script src="assets/js/echarts.min.js"></script>
        <script src="assets/js/quill.min.js"></script>
        <script src="assets/js/simple-datatables.js"></script>
        <script src="assets/js/tinymce.min.js"></script>
        <script src="assets/js/validate.js"></script>
        <script src="assets/js/main.js"></script> 
    </body>
</html>