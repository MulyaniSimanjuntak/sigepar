@extends('Layout.Landing_layout')
@section('title','SIGEPAR|Announcement')
@section('content')

<section class="d-flex flex-column justify-content-center  align-items-center testimonials section-bg" style="margin-top:30px;">
<div class="container">
        <div class="section-title">
                <h2>Announcement</h2>
            </div>
        
            <div class="row">

@foreach ($pengumuman as $value)
 <div class="col-sm-4">
            <div class="card" style="width: 18rem; ">
        <img src="{{asset('fileweb/' . $value->image)}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$value->judul_pengumuman}}</h5>
            <p class="card-text">{{$value->isi}}</p>
            <a href="/announcement/{{$value->id}}/detail" class="btn btn-primary">Selengkapnya</a>
        </div>
        </div>
        </div>
@endforeach
</div>
</div>
</section>

    
@endsection