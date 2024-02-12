@extends('Layout.Admin')
@section('content')
@section('title','SIGEPAR  | Detail Data Jemaat')
            
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
              <li class="breadcrumb-item"><a href="#">Curh Data</a></li>
              <li class="breadcrumb-item"><a href="#">Data Jemaat</a></li>
              <li class="breadcrumb-item active">Detail Data Jemaat</li>
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
              <h3 class="card-title"> Detail Data Jemaat</h3>
            </div>
            <div class="card-body">
              <!-- Minimal style -->
              <div class="row">
                <div class="col-sm-6">
                  <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Data pribadi</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <strong><i class="fas fa-book mr-1"></i> Nama Lengkap</strong>
                      <p class="text-muted">
                        {{$jemaat->nama_lengkap}}
                      </p>
                      <hr>
                      <strong><i class="fas fa-mars-and-venus mr-1"></i> Jenis Kelamin</strong>
                      <p class="text-muted">{{$jemaat->jenis_kelamin}}</p>
                      <hr>
                      <strong><i class="fas fa-users mr-1"></i> Keluarga</strong>
                      <p class="text-muted">{{$jemaat->keluarga}}</p>
                       <hr>
                      <strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat</strong>
                      <p class="text-muted">{{$jemaat->keluarga}}</p>
                      <hr>
                      <strong><i class="fas fa-message mr-1"></i> Kontak</strong>
                      <p class="text-muted">{{$jemaat->no_hp}}</p>
                      <hr>
                      <strong><i class="fas fa-calendar-days mr-1"></i> Tanggal lahir</strong>
                      <p class="text-muted">{{$jemaat->tanggal_lahir}}</p>
                      <hr>
                      <strong><i class="fas fa-check mr-1"></i> Tanggal resmi Menjadi Jemaat HKI</strong>
                      <p class="text-muted">{{$jemaat->tanggal_bergabung}}</p>
                      <hr>
                     
                    </div>
                    <!-- /.card-body -->
                  </div>

              </div>
                    <div class="col-sm-6">
                    <div class="card card-primary card-outline" >
                        <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="{{$jemaat->getAvatar()}}" alt="Jemaat profile picture">
                        </div>
        
                        <h3 class="profile-username text-center">Nama Jemaat</h3>
        
                        <p class="text-muted text-center"><b>Status:</b><span>{{$jemaat->status}}</span></p>
                        <strong><i class="fas fa-users mr-1"></i> Daftar Anggota Keluarga :</strong>
                        @foreach($keluarga as $datakeluarga)
                          <p style="margin-left: 50px;" class="text-muted"><i class="fas fa-user fa-sm"></i>  <b>{{$loop->iteration}}.</b>{{$datakeluarga->nama_lengkap}}</p>
                        <hr>
                    @endforeach
                        {{-- end form tambah data jemaat  --}}
                     </div>
                        <!-- /.card-body -->
                 </div>
            </div>
            </div>
                    <!-- /.card-body -->
            <div class="card-footer">
             <p>   Jika terdapat data yang tidak sesuai ,data dapat di <b>Ubah</b>                   
                 
            </div>
        </div>
        <a href="/DataJemaat/{{$jemaat->id}}/edit" style="width: 150px;position: absolute;margin-left:1450px;margin-top:690px;" class="btn btn-warning btn-block">Ubah Data</a>


        </div>
      </div>
    </section>

</div>

        
  


  @endsection