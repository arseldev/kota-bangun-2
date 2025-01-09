<nav class="navbar navbar-expand-lg bg-body-tertiary shadow z-1">
    <div class="container-fluid">
        <div class="navbar-brand d-flex align-items-center" href="#">
            <img src="/frontend/img/logo-kukar.png" alt="Logo" height="48" class="d-inline-block align-text-top">
            <div class="d-flex flex-column">
                <h1 class="m-0 fw-semibold">Desa Kota Bangun II</h1>
                <h2 class="m-0 fw-normal">Kabupaten Kutai Kertanegara</h2>
            </div>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-2">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page"
                        href="{{ route('profil-desa') }}">Profil
                        Desa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('peta-demografi') ? 'active' : '' }}" aria-current="page"
                        href="{{ route('peta-demografi') }}">Peta & Demografi</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ Request::is('kalender-desa') || Request::is('dokumentasi-kegiatan') ? 'active' : '' }} "
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Kegiatan
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item {{ Request::is('kalender-desa') ? 'active' : '' }}"
                                href="{{ route('kalender-desa') }}">Kalender Desa</a></li>
                        <li><a class="dropdown-item {{ Request::is('dokumentasi-kegiatan') ? 'active' : '' }}"
                                href="{{ route('dokumentasi-kegiatan') }}">Dokumentasi Kegiatan</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('potensi-desa') ? 'active' : '' }}"
                        href="{{ route('potensi-desa') }}">Potensi Desa</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link {{ Request::is('kontak') ? 'active' : '' }}"
                        href="{{ route('kontak') }}">Kontak</a>
                </li> --}}
            </ul>
        </div>
    </div>
</nav>
