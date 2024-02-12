@extends('Layout.Landing_layout')
@section('title','SIGEPAR|Curch Data')
@section('content')
  <section class="d-flex flex-column justify-content-center align-items-center testimonials section-bg" style="margin-top:15px;">  
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
  </section>
@endsection