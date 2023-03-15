<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/css/style.css">
    <style>
        body{
        font-family: 'Montserrat', sans-serif;
        background-color: #B9D2D2;
        }





    @media (min-width: 769px) {
    .gradient-custom-2 {
    border-top-right-radius: .3rem;
    border-bottom-right-radius: .3rem;

    }

    }





    </style>
  </head>
  <body>
    <!--<nav class="navbar navbar-expand-lg" style="background-color: #055E68">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a style="font-weight: 800; font-size: 25px;" class="nav-link active text-white" aria-current="page" href="#">POJOK</a>
            </li>

          </ul>
          <div class="d-flex flex-wrap">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active fw-medium text-white" aria-current="page" href="{{ url('home') }}">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-medium text-white" href="#">ITEMS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-medium text-white" href="#">ABOUT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-medium text-white " href="{{ url('log') }}">LOGIN</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>-->
    <nav class="navbar navbar-expand-lg" style="background-color: #055E68">
        <div class="container-fluid my-1 mx-3">
            <a style="font-weight: 800; font-size: 25px;" class="nav-link active text-white" aria-current="page" href="#">POJOKLELANG</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            </ul>
            <div class="d-flex flex-wrap">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active fw-medium text-white" aria-current="page" href="{{ url('home') }}">HOME</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link fw-medium text-white" href="#">ITEMS</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link fw-medium text-white" href="#">ABOUT</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link fw-medium text-white " href="{{ url('log') }}">LOGIN</a>
                  </li>
                </ul>
              </div>
          </div>
        </div>
      </nav>
      <div class="position-relative overflow-hidden p-3 p-md-5 text-center text-white bg-light bimage" style="background-image:url('https://media.istockphoto.com/id/1209088835/photo/back-view-of-buyers-raising-hands-to-auctioneer-during-auction.jpg?s=612x612&w=0&k=20&c=OKZMX3No-OcsyCIMB2ibwKVoIx3M-fyor4MvCq2de80='); background-repeat: no-repeat; position:relative;background-size:cover">
        <div class="col-md-5 p-lg-5 mx-auto my-5 judul" >
            <h1 class="display-4 fw-normal">Pojok Lelang</h1>
            <p class="lead fw-normal">Website lelang online terbaik di indonesia yang dapat menjaminkan keamanan barang uang dan kecepatan transaksi lelang</p>
            <a class="btn text-white" href="#" style="background-color: #055E68">Items</a>
            </div>
            <div class="product-device shadow-sm d-none d-md-block"></div>
            <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
        </div>
      <h2 class="position-relative overflow-hidden text-center text-white mt-5" >ITEMS</h2>
      <div class="album py-5 ">
        <div class="container">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col">
              <div class="card shadow-sm" style="background-color: #055E68">
                <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="https://stimg2.cardekho.com/images/carNewsEditorImages/userimages/20210719_160142/27463/oem-name0.jpg?impolicy=resize&imwidth=420" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" /></img>
                <div class="card-body">
                  <p class="card-text text-white">Giordano</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-light text-dark">More</button>
                    </div>
                    <small class="text-white">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-sm" style="background-color: #055E68">
                <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="https://hips.hearstapps.com/townandcountry/assets/16/14/1954-mercedes-300sl-gullwing-a_1.jpg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" /></img>
                <div class="card-body">
                  <p class="card-text text-white">Zeros</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-light text-dark">More</button>
                    </div>
                    <small class="text-white">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-sm" style="background-color: #055E68">
                <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="https://sothebys-md.brightspotcdn.com/dims4/default/7881813/2147483647/strip/true/crop/2000x2000+0+0/resize/2048x2048!/quality/90/?url=http%3A%2F%2Fsothebys-brightspot.s3.amazonaws.com%2Fmedia-desk%2Fdb%2F21%2Fda8a3cf94fa6b39cf8238aa59317%2Fpf2261-cbs7v-01.jpg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" /></img>
                <div class="card-body">
                  <p class="card-text text-white">Pors</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-light text-dark">More</button>
                    </div>
                    <small class="text-white">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-sm" style="background-color: #055E68">
                <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="https://images.unsplash.com/photo-1595761348446-008530f3d45e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8b2xkJTIwbW90b3JjeWNsZXxlbnwwfHwwfHw%3D&w=1000&q=80" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" /></img>
                <div class="card-body">
                  <p class="card-text text-white">Benchs</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-light text-dark">More</button>
                    </div>
                    <small class="text-white">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-sm" style="background-color: #055E68">
                <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="https://ca-times.brightspotcdn.com/dims4/default/7690c1d/2147483647/strip/true/crop/2016x1512+0+0/resize/1200x900!/quality/80/?url=https%3A%2F%2Fcalifornia-times-brightspot.s3.amazonaws.com%2F3c%2Fc8%2Fdcf5540d4bff92c710521cc0e0a7%2F1949-fl-1.jpeg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" /></img>
                <div class="card-body">
                  <p class="card-text text-white">Keys</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-light text-dark">More</button>
                    </div>
                    <small class="text-white">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-sm" style="background-color: #055E68">
                <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="https://upload.wikimedia.org/wikipedia/commons/7/72/Ramses_I_Mummy.jpg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" /></img>
                <div class="card-body">
                  <p class="card-text text-white">Sauce</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-light text-dark">More</button>
                    </div>
                    <small class="text-white">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center p-3" style="background-color:#055E68" >
      <a class="text-white" style="text-decoration: none" href="https://mdbootstrap.com/"
         >Copyright © 2023 Pojok Lelang. All rights reserved.</a
        >
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
