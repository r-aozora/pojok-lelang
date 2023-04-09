<header>
    <div class="px-3 py-2" style="background-color: #055E68">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="{{ url('/') }}" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none fw-bold" style="font-size: 25px">POJOK_ LELANG</a>
                <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                    <li><a href="{{ url('/') }}" class="nav-link text-white">HOME</a></li>
                    <li><a href="{{ url('/product') }}" class="nav-link text-white">PRODUCT</a></li>
                    <li><a href="{{ url('/about') }}" class="nav-link text-white">ABOUT</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="px-3 py-2 mb-1" style="background-color: #2E4F4F">
        <div class="container d-flex flex-wrap justify-content-center">
            <a href="{{ url('/login') }}" type="button"class="btn text-white btn-sm me-2">Login</a>
            <a href="{{ url('/register') }}" type="button" class="btn btn-sm" style="background-color: #ffffff; border-radius:10px">Sign-up</a>
        </div>
    </div>
</header>