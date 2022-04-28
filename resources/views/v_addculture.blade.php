@extends('layout.v_template')
@section('title', 'Add Culture')

@section('content')

<form action="/culture/insert" method="POST" enctype="multipart/form-data">
    @csrf

<div class="content">
<div class="row">
<div class="col-sm-6">

<div class="form-group">
        <label >Nama Wisata</label>
        <input name="nama_wisata" class="form-control">
        <div class="invalid-feedback">
            @error('nama_wisata')
            {{ $message }}
            @enderror
            <div>
    </div>

<div class="form-group">
        <label >Harga Tiket</label>
        <input name="harga_tiket" class="form-control">
        <div class="invalid-feedback">
            @error('harga_tiket')
            {{ $message }}
            @enderror
            <div>
    </div>

    <div class="form-group">
        <label >Fasilitas</label>
        <input name="fasilitas" class="form-control">
        <div class="invalid-feedback">
            @error('fasilitas')
            {{ $message }}
            @enderror
            <div>
    </div>

    <div class="form-group">
        <label >Foto</label>
        <input type="file" name="foto" class="form-control">
        <div class="invalid-feedback">
            @error('foto')
            {{ $message }}
            @enderror
            <div>
    </div>

    <div class="form-group">
        <label >Kategori</label>
        <input name="kategori" class="form-control">
        <div class="invalid-feedback">
            @error('kategori')
            {{ $message }}
            @enderror
            <div>
    </div>

    <div class="form-group">
        <button class="btn btn-primary btn-sm">Simpan</button>
    </div>

</div>

</div>
</form>

@endsection