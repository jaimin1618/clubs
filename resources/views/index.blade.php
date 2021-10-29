@extends('layouts.app')

@section('title', 'Home')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection


@section('content')
<div id="dataNotFound" class="alert alert-danger">
    <small>Sorry! We couldn't find clubs due to some internal technical error</small>
</div>

<div class="row allClubs">

    {{-- SHOW CLUBS DATA HERE --}}

</div>

@section('js')
    <script type="text/javascript" src={{ asset('js/index.js') }}></script>
@endsection

@endsection
