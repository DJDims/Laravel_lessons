@extends('layouts.appMain')

@section('content')

<div class="d-flex flex-column align-items-center">
    <h1>You successuflly registered on {{$event->title}} event</h1>
    <a href="/events" class="mt-4">
        <i class="fa fa-backward"></i> Back to list events
    </a>
</div>

@endsection