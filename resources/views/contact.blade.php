@extends('layouts.app')

@section('title', 'contact us')
    
@section('css') 
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection



@section('content')

    <div class="container">

        <form id="contactForm" enctype="multipart/form-data">
            <div id="status">
                {{-- SHOW success, warnings, errors --}}
            </div>

            <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Jane Doe" name="name" value="@auth {{ (Auth::user()->name) }} @endauth">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" placeholder="abc@xyz.com" name="email" value="@auth {{ Auth::user()->email }} @endauth">
            </div>
            <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" id="message" rows="3" placeholder="write your message or concern here" name="message"></textarea>
            </div>
            <button name="submit" id="contactSubmit" type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>


@section('js')
    <script type="text/javascript" src={{ asset('js/contact.js') }}></script>
@endsection

@endsection
