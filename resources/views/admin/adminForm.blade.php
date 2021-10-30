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
<form class="adminForm" method="POST">

    
    <label>Select The Club</label><br>
        <select id="dropable" class = "form-control" required>
           <option value="">Your club</option>
            <option>Innovator Club</option>
            <option>CodeChef Ldce Chapter </option>
            <option>Robocon</option>
            <option>NSS LDCE</option>
            <option>NCC LDCE</option>
            <option>Lakshya</option>
            <option>Prakalpa</option>
            <option>Umang</option>
            <option>Rotract LDCE</option>
            <option>ACM LDCE Chapter</option>
            <option>Vox Populi Ldce</option>
        </select>
    
<div class="row" style="margin-top: 1rem;" >
    <div class="col-lg-6" >
    <label>Select The Event Date</label>
        <input type="date" class="eventDate form-control" required>
    </div>
    <div class="col-lg-5 offset-lg-1">
    <label>Event Time</label>
        <input type="time" class="eventTime form-control" required>
    </div>
</div>
<div class="row" style="margin-top: 1rem;">
    <div class="col-lg-6">
        <label>Event Name</label>
        <input type = "text" class = "eventName form-control" placeholder="Event Name" required>
    </div>
    
    <div class="col-lg-5 offset-lg-1">
    <label>Level Of Event</label><br>
        <select id="dropable" class = "form-control" required>
           <option value="">College</option>
            <option>Zonal</option>
            <option>Inter-Zonal</option>
            <option>State</option>
            <option>National</option>
            <option>International</option>
        </select>
  
    </div>
</div>

<div class="row" style="margin-top:1.5rem">

<div class="col-lg-6">
<label>Event Poster</label><br>
    <input type="file" class = "eventposter" id ="eventposter" 
       src="" required multiple>
</div>

<div class="col-lg-5 offset-lg-1">

  <label>Description</label>
    <textarea type = "text" class = "Description form-control" style = "resize: none;" placeholder="About Event" required
    ></textarea><br> 

</div>




<div class="row" style="margin-top: 2rem; margin-left:0.1rem;">

<div class="col-lg-8">
    <label>Will you provide a certificate?</label><br>
</div>

<div class="col-lg-4" style="display: flex;">
 
<div class="form-check form-check-inline">
    
    <input class="form-check-input " type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
    <label class="form-check-label" for="inlineRadio1">Yes</label>
  </div>
  
  <div class="form-check form-check-inline"> 
    <input class="form-check-input " type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
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
