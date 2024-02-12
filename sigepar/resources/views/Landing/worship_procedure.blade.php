@extends('Layout.Landing_layout')
@section('title','SIGEPAR|Worship Procedures')
@section('content')
   

    <!-- End Hero -->
<!-- ==Tata Ibadah & Statisktik Keuangan-->

<section class="d-flex flex-column justify-content-center align-items-center testimonials section-bg" style="margin-top:15px;">
<section id="services" class="services section-bg">
    <div class="container">
        <div class="section-title">
            <h2>Worship Procedures</h2>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="icon-box">
                    <i class="bi bi-briefcase"></i>
                    <h4>Tata Ibadah</h4>
                    <!-- Default dropend button -->
                    <div class="row icon-boxes">
                        <div class="col-md-4">
                            <table class="table" border="1" style="height:100px;" >
                                <thead>
                                  <tr align="center">
                                    <td colspan="2"">{{$worship->judul}}</td>
                                  </tr>
                                </thead>
                                <tbody >
                                  <tr align="center">
                                    <td>
                                        <text>
                                            <b>{{$worship->hari}}</b>
                                        </text>
                                    </td>
                                  </tr>
                                  <tr align="center">
                                      <td>
                                        <text>
                                            <b>{{$worship->tanggal}} </b>
                                        </text>
                                      </td>
                                  </tr>
                                  <tr align="center">
                                    <td colspan="2">
                                      <b>Tema</b><br>
                                      <span>{{$worship->tema}}</span>
                                    </td>
                                  </tr>
                                  
                                </tbody>
                              </table> 
                        </div>
                        <div class="col-md-8 mt-4 mt-md-0">
                            <ol>
                                @foreach ($procedure as $value)
                                  <li>
                                   <td>
                                    <div class="btn-group dropend">
                                        <button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            <span>{{$value->judul_procedure}}</span>
                                        </button>
                                        <ul class="dropdown-menu" style="width:200px;background-color:ivory" background-color>
                                            <text>
                                             {{$value->isi}}
                                            </text>
                                        </ul>
                                      </div>
                                   </td>
                                  </li>
                                  @endforeach
                                  
                                  
                                </ol>
                        </div>
                    </div>
                   
   </div>
            </div>
            <div class="col-md-6 mt-4 mt-lg-0">
                <div class="icon-box">
                    <i class="bi bi-card-checklist card"></i>
                    <h4>Statistik Keuangan</h4>
                          <div class="card-header">
                            <!-- <span><small><b>Data Pemasukan Gereja Minggu 12-Mei-2022</b></small></span>     -->
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body table-responsive p-0" style="height: 300px;">
                            <table class="table table-head-fixed text-nowrap">
                              <thead>
                                <tr>
                                  <th>Nomor</th>
                                  <th>Nama</th>
                                  <th>Tanggal</th>
                                  <th>Jumlah</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($keuangan as $key)
                                <tr>
                                  <td> {{$loop->iteration}}</td>
                                  <td>{{$key->nama}}</td>
                                  <td>{{$key->tanggal}}</td>
                                  <td><span ><small><b>Rp. </b></small>{{$key->jumlah}}</span></td>
                                </tr>
                                @endforeach                               
                              </tbody>
                                <tr>
                                <td colspan="4"  > <h3> Jumlah : Rp. {{$jlh_keuangan}} </h3>

                                </td>
                                </tr>
                              
                            </table>
                          </div>
                          <!-- /.card-body -->
                       
        
                </div>
            </div>
            
        </div>

    </div>
</section><!-- End Tata Ibadah Dan Statistika Keuangan -->
</section>

@endsection