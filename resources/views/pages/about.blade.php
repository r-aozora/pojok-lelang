@extends('layout.main')

@section('content')
    <h2 class="mx-auto mb-5 mt-5 text-center">Tentang Kami</h2>
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card mb-3" style="max-width: 100%;">
            <div class="row g-0 my-3">
              <div class="col-md-4">
                <img src="../img/brand-logo-new.png" style="weight:300px; height:300px;" class="mx-auto d-block img-fluid" alt="...">
              </div>
              <div class="col-md-8 my-auto ">
                <div class="card-body">
                  <h4 class="card-title">A Real-time Auction Site for Everyone.</h4><br>
                  <p class="card-text" style="font-size: 18px">Pojok Lelang - website lelang online yang ideal bagi
                    semua orang untuk menemukan barang-barang
                    impian mereka dengan mudah, aman, dan efisien.</p><br>
                  <p class="card-text" style="font-size: 18px">Motto Kami: Everyone Can Bid.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row mt-2 mb-5 row-cols-1 row-cols-sm-2 g-4">
        <div class="col">
          <div class="text-center mb-5">
            <h4>Hubungi Kami</h4>
          </div>
          <div class="row row-cols-1 row-cols-sm-2 g-4">
            <div class="col d-flex flex-column gap-2">
              <div class="d-inline-flex align-items-center justify-content-center fs-4">
                  <p style="font-size: 20px"><i class="bi bi-whatsapp"></i> +62-895-1388-6227</p>
              </div>
            </div>
            <div class="col d-flex flex-column gap-2">
              <div class="d-inline-flex align-items-center justify-content-center fs-4">
                  <p style="font-size: 20px"><i class="bi bi-whatsapp"></i> +62-812-8481-8862</p>
              </div>
            </div>
            <div class="col d-flex flex-column gap-2">
              <div class="d-inline-flex align-items-center justify-content-center fs-4">
                  <p style="font-size: 20px"><i class="bi bi-whatsapp"></i> +62-812-8481-8862</p>
              </div>
            </div>
            <div class="col d-flex flex-column gap-2">
              <div class="d-inline-flex align-items-center justify-content-center fs-4">
                  <p style="font-size: 20px"><i class="bi bi-whatsapp"></i> +62-812-8481-8862</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="text-center mb-5">
            <h4>Ikuti Kami</h4>
          </div>
          <div class="row row-cols-1 row-cols-sm-2 g-4">
            <div class="col d-flex flex-column gap-2">
              <div class="d-inline-flex align-items-center justify-content-center fs-4">
                <p style="font-size: 20px"><i class="bi bi-github"></i> GitHub</p>
              </div>
            </div>
            <div class="col d-flex flex-column gap-2">
              <div class="d-inline-flex align-items-center justify-content-center fs-4">
                <p style="font-size: 20px"><i class="bi bi-instagram"></i> Instagram</p>
              </div>
            </div>
            <div class="col d-flex flex-column gap-2">
              <div class="d-inline-flex align-items-center justify-content-center fs-4">
                <p style="font-size: 20px"><i class="bi bi-facebook"></i> Facebook</p>
              </div>
            </div>
            <div class="col d-flex flex-column gap-2">
              <div class="d-inline-flex align-items-center justify-content-center fs-4">
                <p style="font-size: 20px"><i class="bi bi-telegram"></i> Telegram</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
