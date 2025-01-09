@extends('general.layouts.parent')

@section('title', 'Peta & Demografi | Desa Kota Bangun II')

@push('style')
    <link rel="stylesheet" href="/frontend/css/peta-demografi.css">
    <link rel="stylesheet" href="/frontend/css/responsive-peta-demografi.css">
@endpush

@section('content')
    <section id="peta" class="bg-light shadow rounded mt-5 mb-3">
        <h2 class="title text-center fw-semibold">Peta Desa</h2>
        <img src="/frontend/img/peta-desa-koba2.jpg" alt="peta-desa-koba2" width="100%" height="100%"
            class="rounded object-fit-cover ">
        <div class="d-flex download-container">
            <a href="https://drive.google.com/uc?export=download&id=1Co5E-Z-kYsGVYhyl94AYfRhyTdT_q8ix"
                class="btn btn-success d-flex align-items-center" style="gap: 5px;"><i class="fas fa-download"></i><span
                    class="">Download Peta</span></a>
            <a href="https://drive.google.com/uc?export=download&id=1SLQvZ__uO1-QdaiULbA_jhywUvd_irJ-"
                class="btn btn-success d-flex align-items-center" style="gap: 5px;"><i class="fas fa-download"></i><span
                    class="">Download Tapal Batas Desa</span></a>
        </div>
    </section>

    <section id="demografi" class="bg-light shadow rounded mb-5">
        <h2 class="title text-center fw-semibold">Demografi Penduduk</h2>
        <div class="demografi-container d-flex">
            <div class="demografi-image rounded-start">
                <img class="lazyload" src="/frontend/img/infografis-koba2.webp" alt="" width="100%"
                    height="100%">
            </div>
            <div class="demografi-text">
                <p class="fw-semibold">Deskripsi: </p>
                <p class="content">
                    Jumlah penduduk Desa Kota Bangun II terdiri dari 1.917 dewasa dan 740 anak-anak. Dari jumlah dewasa,
                    50,52% adalah laki-laki dan 49,48% perempuan. Sementara itu, dari jumlah anak-anak, 53,44% adalah
                    laki-laki dan 46,56% perempuan. Berdasarkan kelompok umur, penduduk terbanyak adalah kategori usia >60
                    tahun (301 jiwa) dan usia 10-14 tahun (269 jiwa). Penduduk lainnya tersebar dalam kelompok usia sebagai
                    berikut:
                </p>
                <ul>
                    <li>0-4 tahun: 174 jiwa</li>
                    <li>5-9 tahun: 249 jiwa</li>
                    <li>10-14 tahun: 269 jiwa</li>
                    <li>15-19 tahun: 209 jiwa</li>
                    <li>20-24 tahun: 209 jiwa</li>
                    <li>25-29 tahun: 147 jiwa</li>
                    <li>30-34 tahun: 211 jiwa</li>
                    <li>35-39 tahun: 231 jiwa</li>
                    <li>40-44 tahun: 213 jiwa</li>
                    <li>45-49 tahun: 167 jiwa</li>
                    <li>50-54 tahun: 136 jiwa</li>
                    <li>55-59 tahun: 141 jiwa</li>
                    <li>>60 tahun: 301 jiwa</li>
                </ul>

                <p class="content">
                    Berdasarkan infografis, jumlah kepala keluarga (KK) di Desa Kota Bangun II terbanyak berada di RT 3
                    dengan total 69 KK (56 laki-laki dan 13 perempuan). Jumlah KK di RT lainnya adalah sebagai berikut:
                </p>
                <ul>
                    <li>RT 1: 49 KK</li>
                    <li>RT 2: 55 KK</li>
                    <li>RT 3: 69 KK (56 laki-laki dan 13 perempuan)</li>
                    <li>RT 4: 39 KK</li>
                    <li>RT 5: 24 KK</li>
                    <li>RT 6: 63 KK</li>
                    <li>RT 7: 55 KK</li>
                    <li>RT 8: 63 KK</li>
                    <li>RT 9: 36 KK</li>
                    <li>RT 10: 45 KK</li>
                    <li>RT 11: 34 KK</li>
                    <li>RT 12: 47 KK</li>
                    <li>RT 13: 42 KK</li>
                    <li>RT 14: 47 KK</li>
                    <li>RT 15: 37 KK</li>
                    <li>RT 16: 25 KK</li>
                    <li>RT 17: 42 KK</li>
                    <li>RT 18: 37 KK</li>
                    <li>RT 19: 38 KK</li>
                    <li>RT 20: 31 KK</li>
                </ul>
                <p class="content">
                    Jumlah KK laki-laki lebih dominan di setiap RT dibandingkan KK perempuan.
                </p>

                <p class="content">
                    Penduduk Desa Kota Bangun II sebagian besar bekerja mengurus rumah tangga dan menjadi pelajar. Selain
                    itu, mereka juga bekerja sebagai wiraswasta dan di sektor pertanian. Mayoritas penduduknya beragama
                    Islam (99%), dengan sebagian kecil (1%) beragama Kristen.

                </p>

            </div>
        </div>
    </section>
@endsection
