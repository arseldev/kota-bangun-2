@extends('admin.layouts.parent')


@section('title', 'Admin')


@section('subtitle', 'Tambah Kategori Potensi Desa')
@section('main', 'Tambah Kategori Potensi Desa')

@section('location')
    <div class="breadcrumb-item"><a href="{{ route('admin.potential') }}">Potensi Desa</a></div>
    <div class="breadcrumb-item">Tambah Kategori Potensi Desa</div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Tambah Kategori Potensi Desa Kota Bangun II</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.potential.add-category_process') }}" method="POST">
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
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi</label>
                            <div class="col-sm-12 col-md-7">
                                <div class="input-group">
                                    <input type="text" name="description" class="form-control">
                                </div>
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
