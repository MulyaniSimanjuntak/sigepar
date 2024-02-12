@extends('Layout.Admin')
@section('content')
@section('title','SIGEPAR | Data Keuangan')
<div class="content-wrapper" style="min-height: 2171.6px;">
<section class="content">
    <div class="container-fluid">


        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Table Data Keuangan Jemaat HKI</h3> <br>
                  <a href="{{url('/keuanganTambah')}}" class="btn btn-sm bg-success">
                      <i class="fas fa-users fas-sm"></i> Tambah Data Keuangan
                    </a>
                 
                  <div class="card-tools">
                    <form action="/Data_Jemaat" method="GET">
                    <div class="input-group input-group-sm" style="width: 150px;">
                    
                      <input type="text" name="cari" class="form-control float-right" placeholder="Search">
  
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
                        <th>Nama </th>
                        <th>Tanggal</th>
                        <th>Jumlah</th>
                        <th>Keterangan</th>
                        <th>Action</th>
                      </tr>
                     
                    </thead>
                    <tbody>
                       @foreach ($data as $value)
                      <tr>
                        <td>    {{$loop->iteration}}</td>
                        <td>    {{$value->nama}}</td>
                        <td>    {{$value->tanggal}}</td>
                        <td>    {{$value->jumlah}}</td>
                        <td>    {{$value->keterangan}}</td>
                           <td> 
                            <a href="/keuangan/{{$value->id}}/edit" class="btn btn-warning btn-sm"><i class="fa-solid fa-user-pen"></i></a>                     
                             <a href="/keuangan/{{$value->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda Akan Menghapus Data Gallery Ini?')"><i class="fa-solid fa-trash-can"></i></a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>



    </div>
</section>
</div>

@endsection