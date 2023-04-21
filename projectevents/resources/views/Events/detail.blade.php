@extends('layouts.appMain')

@section('content')

<div class="d-flex flex-column align-items-center">
    <h1>{{$event->title}}</h1>
    <img src="{{asset('images/'.$event->image)}}" class="card-img-top" alt="..." style="width: 50%">
    <h3>{{$event->date_event}}</h3>
    <div class="w-50">
        <h4 style="text-align: justify">{{$event->description}}</h4>
    </div>
    
    <a href="/events" class="mt-4">
        <i class="fa fa-backward"></i> Back to list
    </a>
</div>

@endsection