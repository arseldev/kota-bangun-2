@extends('admin.layouts.parent')


@section('title', 'Admin')


@section('subtitle', 'Edit Pemerintah Desa')
@section('main', 'Edit Pemerintah Desa')

@section('location')
    <div class="breadcrumb-item"><a href="{{ route('admin.profile') }}">Profil Desa</a></div>
    <div class="breadcrumb-item">Edit Pemerintah Desa</div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Pemerintah Desa Kota Bangun II</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.government.edit_process', $government->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
                            <div class="col-sm-12 col-md-7">
                                <div class="input-group">
                                    <input type="text" name="name" class="form-control"
                                        value="{{ $government->name }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jabatan</label>
                            <div class="col-sm-12 col-md-7">
                                <div class="input-group">
                                    <input type="text" name="position" class="form-control"
                                        value="{{ $government->position }}">
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
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Gambar Saat ini</label>
                            <div class="col-sm-12 col-md-7">
                                <img src="{{ asset('storage/' . $government->image) }}" alt="" height="300">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                            <div class="col-sm-12 col-md-7">
                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
