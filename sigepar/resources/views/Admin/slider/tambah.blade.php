@extends('Layout.Admin')
@section('content')
@section('title','SIGEPAR  | Tambah Slider')
            
<div class="content-wrapper" style="min-height: 2171.6px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Slider</a></li>
              <li class="breadcrumb-item active">Tambah Slider</li>
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
              <h3 class="card-title"> Form Tambah Data  Slider HKI Parsoburan</h3>
            </div>
            <div class="card-body">
              <!-- Minimal style -->
              <div class="row">
                <div class="col-sm-12">
                    {{-- form tambah data jemaat --}}
                    <form action="/sliderCreate" method="POST" enctype="multipart/form-data">
                        {{@csrf_field()}}          


                    <div class="form-group" {{$errors->has('nama_slider')? 'hash-error':''}}>
                        <label for="exampleInputEmail1">Nama Slider</label>
                        <input type="text" name="nama_slider" class="form-control" id="exampleInputEmail1" placeholder="Nama Album" value="{{old('nama_slider')}}">
                        @if($errors->has('nama_slider'))
                        <span class="help-block">{{$errors->first('nama_slider')}}</span>
                        @endif
                      </div>

                                      
                    <div class="form-group">
                      <label for="exampleInputFile">Slider</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="image_slider"  id="exampleInputFile">
                          <label class="custom-file-label" for="exampleInputFile"></label>
                        </div>                   
                      </div>
                    </div> 

          
                        <button type="submit" class="btn btn-primary btn-block">Tambahkan Data Slider</button>   
                    </form>     
              </div>
                 
            </div>
           
        </div>

        </div>
      </div>
    </section>

</div>
  @endsection