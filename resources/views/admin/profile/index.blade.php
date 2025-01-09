@extends('admin.layouts.parent')


@section('title', 'Admin')


@section('subtitle', 'Profil Desa')
@section('main', 'Profil Desa')

@section('location')
    <div class="breadcrumb-item">Profil Desa</div>
@endsection

@push('style')
    <link rel="stylesheet" href="/stisla/modules/datatables/datatables10/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/stisla/modules/datatables/Select/css/select.bootstrap4.min.css">
@endpush

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Profil Desa Kota Bangun II</h4>
                </div>
                @if (session('section') === 'profile')
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
                        <table class="table table-striped" id="table-1">
                            <thead>
                                <tr>
                                    <th>Tentang</th>
                                    <th>Jumlah Penduduk</th>
                                    <th>Luas Wilayah</th>
                                    <th>Kepala Keluarga</th>
                                    <th>Visi</th>
                                    <th>Misi</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{!! $profile->about !!}</td>
                                    <td>
                                        {{ $profile->population }}
                                    </td>
                                    <td>
                                        {{ $profile->area }}
                                    </td>
                                    <td>
                                        {{ $profile->family }}
                                    </td>
                                    <td>
                                        {{ $profile->visi }}
                                    </td>
                                    <td>
                                        {!! $profile->misi !!}
                                    </td>
                                    <td class="text-center">
                                        <a href="/admin/profile/edit" class="btn btn-primary">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4>Pemerintah Desa Kota Bangun II</h4>
                    <a href="{{ route('admin.government.add') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i>
                        Tambah
                    </a>
                </div>
                @if (session('section') === 'government')
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
                        <table class="table table-striped" id="table-gov">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th class="text-center">Gambar</th>
                                    <th>Nama</th>
                                    <th>Jabatan</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($governments as $government)
                                    <tr>
                                        <td class="fw-semibold">{{ $loop->iteration }}</td>
                                        <td class="text-center p-2"><img src="{{ asset('storage/' . $government->image) }}"
                                                height="80" class="object-fit-cover"></td>
                                        <td>{{ $government->name }}</td>
                                        <td>{{ $government->position }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('admin.government.edit', $government->id) }}"
                                                class="btn btn-primary">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('admin.government.delete', $government->id) }}"
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
