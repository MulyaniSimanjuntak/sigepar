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
              <li class="breadcrumb-item"><a href="#"></a></li>
              <li class="breadcrumb-item active">Tambah </li>
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
              <h3 class="card-title"> Form Tambah Data   HKI Parsoburan</h3>
            </div>
            <div class="card-body">

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
            
            
              <!-- Minimal style -->
              <div class="row">
                <div class="col-sm-12">
                    {{-- form tambah data jemaat --}}
                    <form action="/keuanganCreate" method="POST" enctype="multipart/form-data">
                        {{@csrf_field()}}

                      <div class="form-group" {{$errors->has('nama')? 'hash-error':''}}>
                        <label for="exampleInputEmail1">Nama</label>
                        <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Nama Lengkap" value="{{old('nama_lengkap')}}">
                        @if($errors->has('nama'))
                        <span class="help-block">{{$errors->first('nama')}}</span>
                        @endif
                      </div>

                      <div class="form-group" {{$errors->has('tanggal')? 'hash-error':''}}>
                        <label for="tanggal"> Tanggal  </label>
                        <input type="date"  name="tanggal" class="form-control" id="tanggal" placeholder="Tanggal  Sebagai Pengurus Gereja" value="{{old('tanggal')}}">
                        @if($errors->has('tanggal'))
                        <span class="help-block">{{$errors->first('tanggal')}}</span>
                        @endif
                      </div>


                    <div class="form-group" {{$errors->has('jumlah')? 'hash-error':''}}>
                        <label for="exampleInputEmail1">Jumlah</label>
                        <input type="number" name="jumlah" class="form-control" id="exampleInputEmail1" placeholder="Jumlah" value="{{old('nama_lengkap')}}">
                        @if($errors->has('jumlah'))
                        <span class="help-block">{{$errors->first('jumlah')}}</span>
                        @endif
                      </div>

                       <div class="form-group" >
                        <label for="quotes">Keterangan</label>
                       <textarea class="form-control"  id="quotes" name="keterangan" > </textarea>
                      </div>  

                        <button type="submit" class="btn btn-primary btn-block">Tambahkan Data </button>   
                    </form>     
              </div>
                 
            </div>
           
        </div>

        </div>
      </div>
    </section>

</div>
  @endsection