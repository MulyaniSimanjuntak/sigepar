@extends('Layout.Landing_layout')
@section('title','SIGEPAR|Announcement')
@section('content')




<section class="d-flex flex-column justify-content-center  align-items-center testimonials section-bg" style="margin-top:30px;">
<div class="container">
        <div class="section-title">
                <h2>Announcement</h2>
            </div>
        
            <div class="row">

                    <div class="card mb-3">
  <img src="{{asset('fileweb/' . $pengumuman->image)}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$pengumuman->judul_pengumuman}}</h5>
    <p class="card-text">{{$pengumuman->isi}}</p>
  </div>
</div>

</div>
</div>
</section>
    
@endsection