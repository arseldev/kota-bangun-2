@extends('admin.layouts.parent')


@section('title', 'Admin')


@section('subtitle', 'Kegiatan Desa')
@section('main', 'Kegiatan Desa')

@section('location')
    <div class="breadcrumb-item">Kegiatan Desa</div>
@endsection

@push('style')
    <link rel="stylesheet" href="/stisla/modules/datatables/datatables10/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/stisla/modules/datatables/Select/css/select.bootstrap4.min.css">
@endpush

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4>Kegiatan Desa Kota Bangun II</h4>
                    <a href="{{ route('admin.event.add') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i>
                        Tambah
                    </a>
                </div>
                @if (session('section') === 'event')
                    @if (session('status'))
                        <div
                            class="alert {{ Str::startsWith(session('status'), 'Sukses') ? 'alert-success' : 'alert-danger' }} alert-dismissible show fade">
                            <div class="alert-body">
                                <button class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ session('status') }}
                            </div>
                        </div>
                    @endif
                @endif
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-events">
                            <thead>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Gambar</th>
                                    <th>Judul</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($events as $event)
                                    <tr>
                                        <td data-order="{{ \Carbon\Carbon::parse($event->date)->format('Y-m-d') }}">
                                            {{ $event->formatted_date }}</td>
                                        <td>
                                            <img src="{{ asset('storage/' . $event->image) }}" alt="img-{{ $event->title }}"
                                                height="300px">
                                        </td>
                                        <td>
                                            {{ $event->title }}
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ route('admin.event.edit', $event->id) }}" class="btn btn-primary">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('admin.event.delete', $event->id) }}"
                                                style="display: inline-block;" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button
                                                    onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"
                                                    class="btn btn-danger">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script src="/stisla/modules/datatables/datatables10/js/jquery.dataTables.min.js"></script>
    <script src="/stisla/modules/datatables/datatables10/js/dataTables.bootstrap4.min.js"></script>
    <script src="/stisla/assets/js/page/modules-datatables.js"></script>
@endpush
