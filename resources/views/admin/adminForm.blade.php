@extends('layouts.app')

@section('title', 'event-form')

@section('css') 
    <link rel="stylesheet" href="{{ asset('css/adminForm.css') }}">
@endsection

@section('content')
<main>
<div class="form-hadding text-center ">
    <h1 style = "color: #f45702">Event Registration Form</h1>
</div>
<div class="container-fluid">
<form class="adminForm" id="eventForm" action="{{ route('events.add') }}" enctype="multipart/form-data" method="POST">

    <div id="status"></div>

    <label>Select The Club</label><br>
        <select name="club" id="dropable" class = "form-control" required>
           <option value="0">Other</option>
        </select>
    
<div class="row" style="margin-top: 1rem;" >
    <div class="col-lg-6" >
    <label>Select The Event Date</label>
        <input name="date" type="date" class="eventDate form-control" required>
    </div>
    <div class="col-lg-5 offset-lg-1">
    <label>Event Time</label>
        <input name="time" type="time" class="eventTime form-control" required>
    </div>
</div>
<div class="row" style="margin-top: 1rem;">
    <div class="col-lg-6">
        <label>Event Name</label>
        <input name="name" type="text" class = "eventName form-control" placeholder="Event Name" required>
    </div>

    <div>
        <input name="created_by" type="hidden" class="eventName form-control" required value="@auth{{Auth()->user()->name}}@endauth">
    </div>
    
    <div class="col-lg-5 offset-lg-1">
    <label>Level Of Event</label><br>
        <select name="level" id="dropable" class="form-control" required>
           <option value="0">College</option>
            <option value="1">Zonal</option>
            <option value="2">Inter-Zonal</option>
            <option value="3">State</option>
            <option value="4">National</option>
            <option value="5">International</option>
        </select>
  
    </div>
</div>

<div class="row" style="margin-top:1.5rem">

    {{-- <div class="col-lg-6">
        <label>Event Poster</label><br>
            <input name="image" type="file" class = "eventposter" id ="eventposter" src="" required>
    </div> --}}

    <div class="col-lg-5 offset-lg-1">
        <label>Description</label>
        <textarea name="text" type="text" class = "Description form-control" style = "resize: none;" placeholder="About Event" required></textarea><br> 
    </div>

    <div class="row" style="margin-top: 2rem; margin-left:0.1rem;">
        <div class="col-lg-8">
            <label>Will you provide a certificate?</label><br>
        </div>

        <div class="col-lg-4" style="display: flex;">
            <div class="form-check form-check-inline">
                <input name="certificate"  class="form-check-input " type="radio" id="inlineRadio1" value="1" required>
                <label class="form-check-label" for="inlineRadio1">Yes</label>
            </div>
            
            <div class="form-check form-check-inline"> 
                <input name="certificate" class="form-check-input " type="radio" id="inlineRadio2" value="0">
                <label class="form-check-label" for="inlineRadio2">No</label>
            </div>
        </div>
    </div>
</div>

    <div style = "display: flex; justify-content: center;align-items: center; margin-top: 1.2rem;" class = "submit">
        <button class = "submit form-control" id = "submit" >Submit</button>
    </div>
</form>
</div>
</main>   

@section('js')
    <script type="text/javascript" src={{ asset('js/adminForm.js') }}></script>
@endsection

@endsection
