@extends('layouts.app')

@section('title', 'contact us')
    
@section('css') 
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection



@section('content')

    <div class="container contact">
        <form id="contactForm" enctype="multipart/form-data">
        
            <div class="card-layout layout-medium">
            <div class="content">
        
                <h1 class="title"> Give feedback </h1>
                <p>How was your expreience?</p>

                <div id="status"></div>
        
                <div class="emojis ">
                    <span class="eachEmoji">😥</span>
                    <span class="eachEmoji">😔</span>
                    <span class="eachEmoji">😐</span>
                    <span class="eachEmoji">😀</span>
                    <span class="eachEmoji">😇</span>
                </div>
        
                <input class="form-control" name="name" type="text" placeholder = "Name" style = "outline: 2px solid rgb(54, 54, 58);" value="@auth {{ (Auth::user()->name) }} @endauth">
                <br>
                <input class="form-control"  type="text" name="email" placeholder = "Email" style = "outline: 2px solid rgb(54, 54, 58);" value="@auth {{ Auth::user()->email }} @endauth">
                <br>
                <textarea class="form-control" rows="5"   placeholder="Give Your FeedBack" name="message" style="border-radius:4px; outline: 2px solid rgb(54, 54, 58); resize:none;" ></textarea>    
                <br>      
        
                <div class="user-actions">
                <button name="submit" class="btn-primary" id="contactSubmit" type="submit">
                    Submit
                </button>
                </div>
            </div>
            </div>
        </form>
    </div>

@section('js')
    <script type="text/javascript" src={{ asset('js/contact.js') }}></script>
@endsection

@endsection
