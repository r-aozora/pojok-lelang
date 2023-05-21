@extends('layout.main')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>About</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active">About</li>
                </ol>
            </nav>
        </div>
        <section class="section">
            <div class="row align-items-top">
                <div class="col-lg-12">
                    <div class="card mb-3">
                        <div class="row g-0 mx-3 my-3">
                            <div class="col-md-4">
                                <img src="/img/brand-logo-new.png" style="height:300px;" class="img-fluid rounded-start mx-auto" alt="Pojok lelang Logo">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h4 style="color: #055E68" class="mt-5">Pojok Lelang</h4>
                                    <h6>A Real-time Auction Site for Everyone.</h6>
                                    <p class="card-text mt-4">Pojok Lelang merupakan website lelang online yang ideal bagi
                                        semua orang untuk menemukan barang-barang
                                        impian mereka dengan mudah, aman, dan efisien.
                                    </p>
                                    <p class="card-text">Motto Kami: Everyone Can Bid.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <section class="section contact">
                        <div class="row gy-4">
                            <div class="col-xl-12">
                                <h4 style="color: #055E68" class="card-title text-center mb-3">Hubungi Kami</h4>
                                <div class="row">
                                    <div class="col-lg-3 col-sm-6">
                                        <a href="https://wa.me/+6289513886227" target="blank_">
                                            <div class="info-box card">
                                                <i style="color: #128C7E" class="bi bi-whatsapp"></i>
                                                <h3>WhatsApp</h3>
                                                {{-- <p>Citra</p> --}}
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <a href="https://wa.me/" target="blank_">
                                            <div class="info-box card">
                                                <i style="color: #128C7E" class="bi bi-whatsapp"></i>
                                                <h3>WhatsApp</h3>
                                                {{-- <p>Lintang</p> --}}
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <a href="https://wa.me/" target="blank_">
                                            <div class="info-box card">
                                                <i style="color: #128C7E" class="bi bi-whatsapp"></i>
                                                <h3>WhatsApp</h3>
                                                {{-- <p>Amanda</p> --}}
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <a href="https://wa.me/" target="blank_">
                                            <div class="info-box card">
                                                <i style="color: #128C7E" class="bi bi-whatsapp"></i>
                                                <h3>WhatsApp</h3>
                                                {{-- <p>Fiana</p> --}}
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="section contact">
                        <div class="row gy-4">
                            <div class="col-xl-12 ">
                                <h4 style="color: #055E68" class="card-title text-center mb-3">Ikuti Kami</h4>
                                <div class="row">
                                    <div class="col-lg-3 col-sm-6">
                                        <a href="https://github.com/r-aozora/Pojok-Lelang" target="blank_">
                                            <div class="info-box card">
                                                <i style="color: #171515" class="bi bi-github mb-0"></i>
                                                <h3>GitHub</h3>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 ">
                                        <a href="" target="blank_">
                                            <div class="info-box card">
                                                <i style="color: #C13584" class="bi bi-instagram"></i>
                                                <h3>Instagram</h3>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <a href="" target="blank_">
                                            <div class="info-box card">
                                                <i style="color:#3b5998" class="bi bi-facebook"></i>
                                                <h3>Facebook</h3>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <a href="" target="blank_">
                                            <div class="info-box card">
                                                <i class="bi bi-twitter"></i>
                                                <h3>Twitter</h3>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </main>
@endsection
