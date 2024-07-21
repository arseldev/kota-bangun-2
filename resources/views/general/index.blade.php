<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/frontend/bootstrap/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="/frontend/css/profile.css">
    <link rel="stylesheet" href="/frontend/css/responsive-profile.css">
    <link rel="stylesheet" href="/stisla/modules/owlcarousel2/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="/stisla/modules/owlcarousel2/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="/stisla/modules/fontawesome/css/all.min.css">
</head>

<body style="background-color: #eee;">
    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow z-1">
        <div class="container-fluid">
            <div class="navbar-brand d-flex align-items-center" href="#">
                <img src="https://upload.wikimedia.org/wikipedia/commons/7/7d/Lambang_Kab._Kutai_Kertanegara.png"
                    alt="Logo" height="48" class="d-inline-block align-text-top">
                <div class="d-flex flex-column">
                    <h1 class="m-0 fw-semibold">Desa Kota Bangun II</h1>
                    <h2 class="m-0 fw-normal">Kabupaten Kutai Kertanegara</h2>
                </div>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-2">
                    <li class="nav-item">
                        <a class="nav-link fw-semibold" aria-current="page" href="#">Profil Desa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#">Peta & Demografi</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle  " href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Kegiatan
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Kalender Desa</a></li>
                            <li><a class="dropdown-item" href="#">Dokumentasi Kegiatan</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">Potensi Desa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero">
        <div class="hero-content user-select-none">
            <h4>Selamat datang di website desa</h4>
            <h3 class="fw-bold">Kota Bangun II</h3>
            <a href="#about" class="btn btn-outline-light" id="explore-button">Jelajahi Desa</a>
        </div>
    </section>

    <section id="about" class="d-flex my-5 align-items-center">
        <div class="description">
            <h5 class="fw-semibold">Tentang Desa</h5>
            <p class="text-justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint reprehenderit
                quisquam quaerat! Nostrum,
                consequuntur. Quidem, quos nulla? Illum magni cupiditate voluptatum? Quae odit vitae voluptatem
                explicabo recusandae ut, doloribus veritatis at nam placeat ratione optio aperiam quia, dignissimos
                minus aut minima maiores harum perspiciatis inventore maxime sit officiis similique. Veniam animi
                deleniti itaque nostrum natus culpa corporis asperiores alias adipisci iste aut, ad nihil minima rem
                eaque facere, atque cumque excepturi aliquam eligendi ex similique. Praesentium voluptatibus earum
                reiciendis aperiam? Temporibus quasi quidem optio laboriosam a pariatur ea fugiat vel molestiae itaque
                cum, enim fugit voluptatibus voluptatum! Perspiciatis, illo cupiditate.</p>
        </div>
        <div class="description-box box d-flex">
            <div class="left">
                <span class="shadow rounded box-left1"></span>
                <span class="shadow rounded box-left2"></span>
            </div>
            <div class="right">
                <span class="shadow rounded box-right1"></span>
                <span class="shadow rounded box-right2"></span>
            </div>
        </div>
    </section>

    <section id="stats">
        <div class="content">
            <div class="d-flex">
                <div>
                    <p class="amount fw-bold">20.000</p>
                    <p class="title">Penduduk &#40;Jiwa&#41;</p>
                </div>
                <div>
                    <p class="amount fw-bold">5.000</p>
                    <p class="title">Luas Wilayah &#40;m<sup>2</sup>&#41;</p>
                </div>
                <div>
                    <p class="amount fw-bold">1.000</p>
                    <p class="title">Kepala Keluarga</p>
                </div>
                {{-- <div>
                    <p class="amount fw-bold">50</p>
                    <p class="title">Wisata Alam</p>
                </div> --}}
            </div>
        </div>
    </section>

    <section id="visi-misi" class="d-flex align-items-center my-5">
        <div class="content-visi-misi">
            <img src="/frontend/img/visi-misi.png" alt="Visi Misi Kota Bangun II" width="100%"
                class="visi-misi-image rounded shadow">
        </div>
        <div class="content-visi-misi">
            <div class="visi">
                <div class="title-container d-flex align-items-center">
                    <img src="/frontend/img/visi-misi-icon.svg" alt="Visi Misi Icon">
                    <div class="visi-title fw-bold">Visi</div>
                </div>
                <p class="visi-content fw-semibold text-center">Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. Esse, vel
                    qui earum et
                    libero
                    necessitatibus.</p>
            </div>
            <div class="misi">
                <div class="title-container d-flex align-items-center">
                    <img src="/frontend/img/visi-misi-icon.svg" alt="Visi Misi Icon">
                    <div class="misi-title fw-bold">Misi</div>
                </div>
                <div class="misi-content">
                    <ol>
                        <li>Lorem ipsum dolor sit amet.</li>
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe, sed.</li>
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
                        <li>Lorem ipsum dolor sit amet.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti inventore, iure est
                            blanditiis cupiditate debitis.</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section id="structure" class="my-5">
        <div class="cards-container">
            <div class="title" style="margin-bottom: 20px;">
                <h4 class="fw-bold">Struktur Organisasi</h4>
            </div>
            <div class="structure-container">
                <div class="structure-image mb-5">
                    <img src="/frontend/img/struktur_desa.png" alt="" class="rounded shadow">
                </div>
                <div class="owl-carousel owl-theme slide-cards">
                    <div class="item">
                        <div class="card">
                            <img src="https://via.placeholder.com/300" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Joko Purnomo S.IP</h5>
                                <p class="card-text">KEPALA DESA</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <img src="https://via.placeholder.com/300" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Unkown</h5>
                                <p class="card-text">SEKRETARIS</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <img src="https://via.placeholder.com/300" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Unknown</h5>
                                <p class="card-text">KAUR TATA USAHA DAN UMUM</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <img src="https://via.placeholder.com/300" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Unkown</h5>
                                <p class="card-text">KAUR KEUANGAN</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <img src="https://via.placeholder.com/300" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Unkown</h5>
                                <p class="card-text">KAUR PERENCANAAN</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <img src="https://via.placeholder.com/300" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Unkown</h5>
                                <p class="card-text">KASI PEMERINTAHAN</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <img src="https://via.placeholder.com/300" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Unkown</h5>
                                <p class="card-text">KASI KESEJAHTERAAN</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <img src="https://via.placeholder.com/300" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Unkown</h5>
                                <p class="card-text">KASI PELAYANAN</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <img src="https://via.placeholder.com/300" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Unkown</h5>
                                <p class="card-text">KADUS BLOK A</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <img src="https://via.placeholder.com/300" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Unkown</h5>
                                <p class="card-text">KADUS BLOK B</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <img src="https://via.placeholder.com/300" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Unkown</h5>
                                <p class="card-text">KADUS BLOK C</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="footer" class="text-center text-lg-start text-light">
        <!-- Section: Links  -->
        <section class="py-2">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-building me-3"></i>Desa Kota Bangun II
                        </h6>
                        <p>
                            Here you can use rows and columns to organize your footer content. Lorem ipsum
                            dolor sit amet, consectetur adipisicing elit.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Navigation
                        </h6>
                        <p>
                            <a href="/" class="text-reset">Profile Desa</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Peta & Demografi</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Kalender Desa</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Dokumentasi Kegiatan</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Potensi Desa</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Kontak</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 contact">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                        <p><i class="fas fa-map me-3"></i>Desa Kota Bangun II, Kota Bangun Darat, Kutai Kartanegara,
                            Kalimantan Timur</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            <a href="mailto:desakotabangunIIkukar@gmail.com"
                                class="text-decoration-none text-reset">desakotabangunIIkukar@gmail.comx</a>
                        </p>
                        <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                        <p><i class="fab fa-instagram me-3"></i><a href="https://www.instagram.com/desakotabangun2"
                                class="text-decoration-none text-reset" target="_blank">
                                desakotabangun2</a></p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © @php echo date('Y') @endphp Copyright:
            <a class="text-reset fw-semibold" href="https://michaelarselius.com/" target="_blank">ArselDev | KKN 50
                UNMUL (KUKAR
                33)</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->

    {{-- <img src="/frontend/img/desa.jpg" alt="" class="vh-100 w-100 img-fluid z-0 object-fit-cover"> --}}
    <script src="/stisla/modules/jquery.min.js"></script>
    <script src="/stisla/modules/owlcarousel2/dist/owl.carousel.min.js"></script>
    <script src="/stisla/modules/popper.min.js"></script>
    <script src="/frontend/bootstrap/js/bootstrap.min.js"></script>
    <script src="/frontend/js/profile.js"></script>
</body>

</html>
