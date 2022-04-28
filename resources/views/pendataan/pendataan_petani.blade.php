@extends('layout.v_template')
@section('title', 'Pendataan')

@section('content')
{!! session('sukses') !!}

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Pendataan Petani</h1>
    <button type="button">
        <a href="/pendataan/create" class="px-1 py-1 text-blue font-light tracking-wider bg-yellow-500 rounded fa fa-plus"> Tambah</a>
    </button>
    <table class="table mt-4 table-hover table-bordered">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Petani</th>
      <th scope="col">Asal</th>
      <th scope="col">Alamat</th>
      <th scope="col">NIK</th>
      <th scope="col">Foto</th>
      <th scope="col">Nama Kelompok</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
        @foreach ($petanis as $item)
            <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$item->namaPetani}}</td>
            <td>{{$item->asal}}</td>
            <td>{{$item->alamat}}</td>
            <td>{{$item->NIK}}</td>
            <td><img src="{{ url ('foto/'.$item->foto) }}" width="100px" alt="">
            </td>
            <td>{{$item->kelompokName}}</td>
            <td width="20%">
            <div class="btn-group" role="group" aria-label="Basic example">
            <a href="/pendataan/{{$item->id}}/edit" class="btn btn-primary btn-sm mr-1"><i class="fas fa-edit"></i> Edit</a>
            <form action="/pendataan/{{$item->id}}" method="post">
                @method('DELETE')
                @csrf
            <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Hapus</button>
            </form>
            </div>
            </td>
            </tr>
        @endforeach
  </tbody>
</table>



@endsection