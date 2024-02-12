@extends('Layout.Jemaat')
@section('content')
@section('title','SIGEPAR  | Edit Data Jemaat')
            
<div class="content-wrapper" style="min-height: 2171.6px;">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-success">
            <div class="card-header">
              <h3 class="card-title"> Data Profile {{ Auth::user()->nama}}</h3>
            </div>

         @if(session()->has('succes'))
            <div class="alert alert-success">
                {{ session()->get('succes') }}
            </div>
        @endif

     
        @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
        @endif

            <div class="card-body">
              <!-- Minimal style -->
              <div class="row">
                <div class="col-sm-6">
                    {{-- form tambah data jemaat --}}
                    <form action="/updateUserByID" method="POST" enctype="multipart/form-data">
                        {{@csrf_field()}}
                    <div class="form-group" {{$errors->has('nama')? 'hash-error':''}}>
                        <label for="exampleInputEmail1">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Nama Lengkap" value="{{old('nama',$jemaat->nama)}}">
                        @if($errors->has('nama'))
                        <span class="help-block">{{$errors->first('nama')}}</span>
                        @endif
                      </div>
                      <div class="form-group" {{$errors->has('jenis_kelamin')? 'hash-error':''}}>
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" data-select2-id="17" tabindex="-1" aria-hidden="true">
                          <option data-select2-id="19" selected>Pilih Jenis Kelamin</option>
                          <option value="Laki-laki"
                              @if($jemaat->jenis_kelamin == 'Laki-laki') selected @endif{{(old('jenis_kelamin')=='Laki-laki')?'selected':'' }} >Laki-laki
                            </option>
                          <option value="Perempuan"
                          @if($jemaat->jenis_kelamin == 'Perempuan') selected @endif{{(old('jenis_kelamin')=='Perempuan')?'selected':'' }}>Perempuan
                        </option>
                          <option value="Lainnya"
                          @if($jemaat->jenis_kelamin == 'Lainnya') selected @endif{{(old('jenis_kelamin')=='Lainnya')?'selected':'' }}>Lainnya
                          </option>
                        </select>
                      </div>
                      <div class="form-group" {{$errors->has('keluarga')? 'hash-error':''}}>
                        <label for="keluarga"> Keluarga </label>
                        <input type="text"  name="keluarga" class="form-control" id="keluarga" placeholder="Nama Keluarga" value="{{old('keluarga',$jemaat->keluarga)}}">
                        @if($errors->has('keluarga'))
                        <span class="help-block">{{$errors->first('keluarga')}}</span>
                        @endif
                      </div>
                      <div class="form-group" >
                        <label for="alamat">Alamat</label>
                       <textarea class="form-control"  id="alamat" name="alamat" >{{$jemaat->alamat}} </textarea>
                      </div>
                      <div class="form-group" {{$errors->has('no_hp')? 'hash-error':''}}>
                        <label for="no_hp"> Nomor Hp/Kontak Jemaat</label>
                        <div class="input-group mb-3">   
                            <div class="input-group-prepend">
                              <span class="input-group-text">+62</span>
                            </div>
                            <input type="text" name="no_hp" class="form-control" placeholder="Masukkan Kontak Jemaat" value="{{old('no_hp',$jemaat->no_hp)}}">
                            @if($errors->has('no_hp'))
                            <span class="help-block">{{$errors->first('no_hp')}}</span>
                            @endif
                          </div>
                      </div>
                      <div class="form-group" {{$errors->has('tgl_lahir')? 'hash-error':''}}>
                        <label for="tgl_lahir"> Tanggal Lahir </label>
                        <input type="date"  name="tgl_lahir" class="form-control" id="tgl_lahir" placeholder="Tanggal Lahir" value="{{old('tgl_lahir',$jemaat->tgl_lahir)}}">
                        @if($errors->has('tgl_lahir'))
                        <span class="help-block">{{$errors->first('tgl_lahir')}}</span>
                        @endif
                      </div>
                      <div class="form-group" {{$errors->has('tgl_bergabung')? 'hash-error':''}}>
                        <label for="tgl_bergabung"> Tanggal Bergabung </label>
                        <input type="date"  name="tgl_bergabung" class="form-control" id="tgl_bergabung" placeholder="Tanggal Bergabung" value="{{old('tgl_bergabung',$jemaat->tgl_bergabung)}}">
                        @if($errors->has('tgl_bergabung'))
                        <span class="help-block">{{$errors->first('tgl_bergabung')}}</span>
                        @endif
                      </div>
                      <div class="form-group" {{$errors->has('status')? 'hash-error':''}}>
                        <label>Status</label>
                        <select name="status" class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" data-select2-id="17" tabindex="-1" aria-hidden="true">
                          <option selected>Status Jemaat</option>
                          <option value="Aktif"
                          @if($jemaat->status == 'Aktif') selected @endif {{(old('status')=='Aktif')?'selected':'' }}>Aktif
                        </option>
                          <option value="Non Aktif"
                          @if($jemaat->status == 'Non Aktif') selected @endif{{(old('status')=='Non Aktif')?'selected':'' }}>Non Aktif</option>
                        </select>
                      </div>

              </div>
                    <div class="col-sm-4">
                    <div class="card card-primary card-outline" {{$errors->has('avatar')? 'hash-error':''}}>
                        <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="{{$jemaat->getAvatar()}}" alt="Jemaat profile picture">
                        </div>
        
                        <h3 class="profile-username text-center">Foto Jemaat</h3>
        
                        <p class="text-muted text-center">Foto Tidak Harus Ditambahkan</p>
        
                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                            <b>Ganti Foto</b><div class="custom-file">
                        <input type="file" name="avatar" class="custom-file-input" id="customFile" value="{{old('avatar',$jemaat->avatar)}}">
                        @if($errors->has('avatar'))
                        <span class="help-block">{{$errors->first('avatar')}}</span>
                        @endif
                          <label class="custom-file-label" for="customFile">Choose file</label>
                         </div></a>
                           </li>
                      </ul>
                      <button type="submit" class="btn btn-warning btn-block">UpdateData</button>
                        
                    </form>
                        {{-- end form tambah data jemaat  --}}
                     </div>
                        <!-- /.card-body -->
                 </div>
            </div>
            </div>
                    <!-- /.card-body -->
            <div class="card-footer">
                Data Dapat Diisi dari Identitas Berupa <b>Kartu Keluarga,KTP </b> dan sebagainya.
            </div>
        </div>



        </div>
      </div>
    </section>

</div>

        
  


  @endsection