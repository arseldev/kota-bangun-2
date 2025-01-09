@extends('admin.layouts.parent')


@section('title', 'Admin')


@section('subtitle', 'Tambah Kegiatan Desa')
@section('main', 'Tambah Kegiatan Desa')

@section('location')
    <div class="breadcrumb-item"><a href="{{ route('admin.event') }}">Kegiatan Desa</a></div>
    <div class="breadcrumb-item">Tambah Kegiatan Desa</div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Tambah Kegiatan Desa Kota Bangun II</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.event.add_process') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Judul</label>
                            <div class="col-sm-12 col-md-7">
                                <div class="input-group">
                                    <input type="text" name="title" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal</label>
                            <div class="col-sm-12 col-md-7">
                                <div class="input-group">
                                    <input type="date" name="date" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Upload Gambar</label>
                            <div class="col-sm-12 col-md-7">
                                <div class="input-group">
                                    <input type="file" name="image" id="">
                                </div>
                                <p style="font-weight: 700; font-size: 12px;">*JPG, JPEG, PNG | Max. 2MB</p>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                            <div class="col-sm-12 col-md-7">
                                <button type="submit" class="btn btn-primary">Tambah Data</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
