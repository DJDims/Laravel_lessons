@extends('layouts.appMain')

@section('content')

<h2>Welcome to project events</h2>

{{-- <div class="container-fluid d-flex justify-content-center">
  <div class="container-md">
    <div class="d-flex flex-row justify-content-around flex-wrap">
      <!-- cards -->
      @for ($i = 0; $i < 12; $i++)
      <div class="card mx-5 mt-5" style="width: 18rem;">
        <img src="{{asset('images/Kirbuturg.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
      @endfor
      <!-- cards -->
    </div>
  </div>
</div> --}}

<div class="album">
  <div class="container dk-mx-a">
    <div class="row">
      
      @foreach ($events as $event)
      <div class="col-md-4">
        <div class="card mx-5 mt-5" style="width: 18rem;">
          <img src="{{asset('images/'.$event->image)}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{$event->title}}</h5>
            <p class="card-text">{{Carbon\Carbon::parse($event->date_event)->format('d.m.Y')}}</p>
            <a href="{{url('show/'.$event->id)}}" class="btn btn-primary">Read more...</a>
          </div>
        </div>
      </div>
      @endforeach

      
    </div>
  </div>
</div>


@endsection