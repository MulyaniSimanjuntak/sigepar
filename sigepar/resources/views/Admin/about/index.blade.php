@extends('Layout.Admin')
@section('content')
@section('title','SIGEPAR  | About')
            
<div class="content-wrapper" style="min-height: 2171.6px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Tentang Kami</a></li>
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
              <h3 class="card-title"> Tentang Kami</h3>
            </div>
            <div class="card-body">
              <!-- Minimal style -->

                      
                      @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
            @endif

            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            

              <div class="row">
                <div class="col-sm-12">
                    {{-- form tambah data jemaat --}}
                    <form action="/updateAbout" method="POST" enctype="multipart/form-data">
                        {{@csrf_field()}}

                     <div class="form-group" {{$errors->has('nama')? 'hash-error':''}}>
                        <label for="exampleInputEmail1">Nama</label>
                        <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Nama Lengkap" value="{{$data->nama}}">
                        @if($errors->has('nama'))
                        <span class="help-block">{{$errors->first('nama')}}</span>
                        @endif
                      </div>

                   

                           <div class="form-group">
                      <label for="exampleInputFile">Logo</label>
                       <div class="text-left">
                             <img height="100" width="100" src="{{asset('fileweb/' . $data->logo)}}" class="rounded" alt="...">
                          </div>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="logo"  id="exampleInputFile">
                          <label class="custom-file-label" for="exampleInputFile"></label>
                        </div>                   
                      </div>
                    </div> 

                      <div class="form-group" >
                        <label for="quotes">Sejarah</label>
                       <textarea class="form-control"  id="quotes" name="sejarah" >{{$data->sejarah}} </textarea>
                      </div>  
                        <button type="submit" class="btn btn-success btn-block">Ubah data</button>   
                    </form>     
              </div>
                 
            </div>
           
        </div>

        </div>
      </div>
    </section>

</div>
  @endsection