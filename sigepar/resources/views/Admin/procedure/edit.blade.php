@extends('Layout.Admin')
@section('content')
@section('title','SIGEPAR  | Ubah Data Procedure Gereja')
            
<div class="content-wrapper" style="min-height: 2171.6px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Procedure Gereja</a></li>
              <li class="breadcrumb-item active">Ubah Procedure Gereja</li>
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
              <h3 class="card-title"> Form Ubah Data  Procedure HKI Parsoburan</h3>
            </div>
            <div class="card-body">
              <!-- Minimal style -->
              <div class="row">
                <div class="col-sm-12">
                    {{-- form tambah data jemaat --}}
                             @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
              @endif

                  @if(session('success'))
                  <div class="alert alert-success" role="alert">
                      {{session('success')}}
                  </div>
                  @endif
                  
                    <form action="/procedure/{{$data->id}}/update/{{$id}}" method="POST" enctype="multipart/form-data">
                        {{@csrf_field()}}
                    <div class="form-group" {{$errors->has('judul_procedure')? 'hash-error':''}}>
                        <label for="exampleInputEmail1">Judul Procedure</label>
                        <input type="text" name="judul_procedure" class="form-control" id="exampleInputEmail1" placeholder="Judul Procedure" value="{{$data->judul_procedure}}">
                        @if($errors->has('judul_procedure'))
                        <span class="help-block">{{$errors->first('judul_procedure')}}</span>
                        @endif
                      </div>

      
   
                      <div class="form-group" >
                        <label for="quotes">Isi</label>
                       <textarea class="form-control"  id="quotes" name="isi" >{{$data->isi}} </textarea>
                      </div>
                   <button type="submit" class="btn btn-success btn-block">Ubah Data Procedure</button>
                   </div>
                   
                        
                    </form>
                     </div>
                        <!-- /.card-body -->
                 </div>
            </div>
            </div>
                    <!-- /.card-body -->
         
        </div>

        </div>
      </div>
    </section>

</div>
  @endsection