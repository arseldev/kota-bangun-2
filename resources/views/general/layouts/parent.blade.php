<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title', 'Desa Kota Bangun II') </title>

    <!-- SEO Meta Tags -->
    <meta name="description"
        content="Website resmi Desa Kota Bangun II di Kabupaten Kutai Kartanegara, Kalimantan Timur. Temukan informasi terbaru mengenai kegiatan desa, potensi lokal, dan layanan masyarakat.">
    <meta name="keywords"
        content="Desa Kota Bangun II, Desa Kota Bangun 2, Kota Bangun 2, Kota Bangun, Kutai Kartanegara, Kalimantan Timur, kegiatan desa, potensi desa, layanan masyarakat">
    <meta name="author" content="Pemerintah Desa Kota Bangun II">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Social Media Meta Tags -->
    <meta property="og:title" content="@yield('title', 'Desa Kota Bangun II')">
    <meta property="og:description"
        content="Website resmi Desa Kota Bangun II, tempat informasi terkini mengenai kegiatan dan potensi desa.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('frontend/img/logo-kukar.png') }}">
    <meta property="og:type" content="website">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'Desa Kota Bangun II')">
    <meta name="twitter:description"
        content="Website resmi Desa Kota Bangun II, tempat informasi terkini mengenai kegiatan dan potensi desa.">
    <meta name="twitter:image" content="{{ asset('frontend/img/logo-kukar.png') }}">

    <!-- Robots -->
    <meta name="robots" content="index, follow">

    @include('general.layouts.include')
    @stack('style')
</head>

<body style="background-color: #eee;">
    @include('general.layouts.navbar')
    <div id="app">
        @yield('content')
        @include('general.layouts.footer')
    </div>
    @include('general.layouts.script')
    @stack('script')
</body>

</html>
