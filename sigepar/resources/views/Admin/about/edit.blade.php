@extends('Layout.Admin')
@section('content')
@section('title','SIGEPAR  | Tambah Data Pengurus Gerejaa')
            
<div class="content-wrapper" style="min-height: 2171.6px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Pengumuman</a></li>
              <li class="breadcrumb-item active">Tambah Pengumuman</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title"> Form Edit Data  Pengumuman HKI Parsoburan</h3>
            </div>
            <div class="card-body">
              <!-- Minimal style -->
              <div class="row">
                <div class="col-sm-12">
                    {{-- form tambah data jemaat --}}
                    <form action="/updatePengumuman/{{$data->id}}/edit" method="POST" enctype="multipart/form-data">
                        {{@csrf_field()}}

                      <div class="form-group" {{$errors->has('tanggal')? 'hash-error':''}}>
                        <label for="tanggal"> Tanggal  </label>
                        <input type="date"  name="tanggal" class="form-control" id="tanggal" placeholder="Tanggal  Sebagai Pengurus Gereja" value="{{$data->tanggal}}">
                        @if($errors->has('tanggal'))
                        <span class="help-block">{{$errors->first('tanggal')}}</span>
                        @endif
                      </div>


                    <div class="form-group" {{$errors->has('judul_pengumuman')? 'hash-error':''}}>
                        <label for="exampleInputEmail1">Judul</label>
                        <input type="text" name="judul_pengumuman" class="form-control" id="exampleInputEmail1" placeholder="Nama Lengkap" value="{{$data->judul_pengumuman}}">
                        @if($errors->has('judul_pengumuman'))
                        <span class="help-block">{{$errors->first('judul_pengumuman')}}</span>
                        @endif
                      </div>

                      <div class="form-group" >
                        <label for="quotes">Isi</label>
                       <textarea class="form-control"  id="quotes" name="isi" >{{$data->isi}} </textarea>
                      </div>  
                        <button type="submit" class="btn btn-success btn-block">Edit Data Pengumuman</button>   
                    </form>     
              </div>
                 
            </div>
           
        </div>

        </div>
      </div>
    </section>

</div>
  @endsection