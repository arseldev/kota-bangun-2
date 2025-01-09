@extends('general.layouts.parent')

@section('title', 'Kalender Desa | Desa Kota Bangun II')

@push('style')
    <link rel="stylesheet" href="/stisla/modules/fullcalendar/fullcalendar.min.css">
    <link rel="stylesheet" href="/frontend/css/kalender-desa.css">
@endpush

@section('content')
    <section id="calendar">
        <div class="calendar-container bg-light rounded shadow">
            <h2 class="title text-center fw-semibold">Kalender Kegiatan Desa</h2>
            <div id="calendar-box">
                <div id="calendar-content"></div>
            </div>
        </div>
    </section>

    <!-- Modal -->
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
    <script src="/stisla/modules/moment.min.js"></script>
    <script src="/stisla/modules/fullcalendar/fullcalendar.js"></script>
    <script src="/stisla/modules/fullcalendar/locale/id.js"></script>
    <script>
        $(document).ready(function() {
            var SITEURL = "{{ url('/') }}";

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var events = @json($events); // Ubah data $events menjadi format JSON

            $('#calendar-box').fullCalendar({
                editable: false,
                events: events.map(event => ({
                    title: event.title,
                    start: event.date,
                    allDay: true,
                    description: event.description,
                    image: event.image
                })),
                displayEventTime: false,
                eventRender: function(event, element, view) {
                    if (event.allDay === 'true') {
                        event.allDay = true;
                    } else {
                        event.allDay = false;
                    }
                },
                eventClick: function(event) {
                    var dateOnly = moment(event.date).format('YYYY-MM-DD');
                    var imageSource = '/storage/' + event.image;
                    $('#activityModalLabel').text(dateOnly);
                    $('#modalDescription').text(event.title);
                    $('#modalImage').attr('src', imageSource);
                    $('#activityModal').modal('show');
                    return false; // Prevent the default action of navigating to the URL directly
                }
            });
        });
    </script>
@endpush
