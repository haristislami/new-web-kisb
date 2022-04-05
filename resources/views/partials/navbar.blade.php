<nav class="navbar navbar-expand-lg navbar-dark bg-danger sticky-top">
    <div class="container">
        <a class="navbar-brand" href="/">KOMISI INFORMASI SUMBAR</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center" id="navbarNav" style="font-size: 15px">
            <ul class="navbar-nav ms-auto me-auto">
                <li class="nav-item">
                    <a class="nav-link {{ $active === ' home' ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === ' struktur' ? 'active' : '' }}" href="/#struktur">Struktur
                        KI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === ' jadwal sidang' ? 'active' : '' }}" href="/jadwal">Jadwal
                        Sidang</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle  {{ Request::is('putusan*') ? 'active' : '' }} "
                        id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"
                        href="/berita">Putusan</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="/ajudikasi">Putusan Ajudikasi</a></li>
                        <li><a class="dropdown-item" href="/mediasi">Putusan Mediasi</a></li>
                        <li><a class="dropdown-item" href="/sela">Putusan Sela</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ $active === ' berita' ? 'active' : '' }} " id="
            navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"
                        href="/berita">Berita</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="/berita">Semua Berita</a></li>
                        <li><a class="dropdown-item" href="/categories">Categories</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://emonev.kisb.sumbarprov.go.id/" target="_blank">E-Monev</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://emonev.kisb.sumbarprov.go.id/" target="_blank">SIMSI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions"
                        role="button" aria-controls="offcanvasWithBothOptions">
                        Contact
                    </a>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Selamat Datang, {{ auth()->user()->name }}</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="/dashboard"><i
                                        class="bi bi-layout-text-sidebar-reverse"></i>
                                    Dashboard</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-in-left"></i>
                                        Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                </ul>
            @endauth
        </div>
    </div>

</nav>
