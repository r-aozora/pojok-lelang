<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pojok Lelang - Masuk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
      body{
        font-family: 'Montserrat', sans-serif;
      }
      @media (min-width: 768px) {
        .gradient-form {
          height: 100vh !important;
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
          <div class="col-xl-9">
            <div class="card text-black" style="border-radius: 20px">
              <div class="row g-0">
                <div class="col-sm-6 px-0 d-none d-sm-block">
                  <img src="../dist/img/brand-logo.png"
                    alt="Login image" class="w-100" style="height: 100%;background-size:cover;border-radius:20px ">
                </div>
                <div class="col-lg-6">
                  <div class="card-body p-md-5 mx-md-4" style="border-radius: 20px">

                    <!--<div class="text-center">
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                        style="width: 185px;" alt="logo">
                    </div>-->

                    <div class="mb-5">
                      <h2>Masuk Ke Akun</h2>
                    </div>
                    <form action="/login/masyarakat" method="post">
                      @csrf
                      <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example11">Username</label>
                        <input name="username" type="text" id="form2Example11" class="form-control" value="{{ Session::get('username') }}"/>
                      </div>
                      <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example22">Password</label>
                        <input name="password" type="password" id="form2Example22" class="form-control"/>
                      </div>
                      <div class=" pt-1 mb-5 pb-1">
                        <button name="submit" class="btn btn-block fa-lg text-white" style="background-color: #00ADB5" type="submit">Masuk</button>
                      </div>
                      <div class="d-flex align-items-center justify-content-center pb-4">
                        <p>Belum punya akun? <a href="{{ url('register') }}">Daftar</a></p>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
