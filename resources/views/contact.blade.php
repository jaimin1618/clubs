@extends('layouts.app')

@section('title', 'contact us')
    
@section('css') 
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection



@section('content')
    <h1>This is contact us page</h1>



@section('js')
    <script type="text/javascript" src={{ asset('js/contact.js') }}></script>
@endsection

@endsection
