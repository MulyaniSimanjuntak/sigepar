@extends('Layout.Admin')
@section('content')
@section('title','SIGEPAR  | Tambah Data Pengurus Gerejaa')
            
<div class="content-wrapper" style="min-height: 2171.6px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Gallery</a></li>
              <li class="breadcrumb-item active">Tambah Gallery</li>
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
              <h3 class="card-title"> Form Tambah Data  Gallery HKI Parsoburan</h3>
            </div>
            <div class="card-body">
              <!-- Minimal style -->
              <div class="row">
                <div class="col-sm-12">
                  
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
            
                    {{-- form tambah data jemaat --}}
                    <form action="/galleryImageCreate/{{$id}}" method="POST" enctype="multipart/form-data">
                        {{@csrf_field()}}

          


                    <div class="form-group" >
                        <input type="hidden" name="id_album" class="form-control" id="exampleInputEmail1" placeholder="Nama Album" value="{{$id}}">
                    </div>

                    <div class="form-group" {{$errors->has('nama_gallery')? 'hash-error':''}}>
                        <label for="exampleInputEmail1">Nama Gallery</label>
                        <input type="text" name="nama_gallery" class="form-control" id="exampleInputEmail1" placeholder="Nama Gallery" value="{{old('nama_gallery')}}">
                        @if($errors->has('nama_gallery'))
                        <span class="help-block">{{$errors->first('nama_gallery')}}</span>
                        @endif
                      </div>

                                      
                    <div class="form-group">
                      <label for="exampleInputFile">Image Gallery</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="image_gallery"  id="exampleInputFile">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>                   
                      </div>
                    </div> 

          
                        <button type="submit" class="btn btn-primary btn-block">Tambahkan Image Gallery</button>   
                    </form>     
              </div>
                 
            </div>
           
        </div>

        </div>
      </div>
    </section>

</div>
  @endsection