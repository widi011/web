@extends('layout.v_template')
@section('title', 'DAFTAR PANEN')

@section('content')
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Panen</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{route('panen.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Produk</label>
                  <input type="text" class="@error('produkName')@enderror form-control" placeholder="Nama Panen">
                  <span class="text-sm">@error('produkName') {{$message}} @enderror</span>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Tanggal Panen</label>
                  <input type="date" class="@error('PanenDate')@enderror form-control" placeholder="Tanggal Panen">
                  <span class="text-sm">@error('PanenDate') {{$message}} @enderror</span>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Jumlah</label>
                  <input type="number" class="@error('PanenJumlah')@enderror form-control" placeholder="Jumlah">
                  <span class="text-sm">@error('PanenJumlah') {{$message}} @enderror</span>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Satuan</label>
                  <input type="text" class="@error('satuan')@enderror form-control" placeholder="Satuan">
                  <span class="text-sm">@error('satuan') {{$message}} @enderror</span>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
@endsection