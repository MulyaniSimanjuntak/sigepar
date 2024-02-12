@extends('Layout.Jemaat')
@section('content')
@section('title','SIGEPAR  | Detail Data Jemaat')
            
<div class="content-wrapper" style="min-height: 2171.6px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Data Sacrament</a></li>
              <li class="breadcrumb-item"><a href="#">Pernikahan</a></li>
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

                 @if ($errors->any())
            <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
            @endif

        @if(session()->has('succes'))
            <div class="alert alert-success">
                {{ session()->get('succes') }}
            </div>
        @endif


            <div class="card-body">
             <form action="/updatePernikahan" method="POST" enctype="multipart/form-data">
               {{@csrf_field()}}
              <!-- Minimal style -->
                <div class="form-group">
                    <input type="hidden" name="id" class="form-control"  value="{{$data->id }}" >
                  </div>

              <div class="row">
                <div class="col-sm-6">
                  <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Data Calon Pengantin Laki-laki</h3>
                    </div>
                    <!-- /.card-header -->
             
                    <div class="card-body">
                      <strong><i class="fas fa-book mr-1"></i> Nama Lengkap</strong>
                       <div class="form-group" >
                       <input type="text" name="nama_pria" class="form-control" value="{{$data->nama_pria}}" id="exampleInputEmail1">                        
                      </div>
                      <hr>
                      <strong><i class="fas fa-mars-and-venus mr-1"></i> Tanggal Lahir</strong>
                      <div class="form-group" >
                        <input type="date"  name="tgl_lahir_pria" class="form-control"  placeholder="Tanggal Resmi Jemaat HKI" value="{{$data->tgl_lahir_pria}}">                       
                      </div>
                      <hr>
                      <strong><i class="fas fa-mars-and-venus mr-1"></i> Tanggal Dibaptis</strong>
                      <div class="form-group" >
                        <input type="date"  name="tgl_babtis_pria" class="form-control"  placeholder="Tanggal Resmi Jemaat HKI" value="{{$data->tgl_babtis_pria}}">                       
                      </div>
                      <hr>
                      <strong><i class="fas fa-mars-and-venus mr-1"></i> Tanggal Naik Sidi</strong>
                     <div class="form-group" >
                        <input type="date"  name="tgl_sidi_pria" class="form-control"  placeholder="Tanggal Resmi Jemaat HKI" value="{{$data->tgl_sidi_pria}}">                       
                      </div>
                      <hr>
                      <strong><i class="fas fa-file mr-1"></i> Lampiran Surat Baptis</strong>
                      <div class="col-sm-6">
                      <img class="img-fluid" height="200" width="200" src="{{asset('fileweb/' . $data->lampiran_pria)}}" alt="Photo">
                      </div>
                           <div class="form-group">
                            <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="lampiran_pria" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>                   
                            </div>
                        </div> 
                       <hr>
                      <strong><i class="fas fa-file mr-1"></i> Lampiran Surat Naik Sidi</strong>
                    <div class="col-sm-6">
                      <img class="img-fluid" height="200" width="200" src="{{asset('fileweb/' . $data->sidi_pria)}}" alt="Photo">
                      </div>
                           <div class="form-group">
                            <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="sidi_pria" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>                   
                            </div>
                        </div> 
                      <hr>
                      <strong><i class="fas fa-file mr-1"></i> Lampiran Surat Pernyataan Izin Orang Tua</strong>
                                          <div class="col-sm-6">
                      <img class="img-fluid" height="200" width="200" src="{{asset('fileweb/' . $data->izin_ortu_pria)}}" alt="Photo">
                      </div>
                           <div class="form-group">
                            <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="izin_ortu_pria" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>                   
                            </div>
                        </div> 
                      <hr>
                      <strong><i class="fas fa-file mr-1"></i> Lampiran Surat Keterangan Jemaat</strong>  <div class="col-sm-6">
                      <img class="img-fluid" height="200" width="200" src="{{asset('fileweb/' . $data->surat_jemaat_pria)}}" alt="Photo">
                      </div>
                        <div class="form-group">
                            <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="surat_jemaat_pria" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>                   
                            </div>
                        </div> 
                      <hr>
                      <strong><i class="fas fa-file mr-1"></i> Lampiran Ijazah Pendidikan Terakhir</strong>
                      <div class="col-sm-6">
                      <img class="img-fluid" height="200" width="200" src="{{asset('fileweb/' . $data->ijazah_pria)}}" alt="Photo">
                      </div>
                                            <div class="form-group">
                            <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="ijazah_pria" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>                   
                            </div>
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
                       <div class="form-group" >
                       <input type="text" name="nama_wanita" class="form-control" value="{{$data->nama_wanita}}" id="exampleInputEmail1">                        
                      </div>
                      <hr>
                      <strong><i class="fas fa-mars-and-venus mr-1"></i> Tanggal Lahir</strong>
                     <div class="form-group" >
                        <input type="date"  name="tgl_lahir_wanita" class="form-control"  placeholder="Tanggal Resmi Jemaat HKI" value="{{$data->tgl_lahir_wanita}}">                       
                      </div>
                      <hr>
                      <strong><i class="fas fa-mars-and-venus mr-1"></i> Tanggal Dibaptis</strong>
                      <div class="form-group" >
                      <input type="date"  name="tgl_babtis_wanita" class="form-control"  placeholder="Tanggal Resmi Jemaat HKI" value="{{$data->tgl_babtis_wanita}}">                       
                    </div>
                      <hr>
                      <strong><i class="fas fa-mars-and-venus mr-1"></i> Tanggal Naik Sidi</strong>
                                         <div class="form-group" >
                        <input type="date"  name="tgl_sidi_wanita" class="form-control"  placeholder="Tanggal Resmi Jemaat HKI" value="{{$data->tgl_sidi_wanita}}">                       
                      </div>
                      <hr>
                      <strong><i class="fas fa-file mr-1"></i> Lampiran Surat Baptis</strong>
                  <div class="col-sm-6">
                      <img class="img-fluid" height="200" width="200" src="{{asset('fileweb/' . $data->lampiran_wanita)}}" alt="Photo">
                      </div>
                                <div class="form-group">
                            <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="lampiran_wanita" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>                   
                            </div>
                        </div> 
                       <hr>
                      <strong><i class="fas fa-file mr-1"></i> Lampiran Surat Naik Sidi</strong>
                      <div class="col-sm-6">
                      <img class="img-fluid" height="200" width="200" src="{{asset('fileweb/' . $data->sidi_wanita)}}" alt="Photo">
                      </div>
                            <div class="form-group">
                            <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="sidi_wanita" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>                   
                            </div>
                        </div> 
                      <hr>
                      <strong><i class="fas fa-file mr-1"></i> Lampiran Surat Pernyataan Izin Orang Tua</strong>
                      <div class="col-sm-6">
                      <img class="img-fluid" height="200" width="200" src="{{asset('fileweb/' . $data->izin_ortu_wanita)}}" alt="Photo">
                      </div>
                          <div class="form-group">
                            <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="izin_ortu_wanita" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>                   
                            </div>
                        </div>
                      <hr>
                      <strong><i class="fas fa-file mr-1"></i> Lampiran Surat Keterangan Jemaat</strong>
                      <div class="col-sm-6">
                      <img class="img-fluid" height="200" width="200" src="{{asset('fileweb/' . $data->surat_jemaat_wanita)}}" alt="Photo">
                      </div>
                          <div class="form-group">
                            <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="surat_jemaat_wanita	" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>                   
                            </div>
                        </div>
                      <hr>
                      <strong><i class="fas fa-file mr-1"></i> Lampiran Ijazah Pendidikan Terakhir</strong>
                      <div class="col-sm-6">
                      <img class="img-fluid" height="200" width="200" src="{{asset('fileweb/' . $data->ijazah_wanita)}}" alt="Photo">
                      </div>
                    <div class="form-group">
                            <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="ijazah_wanita" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>                   
                            </div>
                        </div>
                      <hr>
                    </div>
                    <!-- /.card-body -->
                  </div>

            </div>
            </div>

            <div class="col-12">
            <button type="submit" class="btn btn-success btn-block">Udate data Pernikahan</button>
           </div>
                    <!-- /.card-body -->
            <div class="card-footer">
             <p>   Jika terdapat data yang tidak sesuai ,data dapat di <b>Ubah</b>                   
                 
            </div>
             </form>
        </div>


        </div>
      </div>
    </section>

</div>

        
  


  @endsection