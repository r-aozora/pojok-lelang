<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pojok Lelang | Daftar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <style>
      body{
        font-family: 'Montserrat', sans-serif;
      }
      @media (min-width: 768px) {
        .gradient-form {
          height: 110vh !important;
        }
      }
      @media (min-width: 769px) {
        .gradient-custom-2 {
          border-top-right-radius: .3rem;
          border-bottom-right-radius: .3rem;
        }
      }
    </style>
  </head>
  <body style="background-image:url('https://media.istockphoto.com/id/1209088835/photo/back-view-of-buyers-raising-hands-to-auctioneer-during-auction.jpg?s=612x612&w=0&k=20&c=OKZMX3No-OcsyCIMB2ibwKVoIx3M-fyor4MvCq2de80='); background-repeat: no-repeat; position:relative;background-size:cover">
    <section class="h-100 gradient-form">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-xl-10">
            <div class="card text-black" style="border-radius: 20px">
              <div class="row g-0">
                <div class="col-sm-6 px-0 d-none d-sm-block">
                  <img src="../img/brand-logo-new.png" alt="Pojok Lelang Logo" class="w-100" style="height:100%;background-size:cover;border-radius:20px ">
                </div>
                <div class="col-lg-6">
                  <div class="card-body p-md-5" style="border-radius: 20px">
                    <div class="mb-3">
                      <h3 class="fw-medium">Register</h3>
                    </div>
                    <form action="{{ url('/register/auth') }}" method="post">
                      @csrf
                      <div class="form-outline mb-2">
                        <label class="form-label" for="nama">Nama Lengkap</label>
                        <input type="text" id="nama" class="form-control" value="{{ Session::get('nama') }}" style="border-radius:15px">
                      </div>
                      <div class="form-outline mb-2">
                        <label class="form-label" for="username">Username</label>
                        <input type="text" id="username" class="form-control" value="{{ Session::get('username') }}" style="border-radius:15px"/>
                      </div>
                      <div class="form-outline mb-3">
                        <label class="form-label" for="password">Password</label>
                        <input type="password" id="password" class="form-control" style="border-radius:15px"/>
                      </div>
                      <div class="d-grid gap-2 mb-3">
                        <button class="btn btn-block fa-lg text-white" style="background-color: #055E68; border-radius:15px" type="submit">Daftar</button>
                      </div>
                      <div class="d-flex align-items-center justify-content-center">
                        <p>Sudah punya akun? <a href="{{ url('login') }}">Masuk</a></p>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  @include('partials.script')
  </body>
</html>
