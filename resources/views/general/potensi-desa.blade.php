@extends('general.layouts.parent')

@section('title', 'Potensi Desa | Desa Kota Bangun II')

@push('style')
    <link rel="stylesheet" href="/frontend/css/potensi-desa.css">
@endpush

@section('content')
    <section id="hero">
        <div class="hero-image">
            <div class="overlay"></div>
            <div class="hero-text">
                <h1>Potensi Desa</h1>
                <p>Pertanian, Perkebunan, UKM, BUMDes, dan Pariwisata</p>
            </div>
        </div>
    </section>

    <div class="content d-flex">
        <section id="category" class="shadow rounded">
            <p class="title fw-semibold">Kategori Potensi</p>
            <div class="accordion" id="accordionExample">
                @foreach ($categories as $category)
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed category-button" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapse{{ $category->id }}"
                                aria-expanded="false" aria-controls="collapse{{ $category->id }}">
                                {{ $category->name }}
                            </button>
                        </h2>
                        <div id="collapse{{ $category->id }}" class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="text-justify category-description">{{ $category->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </section>
        <section id="potensi-desa" class="shadow rounded">
            <p class="title fw-semibold">Potensi Desa</p>
            <div class="potensi-desa-container">
                @foreach ($potentials as $potential)
                    <div class="potensi-desa-card" style="background-image: url('/frontend/img/menanam_padi.webp')">
                        <div class="corner-text fw-semibold shadow">
                            @if ($potential->category == null)
                                Tanpa Kategori
                            @else
                                {{ $potential->category->name }}
                            @endif
                        </div>
                        <div class="card-text">
                            <h5 class="fw-semibold">{{ $potential->name }}</h5>
                            <p>{{ $potential->location }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </div>
@endsection
