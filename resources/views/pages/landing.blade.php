@extends('layout.main')

@section('content')
    <div class="position-relative overflow-hidden p-3 p-md-5 text-white bg-light bimage" style="background-image:url('https://media.istockphoto.com/id/1209088835/photo/back-view-of-buyers-raising-hands-to-auctioneer-during-auction.jpg?s=612x612&w=0&k=20&c=OKZMX3No-OcsyCIMB2ibwKVoIx3M-fyor4MvCq2de80='); background-repeat: no-repeat; position:relative;background-size:cover; ">
        <div class="col-md-5 p-lg-5  my-5 judul" >
            <h1 class="display-4 fw-normal">Pojok Lelang</h1>
            <p class="lead fw-normal mt-3">An Real-time Auction Site for Everyone.</p>
            <a class="btn text-white" href="#" style="background-color: #055E68 ;border-radius: 10px">Products</a>
            <a class="btn text-white" href="#" style="background-color: #055E68 ;border-radius: 10px">Mulai Lelang</a>
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
                        <div class="card shadow-sm" style="background-color: #ffffff">
                            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="https://stimg2.cardekho.com/images/carNewsEditorImages/userimages/20210719_160142/27463/oem-name0.jpg?impolicy=resize&imwidth=420" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" /></img>
                            <div class="card-body">
                                <p class="card-text">Giordano</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm  text-white" style="background-color: #055E68">More</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm" style="background-color:#ffffff">
                            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="https://hips.hearstapps.com/townandcountry/assets/16/14/1954-mercedes-300sl-gullwing-a_1.jpg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" /></img>
                            <div class="card-body">
                                <p class="card-text ">Zeros</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm text-white" style="background-color: #055E68">More</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm" style="background-color: #ffffff">
                            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="https://upload.wikimedia.org/wikipedia/commons/7/72/Ramses_I_Mummy.jpg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" /></img>
                            <div class="card-body">
                                <p class="card-text">Sauce</p>
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
            <p class="lead mb-4">An Real-time Auction Site for Everyone.</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <li class="ms-3" style="list-style:none"><a class="text-muted" style="font-size: 30px" href="https://github.com/r-aozora"><i class="bi bi-github"></i></a></li>
                <li class="ms-3" style="list-style:none"><a class="text-muted" style="font-size: 30px" href="https://github.com/codezeros18"><i class="bi bi-github"></i></a></li>
                <li class="ms-3" style="list-style:none"><a class="text-muted" style="font-size: 30px" href="https://github.com/cykmila"><i class="bi bi-github"></i></i></a></li>
            </div>
        </div>
    </div>
@endsection