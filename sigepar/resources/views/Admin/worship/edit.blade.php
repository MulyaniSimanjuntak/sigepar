@extends('Layout.Admin')
@section('content')
@section('title','SIGEPAR  | Tambah Data Worship Gereja')
            
<div class="content-wrapper" style="min-height: 2171.6px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Worship Gereja</a></li>
              <li class="breadcrumb-item active">Tambah Worship Gereja</li>
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
              <h3 class="card-title"> Form Tambah Data  Worship HKI Parsoburan</h3>
            </div>
            <div class="card-body">
              <!-- Minimal style -->
              <div class="row">
                <div class="col-sm-12">
                    <form action="/worshipEdit/{{$data->id}}" method="POST" enctype="multipart/form-data">
                        {{@csrf_field()}}
                    <div class="form-group" {{$errors->has('judul')? 'hash-error':''}}>
                        <label for="exampleInputEmail1">Judul</label>
                        <input type="text" name="judul" class="form-control" id="exampleInputEmail1" placeholder="Nama Lengkap" value="{{$data->judul}}">
                        @if($errors->has('judul'))
                        <span class="help-block">{{$errors->first('judul')}}</span>
                        @endif
                      </div>
                      <div class="form-group" {{$errors->has('hari')? 'hash-error':''}}>
                        <label for="hari">Hari</label>
                        <select name="hari" class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" data-select2-id="17" tabindex="-1" aria-hidden="true">
                          <option data-select2-id="19" selected>Pilih Hari</option>
                          <option value="Senin"{{(($data->hari)=='Senin')?'selected':'' }} >Senin</option>
                          <option value="Selasa"{{(($data->hari)=='Selasa')?'selected':'' }}>Selasa</option>
                          <option value="Rabu"{{(($data->hari)=='Rabu')?'selected':'' }}>Rabu</option>
                          <option value="Kamis"{{(($data->hari)=='Kamis')?'selected':'' }}>Kamis</option>
                          <option value="Jumat"{{(($data->hari)=='Jumat')?'selected':'' }}>Jumat</option>
                          <option value="Sabtu"{{(($data->hari)=='Sabtu')?'selected':'' }}>Sabtu</option>
                          <option value="Minggu"{{(($data->hari)=='Minggu')?'selected':'' }}>Minggu</option>
                        </select>
                      </div>
      
                      <div class="form-group" {{$errors->has('tanggal')? 'hash-error':''}}>
                        <label for="tanggal"> Tanggal  </label>
                        <input type="date"  name="tanggal" class="form-control" id="tanggal" placeholder="Tanggal Masuk Sebagai Worship Gereja" value="{{$data->tanggal}}">
                        @if($errors->has('tanggal'))
                        <span class="help-block">{{$errors->first('tanggal')}}</span>
                        @endif
                      </div>

                      <div class="form-group" {{$errors->has('is_active')? 'hash-error':''}}>
                        <label for="is_active">Is Active</label>
                        <select name="is_active" class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" data-select2-id="17" tabindex="-1" aria-hidden="true">
                          <option data-select2-id="19" selected>Pilih Untuk di tampilkan</option>
                          <option name="is_active" value="1"{{(($data->is_active)==1)?'selected':'' }} >Aktif</option>
                          <option name="is_active" value="0"{{(($data->is_active)==0)?'selected':'' }}>Tidak Aktif</option>
                        </select>
                      </div>
   
                      <div class="form-group" >
                        <label for="quotes">Tema</label>
                       <textarea class="form-control"  id="quotes" name="tema" > {{$data->tema}} </textarea>
                      </div>
                   <button type="submit" class="btn btn-success btn-block">Ubah Data Worship</button>
                   </div>
                   
                        
                    </form>
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