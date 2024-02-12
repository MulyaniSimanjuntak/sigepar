@extends('Layout.Admin')
@section('content')
@section('title','SIGEPAR  | Data Jemaat')



<div class="content-wrapper" style="min-height: 1302.12px;">
    
 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Procedure</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item "><a href="Dashboard">Dashboard</a></li>
              <li class="breadcrumb-item active"><a href="Dashboard">Data Procedure</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <a href="{{url('/procedure/tambah/' . $id)}}" class="btn btn-sm bg-success">
                    <i class="fas fa-users fas-sm"></i> Tambah Data Procedure
                  </a>
               
                <div class="card-tools">
                  <form action="/procedure/{{$id}}/index" method="GET">
                  <div class="input-group input-group-sm" style="width: 150px;" >                  
                    <input type="text" name="cari" class="form-control float-right" placeholder="Search" >
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </form>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 500px;">
       
              
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

                <table class="table table-head-fixed text-nowrap">
                  <thead text='center'>
                    <tr >
                      <th>No</th>
                      <th>Tema </th>
                      <th>Judul </th>
                      <th>Isi </th>
                      <th>Action</th>
                    </tr>
                   
                  </thead>
                  <tbody>
                    @if($data == null) 
                    <tr> 
                      <td colspan="5" rowspan="5">Tidak Ada data</td>
                    </tr>
                    @endif

                    @if ($data != null )
                    <tr>
                      @foreach ($data as $jemaat)
                        <td>{{$loop->iteration}}</td>
                        <td>{{$jemaat->worship->tema}}</td>
                        <td>{{$jemaat->judul_procedure}}</td>
                        <td>{{  Str::words($jemaat->isi, 5, ' ...')}}</td>                                
                        <td> 
                            <a href="/procedure/{{$jemaat->id}}/edit/{{$id}}" class="btn btn-warning btn-sm"><i class="fa-solid fa-user-pen"></i></a>
                      
                            <a href="/procedure/{{$jemaat->id}}/delete/{{$id}}" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda Akan Menghapus Data Jemaat Ini?')"><i class="fa-solid fa-trash-can"></i></a>
                        </td>

                    </tr>
                    @endforeach
                    @endif
                   

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
  
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>


  

  @endsection