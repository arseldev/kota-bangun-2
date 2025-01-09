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
                        Desa Kota Bangun II memiliki luas wilayah
                        sebesar 1.300 Ha dengan total populasi 2.657 jiwa. Desa ini terbagi menjadi 3 dusun yang
                        mencakup 20 RT
                        dengan 879 kepala keluarga.
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
                        <a href="{{ route('profil-desa') }}" class="text-reset">Profile Desa</a>
                    </p>
                    <p>
                        <a href="{{ route('peta-demografi') }}" class="text-reset">Peta & Demografi</a>
                    </p>
                    <p>
                        <a href="{{ route('kalender-desa') }}" class="text-reset">Kalender Desa</a>
                    </p>
                    <p>
                        <a href="{{ route('dokumentasi-kegiatan') }}" class="text-reset">Dokumentasi Kegiatan</a>
                    </p>
                    <p>
                        <a href="{{ route('potensi-desa') }}" class="text-reset">Potensi Desa</a>
                    </p>
                    {{-- <p>
                        <a href="{{ route('kontak') }}" class="text-reset">Kontak</a>
                    </p> --}}
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
                            class="text-decoration-none text-reset">desakotabangunIIkukar@gmail.com</a>
                    </p>
                    <p><i class="fas fa-phone me-3"></i>+62 853-8923-9190</p>
                    <p><i class="fab fa-instagram me-3"></i><a href="https://www.instagram.com/desakotabangun2"
                            class="text-decoration-none text-reset" target="_blank">
                            desakotabangun2</a></p>
                    <p><i class="fab fa-facebook me-3"></i><a href="https://www.facebook.com/koba.ii.10"
                            class="text-decoration-none text-reset" target="_blank">
                            Koba II</a></p>
                    <p><i class="fab fa-facebook me-3"></i><a href="https://www.facebook.com/desakotabangunII/"
                            class="text-decoration-none text-reset" target="_blank">
                            Desa Kota Bangun 2</a></p>
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
