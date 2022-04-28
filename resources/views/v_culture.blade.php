@extends('layout.v_template')
@section('title', 'CULTURE DESTINATION')

@section('content')
<a href="/culture/add" class="btn btn-primary btn-sm">Add</a> <br>

@if (session('pesan'))
<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Success</h4>
                {{ session('pesan') }}
              </div>
              @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Wisata</th>
                <th>Harga Tiket</th>
                <th>Fasilitas</th>
                <th>Foto</th>
                <th>Kategori</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            @foreach  ($culture as $data)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $data->nama_wisata }}</td>
                <td>{{ $data->harga_tiket }}</td>
                <td>{{ $data->fasilitas }}</td>
                <td><img src="{{ url('foto/'.$data->foto) }}" width="150px" alt=""></td>
                <td>{{ $data->kategori }}</td>
                <td>
                    <a href="" class="btn btn-sm btn-success">Detail </a>
                    <a href="/culture/edit/{{ $data->id_culture }}" class="btn btn-sm btn-warning">Edit </a>
                    </button>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete">
                        Delete
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@foreach ($culture as $data)



    <div class="modal modal-danger fade" id="delete">{{ $data ->nama_wisata }}
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">{{ $data ->nama_wisata }}</h4>
              </div>
              <div class="modal-body">
                <p>Apakah Anda Yakin Ingin Menghapus Data Ini...???</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">No</button>
                <a href="/culture/delete/{{ $data ->id_culture }}" class="btn btn-outline">Yes</a>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
@endforeach

@endsection