@extends('Layout.Landing_layout')
@section('title','SIGEPAR|Home')
@section('content')
<!-- ======= Hero Section ======= -->
<section class="d-flex flex-column justify-content-center align-items-center testimonials section-bg" style="margin-top:15px;">
        <div id="carouselExampleCaptions" class=" container carousel slide" data-bs-ride="carousel" >
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="">
                    <img src="assets/img/gereja.jpg" class="d-block w-100" alt="..." style="height:5%;">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Pengumuman Pertama</h5></a>
                        <p>Some representative placeholder content for the first slide.</p>
                    
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/img/gereja2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/img/dalamgereja.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
</div>
    <!-- End Hero -->
<!-- ==Tata Ibadah & Statisktik Keuangan-->
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



    <!-- ======= Data Jemaat  ======= -->
    <section id="counts" class="counts services section-bg ">
        <div class="container">
            <div class="section-title">
                <h2>Data Jemaat Gereja</h2>
                <p><b>Total Jemaat:</b><span></span></p>
                
            </div>
            <div class="row">

                <div class="col-lg-4 col-6">
                    <div class="count-box">
                        <i class="bi bi-emoji-smile"></i>
                        <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Anak-Anak</p>
                    </div>
                </div>

                <div class="col-lg-4 col-6">
                    <div class="count-box">
                        <i class="bi bi-journal-richtext"></i>
                        <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Dewasa(Laki-laki)</p>
                    </div>
                </div>

                <div class="col-lg-4 col-6 mt-5 mt-lg-0">
                    <div class="count-box">
                        <i class="bi bi-headset"></i>
                        <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Dewasa(Perempuan)</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Data Jemaat -->


    <!-- ======= Badan Pengurus Gereja ======= -->
    <section id="testimonials" class="testimonials section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Badan Pengurus Gereja</h2>
                <p>Huria Kristen Resort Parsoburan</p>
            </div>

            <div class="row">
                @foreach ($pengurus as $value)
                  <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                <img src="{{asset('fileweb/' . $value->avatar)}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$value->nama_pengurus}}</h5>
                 
                </div>
                </div>
                  </div>
                @endforeach

            </div>

         

        </div>
    </section><!-- End Badan Pengurus Gereja     -->

    {{-- <!-- ======= Sejarah Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <img src="assets/img/about.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <h3>Sejarah Gereja</h3>
                    <p>
                        Huria Kristen Indonesia (HKI) yaitu lahir, tumbuh, dan hidup dari dan oleh Firman Allah, dan menjadi
                        perwujudan persekutuan orang yang percaya kepada Allah Bapa, Anak-Nya Tuhan Yesus Kristus, dan Roh Kudus,
                        Allah yang Maha Esa. HKI merupakan bagian dari Gereja yang Kudus dan Am, yang terpanggil dan terpilih serta diutus
                        oleh Tuhan Yesus Kristus untuk penyataan tubuh-Nya di dunia ini. HKI merupakan perwujudan dan pertumbuhan dari hadirnya
                        Injil di tanah Batak yang disampaikan oleh penginjil yang diutus oleh Badan Zending RMG (Rheinische Mission Gesellschaft) dari negeri Jerman.
                    </p>
                    <div class="row icon-boxes">
                        <div class="col-md-6">
                            <i class="bx bx-receipt">Visi</i>
                            <h6>Menjadi Huria Yang</h6>
                            <ul>
                                <li><i class="bx bx-check bx-sm"></i>Kuat iMan</li>
                                <li><i class="bx bx-check bx-sm"></i>Misioner</li>
                                <li><i class="bx bx-check bx-sm"></i>Modern</li>
                                <li><i class="bx bx-check bx-sm"></i>Berdedikasi</li>
                            </ul>
                        </div>
                        <div class="col-md-6 mt-4 mt-md-0">
                            <i class="bx bx-cube-alt">Misi</i>
                            <h6>Menjadi Huria Yang Melaksanakan</h6>
                            <ul>
                                <li><i class="bx bx-check bx-sm"></i>Tugas Marturia (Kesaksian)</li>
                                <li><i class="bx bx-check bx-sm"></i>Tugas Koinonia (Persekutuan)</li>
                                <li><i class="bx bx-check bx-sm"></i>Tugas Diakonia (Pelayanan)</li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End SejarahSection --> --}}

 





    <!-- ======= Galery Section ======= -->
    <section id="portfolio" class="portfolio services section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Galery</h2>
            </div>



            <div class="row portfolio-container">
                  @foreach ($gallery as $value)
                <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="{{asset('fileweb/' . $value->image_gallery)}}" class="img-fluid" alt="">
                            <a href="{{asset('fileweb/' . $value->image_gallery)}}" data-gallery="portfolioGallery" class="link-preview portfolio-lightbox" title="Preview"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
                        </figure>

                        <!-- <div class="portfolio-info">
                            <h4><a href="portfolio-details.html">Perayaan Ulang Tahun HKI</a></h4>
                            <p>Dalam rangka merayakan Ulang tahun HKI yang ke 19 maka ....</p>
                        </div> -->
                    </div>
                </div>
                @endforeach

             

            </div>

        </div>
    </section><!-- End Galery Section -->
    </main><!-- End #main -->
@endsection