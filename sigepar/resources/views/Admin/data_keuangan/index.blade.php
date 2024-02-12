@extends('Layout.Admin')
@section('content')
@section('title','SIGEPAR  | Data Pengumuman')



<div class="content-wrapper" style="min-height: 1302.12px;">
    
 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Pengumuman</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item "><a href="Dashboard">Dashboard</a></li>
              <li class="breadcrumb-item ">Curch Data</li>
              <li class="breadcrumb-item active"><a href="Dashboard">Data Pengumuman</a></li>
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
                <h3 class="card-title">Table Data Pengumuman HKI</h3> <br>
                <a href="{{url('/tambahPengumuman')}}" class="btn btn-sm bg-success">
                    <i class="fas fa-users fas-sm"></i> Tambah Data Pengumuman
                  </a>
               
                <div class="card-tools">
                  <form action="/pengumuman" method="GET">
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
                @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{session('success')}}
                </div>
                @endif
                <table class="table table-head-fixed text-nowrap">
                  <thead text='center'>
                    <tr >
                      <th>No</th>
                      <th>Tanggal </th>
                      <th>Judul Pengumuman</th>
                      <th>ISI</th>
                      <th>Action</th>
                    </tr>
                   
                  </thead>
                  <tbody>
                    <tr>
                      @foreach ($data_jemaat as $jemaat)
                        <td>{{$loop->iteration}}</td>
                        <td>{{$jemaat->tanggal}}</td>
                        <td>{{$jemaat->judul_pengumuman}}</td>
                        <td>{{$jemaat->isi}}</td>
                        <td> 
                            <a href="/pengumuman/{{$jemaat->id}}/edit" class="btn btn-warning btn-sm"><i class="fa-solid fa-user-pen"></i></a>
                            <a href="/pengumuman/{{$jemaat->id}}/detail" class="btn btn-success btn-sm"><i class="nav-icon fas fa-book"></i></a>
                             <a href="/pengumuman/delete/{{$jemaat->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda Akan Menghapus Data Pengumuman Ini?')"><i class="fa-solid fa-trash-can"></i></a>
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