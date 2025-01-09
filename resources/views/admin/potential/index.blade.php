@extends('admin.layouts.parent')


@section('title', 'Admin')


@section('subtitle', 'Potensi Desa')
@section('main', 'Potensi Desa')

@section('location')
    <div class="breadcrumb-item">Potensi Desa</div>
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
                    <h4>Potensi Desa Kota Bangun II</h4>
                    <a href="{{ route('admin.potential.add') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i>
                        Tambah
                    </a>
                </div>
                @if (session('section') === 'potential')
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
                        <table class="table table-striped" id="table-category">
                            <thead>
                                <tr>
                                    <th class="text-center">Gambar</th>
                                    <th>Nama</th>
                                    <th>Lokasi</th>
                                    <th>Kategori</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($potentials as $potential)
                                    <tr>
                                        <td class="text-center">
                                            <img src="{{ asset('storage/' . $potential->image) }}"
                                                alt="img-{{ $potential->title }}" height="300px">
                                        </td>
                                        <td>
                                            {{ $potential->name }}
                                        </td>
                                        <td>
                                            {{ $potential->location }}
                                        </td>
                                        <td>
                                            @if ($potential->category == null)
                                                <span class="badge bg-danger text-white">Belum ada kategori</span>
                                            @else
                                                <span
                                                    class="badge bg-primary text-white">{{ $potential->category->name }}</span>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ route('admin.potential.edit', $potential->id) }}"
                                                class="btn btn-primary">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('admin.potential.delete', $potential->id) }}"
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
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4>Kategori Potensi Desa Kota Bangun II</h4>
                    <a href="{{ route('admin.potential.add-category') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i>
                        Tambah
                    </a>
                </div>
                @if (session('section') === 'category')
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
                        <table class="table table-striped" id="table-category">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Deskripsi</th>
                                    <th class="text-center" style="width: 200px">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>
                                            {{ $category->name }}
                                        </td>
                                        <td>
                                            {{ $category->description }}
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ route('admin.potential.edit-category', $category->id) }}"
                                                class="btn btn-primary">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('admin.potential.delete-category', $category->id) }}"
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
