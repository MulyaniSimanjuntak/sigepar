@extends('Layout.Admin')
@section('content')
@section('title','SIGEPAR  | Sakramen Baptis')

<div class="content-wrapper" style="min-height: 1302.12px;">
    
 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Sakramen</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item "><a href="Dashboard">Dashboard</a></li>
              <li class="breadcrumb-item ">Data Sakramen</li>
              <li class="breadcrumb-item active"><a href="Dashboard">Sakramen Baptis</a></li>
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
                <h3 class="card-title">Table Sakramen Baptis HKI</h3> <br>
                
               
                <div class="card-tools">
                  <form action="/Data_Jemaat" method="GET">
                  <div class="input-group input-group-sm" style="width: 150px;" >
                  
                    <input type="text" name="cari" class="form-control float-right" placeholder="Search" " >

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
                @if(session('sukses'))
                <div class="alert alert-success" role="alert">
                    {{session('sukses')}}
                </div>
                @endif
                <table class="table table-head-fixed text-nowrap">
                  <thead text='center'>
                    <tr >
                    <th>No</th>
                      <th>Nama Ayah</th>
                      <th>Nama Ibu</th>
                      <th>Nama Anak</th>
                      <th>Tanggal Lahir Anak</th>
                      <th>Lampiran</th>
                      <th>Action</th>
                    </tr>
                   
                  </thead>
                  <tbody>
                    @foreach ($data as $value)
                    <tr>
                        <td>1</td>
                        <td>{{$value->nama_ayah}}</td>
                        <td>{{$value->nama_ibu}}</td>
                        <td>{{$value->nama_anak}}</td>
                        <td>{{$value->user->tgl_lahir}}</td>
                        <td>
                            <div class="text-center">
                             <img height="50" width="50" src="{{asset('fileweb/' . $value->akte_nikah)}}" class="rounded" alt="...">
                          </div>
                        </td>
                        <td> 
                            <a href="/Sakramen_Baptis/detail/{{$value->id}}" class="btn btn-success btn-sm"><i class="nav-icon fas fa-book"></i>Detail</a> 
                        </td>
                      </tr>
                      @endforeach
                   

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