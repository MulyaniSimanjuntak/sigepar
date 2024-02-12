@extends('Layout.Jemaat')
@section('content')
@section('title','SIGEPAR  | Dashboard Jemaat')

<div class="content-wrapper" style="min-height: 2646.44px;">

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Permohonan Babtis</h3>
              </div>


              <!-- /.card-header -->
              <!-- form start -->
               <form action="/daftarBabtis/create" method="POST" enctype="multipart/form-data">
                <div class="card-body">

                      <div class="form-group" >
                        <label for="alamat">Nama Ayah</label>
                       <input type="text" name="nama_ayah" class="form-control" value="{{$data->nama_ayah}}" id="exampleInputEmail1">                        
                      </div>
                      <div class="form-group" >
                        <label for="alamat">Nama Ibu</label>
                       <input type="text" name="nama_ibu" class="form-control" value="{{$data->nama_ibu}}"  id="exampleInputEmail1">
                        
                      </div>
                      <div class="form-group" >
                        <label for="alamat">Nama Anak</label>
                       <input type="text" name="nama_anak" value="{{$data->nama_anak}}" class="form-control" id="exampleInputEmail1">
                        
                      </div>
               
                  <div class="form-group">
                    <label for="exampleInputFile">Akte Nikah</label>
                    <div class="col-sm-6">
                          <img class="img-fluid" src="{{asset('fileweb/' . $data->akte_nikah)}}" alt="Photo">
                    </div>
                    
        
                  </div>               
                  <div class="form-group">
                    <label for="exampleInputFile">KK</label>
                     <div class="col-sm-6">
                          <img class="img-fluid" src="{{asset('fileweb/' . $data->kk)}}" alt="Photo">
                    </div>
                  </div>               
                </div>
                <!-- /.card-body -->

              </form>
            </div>
            <!-- /.card -->

       


        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>

</div>

@endsection

