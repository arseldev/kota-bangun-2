@extends('general.layouts.parent')

@section('title', 'Website Resmi Desa Kota Bangun II')

@push('style')
    <link rel="stylesheet" href="/frontend/css/profile.css">
    <link rel="stylesheet" href="/frontend/css/responsive-profile.css">
@endpush

@section('content')
    <section class="hero">
        <div class="hero-content user-select-none">
            <h4>Selamat datang di website resmi</h4>
            <h1 class="fw-bold">Desa Kota Bangun II</h1>
            <a href="#about" class="btn btn-outline-light" id="explore-button">Jelajahi Desa</a>
        </div>
    </section>

    <section id="about" class="d-flex my-5 align-items-center">
        <div class="description">
            <h5 class="fw-semibold">Tentang Desa</h5>
            <p class="text-justify">{!! $profile->about !!}</p>
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
                    <p class="amount fw-bold">{{ number_format($profile->population, 0, ',', '.') }}</p>
                    <p class="title">Penduduk &#40;Jiwa&#41;</p>
                </div>
                <div>
                    <p class="amount fw-bold">{{ number_format($profile->area, 0, ',', '.') }}</p>
                    <p class="title">Luas Wilayah &#40;Ha&#41;</p>
                </div>
                <div>
                    <p class="amount fw-bold">{{ number_format($profile->family, 0, ',', '.') }}</p>
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
            <img src="/frontend/img/visi-misi.webp" alt="Visi Misi Kota Bangun II" width="100%"
                class="visi-misi-image rounded shadow">
        </div>
        <div class="content-visi-misi">
            <div class="visi">
                <div class="title-container d-flex align-items-center">
                    <img src="/frontend/img/visi-misi-icon.svg" alt="Visi Misi Icon">
                    <div class="visi-title fw-bold">Visi</div>
                </div>
                <p class="visi-content fw-semibold text-center">{{ $profile->visi }}</p>
            </div>
            <div class="misi">
                <div class="title-container d-flex align-items-center">
                    <img src="/frontend/img/visi-misi-icon.svg" alt="Visi Misi Icon">
                    <div class="misi-title fw-bold">Misi</div>
                </div>
                <div class="misi-content">
                    <div>
                        {!! $profile->misi !!}
                    </div>
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
                <div class="shadow rounded bg-light structure-box">
                    <div class="structure-image mb-5">
                        <img src="/frontend/img/struktur_desa.webp" alt="" class="rounded lazyload"
                            style="cursor: pointer;" id="structureImage" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="owl-carousel owl-theme slide-cards">
                        @foreach ($governments as $government)
                            <div class="item">
                                <div class="card">
                                    <img src="{{ asset('storage/' . $government->image) }}" width="100%" height="300px"
                                        class="card-img-top object-fit-cover" alt="{{ $government->name }}">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $government->name }}</h5>
                                        <p class="card-text">{{ $government->position }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Gambar Struktur Desa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="" alt="Gambar Struktur" id="modalImage" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </div>


    <section id="maps" class="my-5">
        <div class="title" style="margin-bottom: 20px;">
            <h4 class="fw-bold">Lokasi Desa Kota Bangun II</h4>
        </div>
        <div class="maps-container bg-light rounded shadow">
            <iframe class="rounded"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3883.2821608787103!2d116.55384758310986!3d-0.38106515495863597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df64fe33e2a41e1%3A0x22d17a80795d6b10!2sKANTOR%20DESA%20KOTA%20BANGUN%20II!5e0!3m2!1sid!2sid!4v1721869242728!5m2!1sid!2sid"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
@endsection

@push('script')
    <script>
        $(document).ready(function() {
            $('#structureImage').on('click', function() {
                var imgSrc = $(this).attr('src');
                $('#modalImage').attr('src', imgSrc);
                $('#imageModal').modal('show');
            });
        });
    </script>
    <script src="/frontend/js/profile.js"></script>
@endpush
