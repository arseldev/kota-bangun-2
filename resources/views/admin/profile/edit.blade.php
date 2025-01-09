@extends('admin.layouts.parent')


@section('title', 'Admin')


@section('subtitle', 'Edit Profil')
@section('main', 'Edit Profil')

@section('location')
    <div class="breadcrumb-item"><a href="{{ route('admin.profile') }}">Profil Desa</a></div>
    <div class="breadcrumb-item">Edit Profil</div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Profil Desa Kota Bangun II</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.profile.edit_process', $profile->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tentang Desa</label>
                            <div class="col-sm-12 col-md-7">
                                <textarea name="about" class="summernote-simple">{{ $profile->about }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jumlah Penduduk</label>
                            <div class="col-sm-12 col-md-7">
                                <div class="input-group">
                                    <input type="number" name="population" class="form-control"
                                        value="{{ $profile->population }}">
                                    <div class="input-group-append">
                                        <span class="input-group-text">Jiwa</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Luas Wilayah</label>
                            <div class="col-sm-12 col-md-7">
                                <div class="input-group">
                                    <input type="number" name="area" class="form-control" value="{{ $profile->area }}">
                                    <div class="input-group-append">
                                        <span class="input-group-text">Ha</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kepala Keluarga</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="number" name="family" class="form-control" value="{{ $profile->family }}">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Visi</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" name="visi" class="form-control" value="{{ $profile->visi }}">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Misi</label>
                            <div class="col-sm-12 col-md-7">
                                <textarea name="misi" class="summernote-simple">{{ $profile->misi }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                            <div class="col-sm-12 col-md-7">
                                <button class="btn btn-primary">Simpan Perubahan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
