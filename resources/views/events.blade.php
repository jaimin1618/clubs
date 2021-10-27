@extends('layouts.app')

@section('title', 'events')

@section('css') 
    <link rel="stylesheet" href="{{ asset('css/events.css') }}">
@endsection



@section('content')
    <h1>This is events page</h1>

    

@section('js')
    <script type="text/javascript" src={{ asset('js/events.js') }}></script>
@endsection

@endsection
