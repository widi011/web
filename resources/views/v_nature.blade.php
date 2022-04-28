@extends('layout.v_template')
@section('title', 'NATURE DESTINATION')

@section('content')
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">List Nature Destination</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>Nama Objek Wisata</th>
                  <th>Harga</th>
                  <th>Kategori</th>
                  <th>Fasilitas</th>
                  <th>Picture</th>
                </tr>
                <tr>
                  <td>  Danau Tamblingan</td>
                  <td>10.000</td>
                  <td>Nature Destination</td>
                  <td>Kamar Mandi</td>
                  <td><img src="{{asset('template')}}/dist/img/tamblingan.jpg"  width="100px" alt="User Image"></td>
                </tr>
                <tr>
                  <td>  Munduk Waterfall</td>
                  <td>10.000</td>
                  <td>Nature Destination</td>
                  <td>-</td>
                  <td><img src="{{asset('template')}}/dist/img/waterfall.jpg" width="100px" alt="User Image"></td>
                </tr>

              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
@endsection