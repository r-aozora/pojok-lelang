@extends('layout.main')

@section('content')
<main id="main" class="main main-landing">
    <div class="position-relative overflow-hidden p-3 p-md-5 text-white bg-light bimage" style="background-image:url({{ asset('img/lading2.jpg') }}); background-repeat: no-repeat; position:relative;background-size:cover; ">
        <div class="col-md-5 p-lg-5 my-5 judul" >
            <h1 class="display-5 fw-bold">Pojok Lelang</h1>
            <p class="lead fw-normal mt-3">An Real-time Auction Site for Everyone.</p>
            <a class="btn text-white" href="{{ url('/galery') }}" style="background-color: #055E68 ;border-radius: 20px">Products</a>
            <a class="btn text-white" href="{{ url('/galery') }}" style="background-color: #055E68 ;border-radius: 20px">Mulai Lelang</a>
        </div>
        </div>
            <div class="product-device shadow-sm d-none d-md-block"></div>
            <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
        </div>
    </div>

    <div>
        <h2 class="position-relative overflow-hidden text-center mt-5" >Products</h2>
        <div class="album py-5 ">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card">
                            <img src="https://static.independent.co.uk/s3fs-public/thumbnails/image/2018/04/07/15/egyptian-mummy.jpg" height="250px" class="card-img-top" alt="...">
                            <div class="card-body">
                               <h5 class="card-title">Card with an image on top</h5>
                               <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                               <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm  text-white"style="background-color: #055E68">More</button>
                                </div>
                            </div>
                            </div>
                         </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/0/00/1916_Ford_Model_T_touring_car.JPG" height="250px" class="card-img-top" alt="...">
                            <div class="card-body">
                               <h5 class="card-title">Card with an image on top</h5>
                               <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                               <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm  text-white"style="background-color: #055E68">More</button>
                                </div>
                            </div>
                            </div>
                         </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="https://www.sciencenews.org/wp-content/uploads/2016/02/022316_bb_est-dress_free.jpg" height="250px" class="card-img-top" alt="...">
                            <div class="card-body">
                               <h5 class="card-title">Card with an image on top</h5>
                               <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                               <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm  text-white"style="background-color: #055E68">More</button>
                                </div>
                            </div>
                            </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="px-4 py-5 my-5 text-center">
        <h2 class="mb-5 text">About Us</h2>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Pojok Lelang merupakan website lelang online yang ideal bagi semua orang untuk menemukan barang-barang impian mereka dengan mudah, aman, dan efisien.</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <li class="ms-3" style="list-style:none"><a class="text-muted" style="font-size: 30px" href="https://github.com/r-aozora"><i style="color: #171515" class="bi bi-github mb-0"></i></a></li>
                <li class="ms-3" style="list-style:none"><a class="text-muted" style="font-size: 30px" href="https://github.com/codezeros18"><i style="color:rgb(250,126,30)" class="bi bi-instagram"></i></a></li>
                <li class="ms-3" style="list-style:none"><a class="text-muted" style="font-size: 30px" href="https://github.com/cykmila"><i style="color:#3b5998" class="bi bi-facebook"></i></a></li>
                <li class="ms-3" style="list-style:none"><a class="text-muted" style="font-size: 30px" href="https://github.com/cykmila"><i style="color: #1DA1F2" class="bi bi-twitter"></i></a></li>
            </div>
        </div>
    </div>
</main>
@endsection
