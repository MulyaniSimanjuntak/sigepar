@extends('Layout.Jemaat')
@section('content')
@section('title','SIGEPAR  | Dashboard Jemaat')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard Jemaat HKI Resort Parsoburan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
   <div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                <h3>{{$data['jumlah_jemaat']}}</h3>
  
                  <p>Jemaat</p>
                </div>
                <div class="icon">
                    <i class="nav-icon fas fa-solid fa-church"></i>
                </div>
                <a href="/Data_Jemaat" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>{{$data['jumlah_pengumuman']}}<sup style="font-size: 20px"></sup></h3>
  
                  <p>Announcement</p>
                </div>
                <div class="icon">
                    <i class="nav-icon fas fa-copy"></i>
                </div>
                <a href="/pengumuman" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3>{{$data['jlh_worship']}}</h3>
  
                  <p>Worship Procedure</p>
                </div>
                <div class="icon">
                    <i class='fas fa-praying-hands'></i>
                </div>
                <a href="/worshipProcedure" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3>{{$data['jlh_gallery']}}</h3>
  
                  <p>Galery</p>
                </div>
                <div class="icon">
                    <i class="nav-icon far fa-image"></i>
                </div>
                <a href="/gallery" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>

    
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  @endsection