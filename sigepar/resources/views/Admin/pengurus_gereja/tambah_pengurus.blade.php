@extends('Layout.Admin')
@section('content')
@section('title','SIGEPAR  | Tambah Data Pengurus Gerejaa')
            
<div class="content-wrapper" style="min-height: 2171.6px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Advanced Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Pengurus Gereja</a></li>
              <li class="breadcrumb-item"><a href="#">Data Pengurus Gereja</a></li>
              <li class="breadcrumb-item active">Tambah Pengurus Gereja</li>
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
              <h3 class="card-title"> Form Tambah Data  Pengurus HKI Parsoburan</h3>
            </div>
            <div class="card-body">
              <!-- Minimal style -->
              <div class="row">
                <div class="col-sm-6">
                    {{-- form tambah data jemaat --}}
                    <form action="/DataPengurus_Gereja/create" method="POST" enctype="multipart/form-data">
                        {{@csrf_field()}}
                    <div class="form-group" {{$errors->has('nama_pengurus')? 'hash-error':''}}>
                        <label for="exampleInputEmail1">Nama Lengkap Pengurus</label>
                        <input type="text" name="nama_pengurus" class="form-control" id="exampleInputEmail1" placeholder="Nama Lengkap" value="{{old('nama_lengkap')}}">
                        @if($errors->has('nama_pengurus'))
                        <span class="help-block">{{$errors->first('nama_pengurus')}}</span>
                        @endif
                      </div>
                      <div class="form-group" {{$errors->has('jenis_kelamin')? 'hash-error':''}}>
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" data-select2-id="17" tabindex="-1" aria-hidden="true">
                          <option data-select2-id="19" selected>Pilih Jenis Kelamin</option>
                          <option value="Laki-laki"{{(old('jenis_kelamin')=='Laki-laki')?'selected':'' }} >Laki-laki</option>
                          <option value="Perempuan"{{(old('jenis_kelamin')=='Perempuan')?'selected':'' }}>Perempuan</option>
                          <option value="Lainnya"{{(old('jenis_kelamin')=='Lainnya')?'selected':'' }}>Lainnya</option>
                        </select>
                      </div>
                      <div class="form-group" {{$errors->has('kontak')? 'hash-error':''}}>
                        <label for="kontak"> Nomor Hp/Kontak Jemaat</label>
                        <div class="input-group mb-3">   
                            <div class="input-group-prepend">
                              <span class="input-group-text">+62</span>
                            </div>
                            <input type="text" name="kontak" class="form-control" placeholder="Masukkan Kontak Jemaat" value="{{old('kontak')}}">
                            @if($errors->has('kontak'))
                            <span class="help-block">{{$errors->first('kontak')}}</span>
                            @endif
                          </div>
                      </div>
                      <div class="form-group" {{$errors->has('tanggal_masuk')? 'hash-error':''}}>
                        <label for="tanggal_masuk"> Tanggal Masuk </label>
                        <input type="date"  name="tanggal_masuk" class="form-control" id="tanggal_masuk" placeholder="Tanggal Masuk Sebagai Pengurus Gereja" value="{{old('tanggal_masuk')}}">
                        @if($errors->has('tanggal_masuk'))
                        <span class="help-block">{{$errors->first('tanggal_masuk')}}</span>
                        @endif
                      </div>
                      <div class="form-group" {{$errors->has('tanggal_penabalan')? 'hash-error':''}}>
                        <label for="tanggal_penabalan"> Tanggal Penabalan </label>
                        <input type="date"  name="tanggal_penabalan" class="form-control" id="tanggal_penabalan" placeholder="Tanggal penabalan" value="{{old('tanggal_penabalan')}}">
                        @if($errors->has('tanggal_penabalan'))
                        <span class="help-block">{{$errors->first('tanggal_penabalan')}}</span>
                        @endif
                      </div>
                      <div class="form-group" {{$errors->has('jabatan')? 'hash-error':''}}>
                        <label>Jabatan</label>
                        <select name="jabatan" class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" data-select2-id="17" tabindex="-1" aria-hidden="true">
                          <option >Jabatan</option>
                          <option value="Pendeta"{{(old('jabatan')=='Pendeta')?'selected':'' }}>Pendeta</option>
                          <option value="Sintua"{{(old('jabatan')=='Sintua')?'selected':'' }}>Sintua</option>
                          <option value="Pimpinan Jemaat"{{(old('jabatan')=='Pimpinan Jemaat')?'selected':'' }}>Pimpinan Jemaat</option>
                          <option value="Sekretaris Jemaat"{{(old('jabatan')=='Sekretaris Jemaat')?'selected':'' }}>Sekretatis Jemaat</option>
                          <option value="Bendahara Jemaat"{{(old('jabatan')=='Bendahara Jemaat')?'selected':'' }}>Bendahara Jemaat</option>
                        </select>
                      </div>
                      <div class="form-group" >
                        <label for="quotes">Quotes</label>
                       <textarea class="form-control"  id="quotes" name="quotes" >Quotes </textarea>
                      </div>

              </div>
                    <div class="col-sm-4">
                    <div class="card card-primary card-outline" {{$errors->has('avatar')? 'hash-error':''}}>
                        <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="{{asset('assets/dist/img/user2-160x160.jpg')}}" alt="User profile picture">
                        </div>
        
                        <h3 class="profile-username text-center">Foto Pengurus</h3>
        
                        <p class="text-muted text-center">Foto  Harus Ditambahkan</p>
        
                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                            <b>Tambahkan Foto</b><div class="custom-file">
                        <input type="file" name="avatar" class="custom-file-input" id="customFile">
                        @if($errors->has('avatar'))
                        <span class="help-block">{{$errors->first('avatar')}}</span>
                        @endif
                               <label class="custom-file-label" for="customFile">Choose file</label>
                         </div></a>
                           </li>
                      </ul>
                      <button type="submit" class="btn btn-primary btn-block">Tambahkan Data Pengurus</button>
                        
                    </form>
                        {{-- end form tambah data jemaat  --}}
                     </div>
                        <!-- /.card-body -->
                 </div>
            </div>
            </div>
                    <!-- /.card-body -->
            <div class="card-footer">
                Data Dapat Diisi dari Identitas Berdasarkan <b>Data Diri  </b> dari calon pengurus gereja.
            </div>
        </div>

        </div>
      </div>
    </section>

</div>
  @endsection