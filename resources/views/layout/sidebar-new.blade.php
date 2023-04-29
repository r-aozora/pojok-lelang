<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item"> <a class="nav-link collapsed" href="{{ url('/') }}"> <i class="bi bi-grid"></i> <span>Dashboard</span> </a></li>
        @if (Auth::check())
            <li class="nav-item"> <a class="nav-link collapsed" href="{{ url('/profile') }}"> <i class="bi bi-person"></i> <span>Profil Saya</span> </a></li>

            <li class="nav-heading">Your Menu</li>
            @if (Auth::user()->level === 'Administrator')
                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-stack"></i><span>Data Lelang</span><i class="bi bi-chevron-down ms-auto"></i> </a>
                    <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li> <a href="{{ url('/masyarakat') }}"> <i class="bi bi-circle"></i><span>Data Masyarakat</span> </a></li>
                        <li> <a href="{{ url('/petugas') }}"> <i class="bi bi-circle"></i><span>Data Petugas</span> </a></li>
                        <li> <a href="{{ url('/barang') }}"> <i class="bi bi-circle"></i><span>Data Barang</span> </a></li>
                    </ul>
                    <li class="nav-item"> <a class="nav-link collapsed" href="{{ url('/lelang') }}"> <i class="bi bi-clipboard-data"></i> <span>Print Laporan</span> </a></li>
                </li>
            @elseif (Auth::user()->level === 'Petugas')
                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-stack"></i><span>Data Lelang</span><i class="bi bi-chevron-down ms-auto"></i> </a>
                    <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li> <a href="{{ url('/masyarakat') }}"> <i class="bi bi-circle"></i><span>Data Masyarakat</span> </a></li>
                        <li> <a href="{{ url('/barang') }}"> <i class="bi bi-circle"></i><span>Data Barang</span> </a></li>
                    </ul>
                    <li class="nav-item"> <a class="nav-link collapsed" href="{{ url('/lelang') }}"> <i class="bi bi-bar-chart"></i> <span>Aktivasi Lelang</span> </a></li>
                    <li class="nav-item"> <a class="nav-link collapsed" href="{{ url('/lelang') }}"> <i class="bi bi-clipboard-data"></i> <span>Print Laporan</span> </a></li>
                </li>
            @elseif (Auth::user()->level === 'Masyarakat')
                <li class="nav-item"> <a class="nav-link collapsed" href="{{ url('/galery') }}"> <i class="bi bi-cart"></i> <span>Galeri Lelang</span> </a></li>
                <li class="nav-item"> <a class="nav-link collapsed" href="{{ url('/profile') }}"> <i class="bi bi-clock-history"></i> <span>Histori Lelang</span> </a></li>
            @endif
            <li class="nav-heading">Others</li>
        @else
            <li class="nav-item"> <a class="nav-link collapsed" href="{{ url('/galery') }}"> <i class="bi bi-cart"></i> <span>Galeri Lelang</span> </a></li>
        @endif

        <li class="nav-item"> <a class="nav-link collapsed" href="{{ url('/about') }}"> <i class="bi bi-question-circle"></i> <span>About</span> </a></li>
        @if (Auth::check())
            <li class="nav-item"> <a class="nav-link collapsed" href="{{ url('/logout') }}"> <i class="bi bi-box-arrow-right"></i> <span>Log Out</span> </a></li>
        @endif
    </ul>
</aside>