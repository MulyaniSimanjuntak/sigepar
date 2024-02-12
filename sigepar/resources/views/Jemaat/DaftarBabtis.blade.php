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
                <h3 class="card-title">Daftar Babtis</h3>
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

                  @if(session('sukses'))
                  <div class="alert alert-success" role="alert">
                      {{session('sukses')}}
                  </div>
                  @endif

              <!-- /.card-header -->
              <!-- form start -->
               <form action="/daftarBabtis/create" method="POST" enctype="multipart/form-data">
                    {{@csrf_field()}}
                <div class="card-body">
                  <div class="form-group">
                    <input type="hidden" name="user_id" class="form-control" id="exampleInputEmail1" value="{{Auth::user()->id}}" >
                  </div>

                      <div class="form-group" >
                        <label for="alamat">Nama Ayah</label>
                       <input type="text" name="nama_ayah" class="form-control" id="exampleInputEmail1">
                        
                      </div>
                      <div class="form-group" >
                        <label for="alamat">Nama Ibu</label>
                       <input type="text" name="nama_ibu" class="form-control" id="exampleInputEmail1">
                        
                      </div>
                      <div class="form-group" >
                        <label for="alamat">Nama Anak</label>
                       <input type="text" name="nama_anak" class="form-control" id="exampleInputEmail1">
                        
                      </div>

                  
                  <div class="form-group">
                    <label for="exampleInputFile">Akte Nikah</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="akte_nikah"  id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>                   
                    </div>
                  </div>    

                  <div class="form-group">
                    <label for="exampleInputFile">KK</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="kk" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>                   
                    </div>
                  </div>               
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Daftar</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

       


        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>

</div>

@endsection

