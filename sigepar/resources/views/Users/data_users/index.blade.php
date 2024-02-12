@extends('Layout.Admin')
@section('content')
@section('title','SIGEPAR  | Data Jemaat')

<div class="content-wrapper" style="min-height: 1302.12px;">
    
 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Users</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item "><a href="Dashboard">Dashboard</a></li>
              <li class="breadcrumb-item ">Data Users</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">        
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 500px;">

              <div class="card">

    
 
<div class="card-body">
<table class="table table-bordered">
<thead>
<tr>
<th style="width: 10px">#</th>
<th>Role</th>
<th>Nama</th>
<th style="width: 40px">Username</th>
</tr>
</thead>
<tbody>
     @foreach ($users as $value)
<tr> <td>{{$loop->iteration}}</td>
      <td>{{$value->role}}</td>
<td>
<div >{{$value->nama}}</div>
</div></td>
<td>{{$value->username}}</td>
</tr>
<tr>
  @endforeach

</tr>
</tbody>
</table>
</div>


</div>

             
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