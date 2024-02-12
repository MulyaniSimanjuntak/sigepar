@extends('Layout.Landing_layout')
@section('title','SIGEPAR|About')
@section('content')
     <!-- ======= Sejarah Section ======= -->
    <section id="about" class="about" style="margin-top: 100px;">
        <div class="container">
            <div class="section-title">
                <h2>Sejarah Gereja</h2>
                <p>Huria Kristen Resort Parsoburan</p>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <img src="assets/img/about.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <h3>Sejarah Gereja</h3>
                    <p>
                        {{$data->sejarah}}
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
    </section><!-- End SejarahSection -->

@endsection