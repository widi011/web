@extends('layout.v_template')
@section('title', 'Edit Culture')

@section('content')

<form action="/culture/update/{{ $culture->id_culture }}" method="POST" enctype="multipart/form-data">
    @csrf

<div class="content">
<div class="row">
<div class="col-sm-6">

<div class="form-group">
        <label >Nama Wisata</label>
        <input name="nama_wisata" class="form-control" value="$culture->nama_wisata">
        <div class="invalid-feedback">
            @error('nama_wisata')
            {{ $message }}
            @enderror
            <div>
    </div>

<div class="form-group">
        <label >Harga Tiket</label>
        <input name="harga_tiket" class="form-control"value="$culture->harga_tiket">
        <div class="invalid-feedback">
            @error('harga_tiket')
            {{ $message }}
            @enderror
            <div>
    </div>

    <div class="form-group">
        <label >Fasilitas</label>
        <input name="fasilitas" class="form-control"value="$culture->fasilitas">
        <div class="invalid-feedback">
            @error('fasilitas')
            {{ $message }}
            @enderror
            <div>
    </div>

    <div class="form-group">
        <label >Kategori</label>
        <input name="kategori" class="form-control"value="$culture->kategori">
        <div class="invalid-feedback">
            @error('kategori')
            {{ $message }}
            @enderror
            <div>
    </div>

    <div class="col-sm12">
        <div class="col-sm-4">
    <img src="{{ url('foto/'.$culture->foto) }}" width="150px">
        </div>
        <div class="col-sm-8">
        <div class="form-group">
        <label >Ganti Foto</label>
        <input type="file" name="foto" class="form-control">
        <div class="invalid-feedback">
            @error('foto')
            {{ $message }}
            @enderror
            <div>
        </div>
    </div>
</div>

    <div class="col-sm12">
        <div class="form-group">
            <button class="btn btn-primary btn-sm">Simpan</button>
        </div>
    </div>

</div>

</div>
</form>


@endsection