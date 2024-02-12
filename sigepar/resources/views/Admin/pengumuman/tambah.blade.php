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
              <h3 class="card-title"> Form Tambah Data  Pengumuman HKI Parsoburan</h3>
            </div>
            <div class="card-body">
              <!-- Minimal style -->
              <div class="row">
                <div class="col-sm-12">
                    {{-- form tambah data jemaat --}}
                    <form action="/pengumumanCreate" method="POST" enctype="multipart/form-data">
                        {{@csrf_field()}}

                      <div class="form-group" {{$errors->has('tanggal')? 'hash-error':''}}>
                        <label for="tanggal"> Tanggal  </label>
                        <input type="date"  name="tanggal" class="form-control" id="tanggal" placeholder="Tanggal  Sebagai Pengurus Gereja" value="{{old('tanggal')}}">
                        @if($errors->has('tanggal'))
                        <span class="help-block">{{$errors->first('tanggal')}}</span>
                        @endif
                      </div>

             
        
        
                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                            <b>Gambar</b>
                        <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="customFile">
                        @if($errors->has('image'))
                        <span class="help-block">{{$errors->first('image')}}</span>
                        @endif
                               <label class="custom-file-label" for="customFile">Choose file</label>
                         </div></a>
                           </li>
                      </ul>
                        
                        <!-- /.card-body -->


                    <div class="form-group" {{$errors->has('judul_pengumuman')? 'hash-error':''}}>
                        <label for="exampleInputEmail1">Judul</label>
                        <input type="text" name="judul_pengumuman" class="form-control" id="exampleInputEmail1" placeholder="Nama Lengkap" value="{{old('nama_lengkap')}}">
                        @if($errors->has('judul_pengumuman'))
                        <span class="help-block">{{$errors->first('judul_pengumuman')}}</span>
                        @endif
                      </div>

                      <div class="form-group" >
                        <label for="quotes">Isi</label>
                       <textarea class="form-control"  id="quotes" name="isi" > </textarea>
                      </div>  
                        <button type="submit" class="btn btn-primary btn-block">Tambahkan Data Pengumuman</button>   
                    </form>     
              </div>
                 
            </div>
           
        </div>

        </div>
      </div>
    </section>

</div>
  @endsection