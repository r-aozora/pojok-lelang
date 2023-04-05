<header>
    <div class="px-3 py-2" style="background-color: #055E68">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none fw-bold" style="font-size: 25px">POJOKLELANG</a>
                <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                    <li>
                        <a href="#" class="nav-link text-white">HOME</a>
                    </li>
                    <li>
                        <a href="/dashboard" class="nav-link text-white">DASHBOARD</a>
                    </li>
                    <li>
                        <a href="#" class="nav-link text-white">PRODUCT</a>
                    </li>
                    <li>
                        <a href="#" class="nav-link text-white">ABOUT</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="px-3 py-2 mb-1" style="background-color: #2E4F4F">
        <div class="container d-flex flex-wrap justify-content-center">        
            <div class="dropdown d-inline">
                <button class="btn dropdown-toggle text-white" style="border:none" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-coin"></i> Lelang
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ url('/masyarakat') }}"><i class="bi bi-people px-1"></i> Data Masyarakat</a></li>
                    <li><a class="dropdown-item" href="{{ url('/petugas') }}"><i class="bi bi-person-vcard px-1"></i> Data Petugas</a></li>
                    <li><a class="dropdown-item" href="{{ url('/barang') }}"><i class="bi bi-box2 px-1"></i> Data Barang</a></li>
                </ul>
            </div>
            <div class="dropdown d-inline">
                <button class="btn dropdown-toggle text-white" style="border:none" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person-circle"></i> {{ Auth::user()->nama }}
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ url('/logout') }}"><i class="bi bi-box-arrow-right"></i> Log Out</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
