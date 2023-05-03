@extends('layouts.appMain')

@section('content')
<div class="d-flex flex-column align-items-center">
    <h1>Register for event {{$event->title}}</h1>
    <img src="{{asset('images/'.$event->image)}}" class="card-img-top" alt="..." style="width: 30%">
    <h3>{{$event->date_event}}</h3>
    <div>
        <form action="" method="POST">
            {{ csrf_field() }}
            <label>Person name</label>
            <div class="input-group">
                <input class="form-control" type="text" name="contact_person" placeholder="Person name" required>
            </div>
            <label>Email</label>
            <div class="input-group">
                <input class="form-control" type="email" name="email" placeholder="Email" required>
            </div>
            <label>Phone</label>
            <div class="input-group">
                <input class="form-control" type="text" name="phone" placeholder="Phone" required>
            </div>
            <label>Group name</label>
            <div class="input-group">
                <input class="form-control" type="text" name="group_name" placeholder="Group name" required>
            </div>
            <label>Members number</label>
            <div class="input-group">
                <input class="form-control" type="number" min="1" name="number_members" placeholder="Members number" required>
            </div>
            <label>Event id</label>
            <div class="input-group">
                <input class="form-control" type="number" name="events_id" placeholder="Id event" readonly value="{{$event->id}}" required>
            </div>
            <button class="btn btn-success" type="submit">Register</button>
        </form>
    </div>
</div>

@endsection