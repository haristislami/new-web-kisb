<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page"
                    href="/dashboard">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/berita*') ? 'active' : '' }}" href="/dashboard/berita">
                    <span data-feather="file-text"></span>
                    Post Berita
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/ajudikasi*') ? 'active' : '' }}"
                    href="/dashboard/ajudikasi">
                    <span data-feather="file-text"></span>
                    Putusan Ajudikasi
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/mediasi*') ? 'active' : '' }}" href="/dashboard/mediasi">
                    <span data-feather="file-text"></span>
                    Putusan Mediasi
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('add/user') ? 'active' : '' }}" href="/add/user">
                    <span data-feather="user-plus"></span>
                    Tambah User Baru
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/" target="_blank">
                    <span data-feather="layout"></span>
                    Lihat Halaman Web
                </a>
            </li>
        </ul>
    </div>
</nav>
