@extends('admin.layouts.parent')


@section('title', 'Admin')


@section('subtitle', 'Edit Potensi Desa')
@section('main', 'Edit Potensi Desa')

@section('location')
    <div class="breadcrumb-item"><a href="{{ route('admin.potential') }}">Potensi Desa</a></div>
    <div class="breadcrumb-item">Edit Potensi Desa</div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Potensi Desa Kota Bangun II</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.potential.edit_process', $potential->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
                            <div class="col-sm-12 col-md-7">
                                <div class="input-group">
                                    <input type="text" name="name" class="form-control"
                                        value="{{ $potential->name }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Lokasi</label>
                            <div class="col-sm-12 col-md-7">
                                <div class="input-group">
                                    <input type="text" name="location" class="form-control"
                                        value="{{ $potential->location }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kategori</label>
                            <div class="col-sm-12 col-md-7">
                                <select name="category_id" class="form-control select2" id="">
                                    <option value="" disabled>-- Pilih Kategori --</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ $category->id == $potential->category_id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
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
                                <img src="{{ asset('storage/' . $potential->image) }}" alt="" height="300">
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
