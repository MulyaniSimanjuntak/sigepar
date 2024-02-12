@extends('Layout.Admin')
@section('content')
@section('title','SIGEPAR  | Tambah Data Procedure Gereja')
            
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
              <li class="breadcrumb-item active">Tambah Procedure Gereja</li>
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
              <h3 class="card-title"> Form Tambah Data  Procedure HKI Parsoburan</h3>
            </div>
            <div class="card-body">
              <!-- Minimal style -->
              <div class="row">
                <div class="col-sm-12">
                    {{-- form tambah data jemaat --}}
                    <form action="/procedure/create/{{$id}}" method="POST" enctype="multipart/form-data">
                        {{@csrf_field()}}
                    <div class="form-group" {{$errors->has('judul_procedure')? 'hash-error':''}}>
                        <label for="exampleInputEmail1">Judul Procedure</label>
                        <input type="text" name="judul_procedure" class="form-control" id="exampleInputEmail1" placeholder="Judul Procedure" value="{{old('judul_procedure')}}">
                        @if($errors->has('judul_procedure'))
                        <span class="help-block">{{$errors->first('judul_procedure')}}</span>
                        @endif
                      </div>

      
   
                      <div class="form-group" >
                        <label for="quotes">Isi</label>
                       <textarea class="form-control"  id="quotes" name="isi" > </textarea>
                      </div>
                   <button type="submit" class="btn btn-primary btn-block">Tambahkan Data Procedure</button>
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