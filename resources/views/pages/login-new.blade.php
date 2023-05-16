@extends('layout.main-2')

@section('content')
    <main>
        <div class="container">
            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5 col-md-6 d-flex flex-column align-items-center justify-content-center">
                            <div class="d-flex justify-content-center py-4"> <a href="{{ url('/') }}" class="logo d-flex align-items-center w-auto"> <img src="img/brand-logo-new-2.png" alt="Pojok Lelang Logo"> <span style="color: #055E68" class="d-none d-lg-block">Pojok Lelang</span> </a></div>
                            <div class="card mb-3">
                            <div class="card-body">
                                <div class="pt-4 pb-2">
                                    <h5 class="card-title text-center pb-0 fs-4">Login ke Akun Pojok Lelang</h5>
                                    <p class="text-center small">Masukkan username & password untuk login</p>
                                </div>
                                <form action="{{ url('/login/auth') }}" method="post" class="row g-3 needs-validation" novalidate>
                                    @csrf
                                    <div class="form-outline col-12 mb-1">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" name="username" class="form-control" id="username" required value="{{ Session::get('username') }}" style="border-radius:15px">
                                        <div class="invalid-feedback">Silakan masukkan username.</div>
                                    </div>
                                    <div class="form-outline col-12 mb-1">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control" id="password" required style="border-radius:15px">
                                        <div class="invalid-feedback">Silakan masukkan password.</div>
                                    </div>
                                    <div class="col-12 mb-1">
                                        <button class="btn w-100 text-white" type="submit" style="background-color:#055E68; border-radius:15px">Login</button>
                                    </div>
                                    <div class="col-12">
                                        <p class="text-center small mb-0">Belum punya akun? <a href="{{ url('/register') }}">Buat akun</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection