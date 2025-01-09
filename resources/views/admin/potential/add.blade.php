@extends('admin.layouts.parent')


@section('title', 'Admin')


@section('subtitle', 'Tambah Potensi Desa')
@section('main', 'Tambah Potensi Desa')

@section('location')
    <div class="breadcrumb-item"><a href="{{ route('admin.potential') }}">Potensi Desa</a></div>
    <div class="breadcrumb-item">Tambah Potensi Desa</div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Tambah Potensi Desa Kota Bangun II</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.potential.add_process') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
                            <div class="col-sm-12 col-md-7">
                                <div class="input-group">
                                    <input type="text" name="name" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Lokasi</label>
                            <div class="col-sm-12 col-md-7">
                                <div class="input-group">
                                    <input type="text" name="location" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kategori</label>
                            <div class="col-sm-12 col-md-7">
                                <select name="category_id" class="form-control select2" id="">
                                    <option value="" selected disabled>-- Pilih Kategori --</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
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
