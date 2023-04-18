<header>
    <div class="px-3 py-2" style="background-color: #055E68">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none fw-bold" style="font-size: 25px">
                    <img src="../img/brand-logo-new-2.png" alt="Logo" width="30" height="30" class="me-2">
                    Pojok Lelang
                </a>
                <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                    <li><a href="{{ url('/') }}" class="nav-link text-white">Home</a></li>
                    <li><a href="{{ url('/dashboard') }}" class="nav-link text-white">Dashboard</a></li>
                    <li><a href="{{ url('/galery') }}" class="nav-link text-white">Galery</a></li>
                    <li><a href="{{ url('/about') }}" class="nav-link text-white">About</a></li>
                </ul>
            </div>
        </div>
    </div>
    @if (Auth::check())
        @if (auth()->user()->level === 'Administrator')
            <div class="px-3 py-2 mb-1" style="background-color: #2E4F4F">
                <div class="container d-flex flex-wrap justify-content-center">        
                    <div class="dropdown d-inline">
                        <button class="btn dropdown-toggle text-white" style="border:none" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-currency-exchange"></i> Lelang
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('/masyarakat') }}"><i class="bi bi-people px-1"></i> Data Masyarakat</a></li>
                            <li><a class="dropdown-item" href="{{ url('/petugas') }}"><i class="bi bi-person-vcard px-1"></i> Data Petugas</a></li>
                            <li><a class="dropdown-item" href="{{ url('/barang') }}"><i class="bi bi-boxes px-1"></i> Data Barang</a></li>
                            <li><a class="dropdown-item" href="{{ url('/lelang') }}"><i class="bi bi-clipboard-data px-1"></i> Laporan Lelang</a></li>
                        </ul>
                    </div>
                    <div class="dropdown d-inline">
                        <button class="btn dropdown-toggle text-white" style="border:none" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-circle"></i> {{ Auth::user()->nama }}
                        </button>
        @elseif (auth()->user()->level === 'Petugas')
            <div class="px-3 py-2 mb-1" style="background-color: #2E4F4F">
                <div class="container d-flex flex-wrap justify-content-center">
                    <div class="dropdown d-inline">
                        <button class="btn dropdown-toggle text-white" style="border:none" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-currency-exchange"></i> Lelang
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('/masyarakat') }}"><i class="bi bi-people px-1"></i> Data Masyarakat</a></li>
                            <li><a class="dropdown-item" href="{{ url('/barang') }}"><i class="bi bi-boxes px-1"></i> Data Barang</a></li>
                            <li><a class="dropdown-item" href="{{ url('/lelang') }}"><i class="bi bi-clipboard-data px-1"></i> Aktivasi Lelang</a></li>
                        </ul>
                    </div>
                    <div class="dropdown d-inline">
                        <button class="btn dropdown-toggle text-white" style="border:none" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-circle"></i> {{ Auth::user()->nama }}
                        </button>
        @elseif (auth()->user()->level === 'Masyarakat')
            <div class="px-3 py-2 mb-1" style="background-color: #2E4F4F">
                <div class="container d-flex flex-wrap justify-content-center">
                    <a href="{{ url('/galery') }}" class="btn text-white" style="border:none" type="button" aria-expanded="false">
                        <i class="bi bi-currency-exchange"></i> Lelang
                    </a>
                    <div class="dropdown d-inline">
                        <button class="btn dropdown-toggle text-white" style="border:none" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-circle"></i> {{ Auth::user()->nama }}
                        </button>
        @endif
                        <ul class="dropdown-menu">
                            <li>
                                <form onsubmit="return confirm('Anda Akan Log Out')" action="{{ url('/logout') }}" method="get">
                                    @csrf
                                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Log Out</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
    @else
        <div class="px-3 py-2 mb-1" style="background-color: #2E4F4F">
            <div class="container d-flex flex-wrap justify-content-center">
                <a href="{{ url('/login') }}" type="button"class="btn text-white btn-sm me-2">Log In</a>
                <a href="{{ url('/register') }}" type="button" class="btn btn-sm" style="background-color: #ffffff; border-radius:10px">Sign Up</a>
            </div>
        </div>
    @endif  
</header>