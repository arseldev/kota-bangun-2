@extends('general.layouts.parent')

@section('title', 'Dokumentasi Kegiatan | Desa Kota Bangun II')

@push('style')
    <link rel="stylesheet" href="/frontend/css/dokumentasi-kegiatan.css">
    <link rel="stylesheet" href="/frontend/css/responsive-dokumentasi-kegiatan.css">
@endpush

@section('content')
    <section id="dokumentasi" class="bg-light shadow rounded mt-5 mb-3">
        <h2 class="title text-center fw-semibold">Dokumentasi Kegiatan Desa</h2>
        <div class="d-flex" id="dokumentasi-container">
            <div class="image-container">
                <img src="/frontend/img/kunjungan-kabupaten.jpg" alt="dokumentasi-kegiatan">
                <div class="text-overlay">Pusat Dokumentasi Kegiatan Desa Kota Bangun II</div> <!-- Teks overlay -->
            </div>
            <div id="monthly-doc">
                <h3 class="fw-semibold monthly-title">Kegiatan Bulan Ini</h3>
                <hr style="margin-top: -10px;">
                <div class="activity">
                    @foreach ($eventThisMonth as $event)
                        <div class="activity-card shadow-sm rounded" data-bs-toggle="modal" data-bs-target="#activityModal">
                            <div class="activity-container d-flex align-items-center">
                                <div class="activity-image">
                                    <img src="{{ asset('storage/' . $event->image) }}" class="rounded object-fit-cover"
                                        alt="{{ $event->title }}">
                                </div>
                                <div class="activity-text">
                                    @php
                                        $date = \Carbon\Carbon::parse($event->date)->format('Y-m-d');
                                    @endphp
                                    <p class="date-text text-center fw-semibold">{{ $date }}</p>
                                    <h5 class="fw-semibold activity-title" style="margin-top: -10px;">{{ $event->title }}
                                    </h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div id="lastmonth-container">
            <h3 class="fw-semibold lastmonth-title">Kegiatan Sebelumnya</h3>
            <hr style="margin-top: -10px;">
            <div id="lastmonth-doc">
                @foreach ($eventPrev as $event)
                    <div class="activity-card shadow-sm rounded" data-bs-toggle="modal" data-bs-target="#activityModal">
                        <div class="activity-container d-flex align-items-center">
                            <div class="activity-image">
                                <img src="{{ asset('storage/' . $event->image) }}" width="115px" height="115px"
                                    class="rounded object-fit-cover" alt="dokumentasi-kegiatan">
                            </div>
                            <div class="activity-text">
                                @php
                                    $date = \Carbon\Carbon::parse($event->date)->format('Y-m-d');
                                @endphp
                                <p class="date-text text-center fw-semibold">{{ $date }}</p>
                                <h5 class="fw-semibold activity-title" style="margin-top: -10px;">{{ $event->title }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div id="pagination-doc">
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        {{-- Previous Button --}}
                        <li class="page-item {{ $eventPrev->onFirstPage() ? 'disabled' : '' }}">
                            <a class="page-link" href="{{ $eventPrev->previousPageUrl() }}" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>

                        {{-- Page Numbers --}}
                        @for ($i = 1; $i <= $eventPrev->lastPage(); $i++)
                            <li class="page-item {{ $i == $eventPrev->currentPage() ? 'active' : '' }}">
                                <a class="page-link" href="{{ $eventPrev->url($i) }}">{{ $i }}</a>
                            </li>
                        @endfor

                        {{-- Next Button --}}
                        <li class="page-item {{ $eventPrev->hasMorePages() ? '' : 'disabled' }}">
                            <a class="page-link" href="{{ $eventPrev->nextPageUrl() }}" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>


        </div>
    </section>

    <div class="modal fade" id="activityModal" tabindex="-1" aria-labelledby="activityModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="activityModalLabel">Detail Kegiatan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p id="modalDescription"></p>
                    <img src="" id="modalImage" class="img-fluid" alt="Gambar Kegiatan">
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        $(document).ready(function() {
            $('.activity-card').on('click', function() {
                var imgSrc = $(this).find('img').attr('src');
                var titleText = $(this).find('.activity-title').text();
                var dateText = $(this).find('.date-text').text();
                $('#modalImage').attr('src', imgSrc);
                $('#activityModalLabel').text(dateText);
                $('#modalDescription').text(titleText);
            });
        });
    </script>
@endpush
