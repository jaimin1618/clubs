@extends('layouts.app')

@section('title', 'club')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/club.css') }}">
@endsection

@section('content')

    <main>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators" id="caro-indicators">

                {{-- 
                    <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li> 
                --}}
                
            </ol>
            <div class="carousel-inner" id="caro-inner">

                {{-- 
                    <div class="carousel-item active">
                        <img class="d-block w-100 " style="height:30rem;" src="https://source.unsplash.com/random/nature" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" style="height:30rem;" src="https://source.unsplash.com/random/dark" alt="Second slide">
                    </div>
                --}}
                
            </div>
        </div> 
        
        <div id="testing"></div>

        <div class="jumbotron">
            <h1 class="display-4">Unknown</h1>
            <p class="lead" id="desc">The club where ideas connect</p>
            <br><br>
            <p class="lead">
                <a id="web-link" class="btn btn-success btn-lg" href="" role="button">Visit website</a>
            </p>
        </div>

        {{-- clubmember card --}}
        <div class="container">
        <div class="row">
            <div class="col-lg-4 ">
            <figure class="snip0078 hover blue">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sq-sample4.jpg" alt="sampl45" />
            <figcaption>
            <h2>Mark <span>Twain</span></h2>
            <h4>Position</h4>
            </figcaption>
            <a href="#"></a>
            </figure>
            </div>
            <div class="col-lg-4 ">
            <figure class="snip0078 red"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sq-sample7.jpg" alt="sample50" />
        <figcaption>
            <h2>Steven <span>Wright</span></h2>
            <h4>Position</h4>
        </figcaption>
        <a href="#"></a>
        </figure>
            </div>
            <div class="col-lg-4 ">
            <figure class="snip0078 yellow"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sq-sample6.jpg" alt="sample46" />
            <figcaption>
            <h2>Arthur C. <span> Clarke</span></h2>
            <h4>Position</h4>
        </figcaption>
        <a href="#"></a>
        </figure>
            </div>
            <div class="col-lg-4 ">
            <figure class="snip0078 yellow"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sq-sample6.jpg" alt="sample46" />
            <figcaption>
            <h2>Arthur C. <span> Clarke</span></h2>
            <h4>Position</h4>
        </figcaption>
        <a href="#"></a>
        </figure>
            </div>
            <div class="col-lg-4">
            <figure class="snip0078 yellow"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sq-sample6.jpg" alt="sample46" />
        <figcaption>
            <h2>Arthur C. <span> Clarke</span></h2>
            <h4>Position</h4>
        </figcaption>
        <a href="#"></a>
        </figure>
            </div>
        </div>
        </div>
    </main>

    @section('js')
        <script type="text/javascript" src="{{ asset('js/club.js') }}"></script>
    @endsection

@endsection