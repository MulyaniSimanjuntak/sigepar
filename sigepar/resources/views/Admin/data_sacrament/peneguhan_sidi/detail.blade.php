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
              <li class="breadcrumb-item"><a href="#">Data Sacrament</a></li>
              <li class="breadcrumb-item"><a href="#">Peneguhan Sidi</a></li>
              <li class="breadcrumb-item active">Detail Peneguhan Sidi</li>
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
              <h3 class="card-title"> Detail Data Pendaftaran Peneguhan Sidi</h3>
            </div>
            <div class="card-body">
              <!-- Minimal style -->
              <div class="row">
                <div class="col-sm-6">
                  <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Data Orang Tua</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <strong><i class="fas fa-book mr-1"></i> Nama Ayah</strong>
                      <p class="text-muted">{{$data->nama_ayah}}</p>
                      <hr>
                      <strong><i class="fas fa-mars-and-venus mr-1"></i> Nama Ibu</strong>
                      <p class="text-muted">{{$data->ibu}}</p>
                      <hr>
                      <strong><i class="fas fa-file mr-1"></i> Lampiran Kartu Keluarga</strong>
                             <div class="text-center">
                             <img height="50" width="50" src="{{asset('fileweb/' . $data->kk)}}" class="rounded" alt="...">
                          </div>
                      <hr>
                      <strong><i class="fas fa-check mr-1"></i> Tanggal Resmi Menjadi Jemaat HKI</strong>
                      <p class="text-muted">{{$data->tgl_resmi_jemaat}}</p>
                      <hr>
                     
                    </div>
                    <!-- /.card-body -->
                  </div>

              </div>
              <div class="col-sm-6">
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Data Anak Yang Mengikuti Peneguhan Sidi</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <strong><i class="fas fa-book mr-1"></i> Nama Lengkap</strong>
                    <p class="text-muted">
                    {{$data->nama_sidi}}
                    </p>
                    <hr>
                    <strong><i class="fas fa-mars-and-venus mr-1"></i> Jenis Kelamin</strong>
                    <p class="text-muted">{{$data->jk_sidi}}</p>
                    <hr>
                    <strong><i class="fas fa-calendar-days mr-1"></i> Tanggal lahir</strong>
                    <p class="text-muted">{{$data->tgl_lahir}}</p>
                    <hr>
                    <strong><i class="fas fa-calendar-days mr-1"></i> Tanggal Dibaptis</strong>
                    <p class="text-muted">{{$data->tgl_babtis_sidi}}</p>
                    <hr>
                    <strong><i class="fas fa-file mr-1"></i> Lampiran Surat Baptis</strong>
                    
                            <div class="text-center">
                             <img height="50" width="50" src="{{asset('fileweb/' . $data->lampiran)}}" class="rounded" alt="...">
                          </div>

                    <hr>
                   
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


        </div>
      </div>
    </section>

</div>

        
  


  @endsection