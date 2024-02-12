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
              <li class="breadcrumb-item"><a href="#">Pernikahan</a></li>
              <li class="breadcrumb-item active">Detail Pernikahan</li>
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
              <h3 class="card-title"> Detail Data Pendaftaran Pernikahan</h3>
            </div>
            <div class="card-body">
              <!-- Minimal style -->
              <div class="row">
                <div class="col-sm-6">
                  <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Data Calon Pengantin Laki-laki</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <strong><i class="fas fa-book mr-1"></i> Nama Lengkap</strong>
                      <p class="text-muted">{{$data->nama_pria}}</p>
                      <hr>
                      <strong><i class="fas fa-mars-and-venus mr-1"></i> Tanggal Lahir</strong>
                      <p class="text-muted">{{$data->tgl_lahir_pria}}</p>
                      <hr>
                      <strong><i class="fas fa-mars-and-venus mr-1"></i> Tanggal Dibaptis</strong>
                      <p class="text-muted">{{$data->tgl_babtis_pria}}</p>
                      <hr>
                      <strong><i class="fas fa-mars-and-venus mr-1"></i> Tanggal Naik Sidi</strong>
                      <p class="text-muted">{{$data->tgl_sidi_pria}}</p>
                      <hr>
                      <strong><i class="fas fa-file mr-1"></i> Lampiran Surat Baptis</strong>
                      <div class="col-sm-6">
                      <img class="img-fluid" height="50" width="50" src="{{asset('fileweb/' . $data->lampiran_pria)}}" alt="Photo">
                      </div>
                       <hr>
                      <strong><i class="fas fa-file mr-1"></i> Lampiran Surat Naik Sidi</strong>
                         <div class="col-sm-6">
                      <img class="img-fluid" height="50" width="50" src="{{asset('fileweb/' . $data->sidi_pria)}}" alt="Photo">
                      </div>
                      <hr>
                      <strong><i class="fas fa-file mr-1"></i> Lampiran Surat Pernyataan Izin Orang Tua</strong>
                         <div class="col-sm-6">
                      <img class="img-fluid" height="50" width="50" src="{{asset('fileweb/' . $data->izin_ortu_pria)}}" alt="Photo">
                      </div>
                      <hr>
                      <strong><i class="fas fa-file mr-1"></i> Lampiran Surat Keterangan Jemaat</strong>
                         <div class="col-sm-6">
                      <img class="img-fluid" height="50" width="50" src="{{asset('fileweb/' . $data->lampiran_pria)}}" alt="Photo">
                      </div>
                      <hr>
                      <strong><i class="fas fa-file mr-1"></i> Lampiran Ijazah Pendidikan Terakhir</strong>
                         <div class="col-sm-6">
                      <img class="img-fluid" height="50" width="50" src="{{asset('fileweb/' . $data->ijzah_pria)}}" alt="Photo">
                      </div>
                      <hr>
                    </div>
                    <!-- /.card-body -->
                  </div>

              </div>
              <div class="col-sm-6">
                <div class="card card-primary">
                  <div class="card-header">
                  <h3 class="card-title">Data Calon Pengantin Perempuan</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <strong><i class="fas fa-book mr-1"></i> Nama Lengkap</strong>
                      <p class="text-muted">{{$data->nama_wanita}}</p>
                      <hr>
                      <strong><i class="fas fa-mars-and-venus mr-1"></i> Tanggal Lahir</strong>
                      <p class="text-muted">{{$data->tgl_lahir_wanita}}</p>
                      <hr>
                      <strong><i class="fas fa-mars-and-venus mr-1"></i> Tanggal Dibaptis</strong>
                      <hr>
                      <strong><i class="fas fa-mars-and-venus mr-1"></i> Tanggal Naik Sidi</strong>
                      <p class="text-muted">{{$data->tgl_sidi_wanita}}</p>
                      <hr>
                      <strong><i class="fas fa-file mr-1"></i> Lampiran Surat Baptis</strong>
                      <div class="col-sm-6">
                      <img class="img-fluid" height="50" width="50" src="{{asset('fileweb/' . $data->babtis_wanita)}}" alt="Photo">
                      </div>
                       <hr>
                      <strong><i class="fas fa-file mr-1"></i> Lampiran Surat Naik Sidi</strong>
                                               <div class="col-sm-6">
                      <img class="img-fluid" height="50" width="50" src="{{asset('fileweb/' . $data->sidi_wanita)}}" alt="Photo">
                      </div>
                      <hr>
                      <strong><i class="fas fa-file mr-1"></i> Lampiran Surat Pernyataan Izin Orang Tua</strong>
                                               <div class="col-sm-6">
                      <img class="img-fluid" height="50" width="50" src="{{asset('fileweb/' . $data->izin_ortu_wanita)}}" alt="Photo">
                      </div>
                      <hr>
                      <strong><i class="fas fa-file mr-1"></i> Lampiran Surat Keterangan Jemaat</strong>
                                               <div class="col-sm-6">
                      <img class="img-fluid" height="50" width="50" src="{{asset('fileweb/' . $data->lampiran_wanita)}}" alt="Photo">
                      </div>
                      <hr>
                      <strong><i class="fas fa-file mr-1"></i> Lampiran Ijazah Pendidikan Terakhir</strong>
                                               <div class="col-sm-6">
                      <img class="img-fluid" height="50" width="50" src="{{asset('fileweb/' . $data->ijzah_wanita)}}" alt="Photo">
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