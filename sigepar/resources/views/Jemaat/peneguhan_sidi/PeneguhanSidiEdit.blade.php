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
              <li class="breadcrumb-item"><a href="#">Peneguhan Sidi</a></li>
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
              <h3 class="card-title">Pendaftaran Peneguhan Sidi</h3>
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
              <!-- Minimal style -->
            <form action="/peneguhanSidiCreate" method="POST" enctype="multipart/form-data">
               {{@csrf_field()}}

                  <div class="form-group">
                    <input type="hidden" name="id_user" class="form-control"  value="{{ Auth::user()->id }}" >
                  </div>


              <div class="row">
                <div class="col-sm-6">
                  <div class="card card-primary">

           

                    <div class="card-header">
                      <h3 class="card-title">Data Orang Tua</h3>
                    </div>
                    <!-- /.card-header -->
                    
                    <div class="card-body">
                      <strong><i class="fas fa-book mr-1"></i> Nama Ayah</strong>
                      
                      <div class="form-group" >
                       <input type="text" name="nama_ayah" class="form-control" value="{{$data->nama_ayah}}" id="exampleInputEmail1">                        
                      </div>
                      <hr>
                      <strong><i class="fas fa-mars-and-venus mr-1"></i> Nama Ibu</strong>
                        <div class="form-group" >
                       <input type="text" name="nama_ibu" class="form-control" value="{{$data->nama_ibu}}" id="exampleInputEmail1">                        
                      </div>
                      <hr>
                      <strong><i class="fas fa-file mr-1"></i> Lampiran Kartu Keluarga</strong>

                      <div class="text-center">
                        <img height="200" width="300" src="{{asset('fileweb/' . $data->kk)}}" class="rounded" alt="...">
                      </div>

                        <div class="form-group">
                            <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="kk" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>                   
                            </div>
                        </div> 
                      <hr>
                      <strong><i class="fas fa-check mr-1"></i> Tanggal Resmi Menjadi Jemaat HKI</strong>
                      <div class="form-group" >
                        <input type="date"  name="tgl_resmi_jemaat" class="form-control"  placeholder="Tanggal Resmi Jemaat HKI" value="{{$data->tgl_resmi_jemaat}}">                       
                      </div>
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
                      <div class="form-group" >
                       <input type="text" name="nama_sidi" class="form-control" value="{{$data->nama_sidi}}" id="exampleInputEmail1">                        
                      </div>
                    <hr>
                    <strong><i class="fas fa-mars-and-venus mr-1"></i> Jenis Kelamin</strong>

                    <div class="form-group">
                        <select name="jk_sidi" class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" data-select2-id="17" tabindex="-1" aria-hidden="true">
                          <option data-select2-id="19" selected>Pilih Jenis Kelamin</option>
                          <option value="Laki-laki">Laki-Laki</option>
                          <option value="Perempuan">Perempuan</option>                
                        </select>
                      </div>

                    <hr>
                    <strong><i class="fas fa-calendar-days mr-1"></i> Tanggal lahir</strong>
                      <div class="form-group" >
                        <input type="date"  name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir" value="{{$data->tgl_lahir}}">                       
                      </div>
                    <hr>
                    <strong><i class="fas fa-calendar-days mr-1"></i> Tanggal Dibaptis</strong>
                      <div class="form-group" >
                        <input type="date"  name="tgl_babtis_sidi" class="form-control"  placeholder="Tanggal Babtis" value="{{$data->tgl_babtis_sidi}}">                       
                      </div>
                    <hr>
                    <strong><i class="fas fa-file mr-1"></i> Lampiran Surat Baptis</strong>
                       <div class="text-center">
                        <img height="200" width="300" src="{{asset('fileweb/' . $data->lampiran)}}" class="rounded" alt="...">
                      </div>
                           <div class="form-group">
                            <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="lampiran" class="custom-file-input" id="exampleInputFile">
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
            <button type="submit" class="btn btn-success btn-block">Update Data Peneguhan Sidi</button>
          </div>
        </form>
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