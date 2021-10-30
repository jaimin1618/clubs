@extends('layouts.app')

@section('title', 'events')

@section('css') 
    <link rel="stylesheet" href="{{ asset('css/events.css') }}">
@endsection



@section('content')
<main>

    <div class="main">
    <div class="event container">
    <div class="row">
        <div class="col-md-5 ">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators" id="caro-indicators">
    
                  
                        <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li> 
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> 
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li> 
                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li> 
                   
                </ol>
                <div class="carousel-inner" id="caro-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100 " style="height:20rem;" src="https://source.unsplash.com/random/nature" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" style="height:20rem;" src="https://source.unsplash.com/random/dark" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" style="height:20rem;" src="https://source.unsplash.com/random/animals" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" style="height:20rem;" src="https://source.unsplash.com/random/spirutuality" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" style="height:20rem;" src="https://source.unsplash.com/random/light" alt="Second slide">
                        </div>
                    
                    
                </div>
            </div> 
        </div>
        <div class="col-md-7 col-lg-6">
            <div class="row greed " style="display:flex;justify-content:center; align-items:center;margin-top:2rem;">
                
    
            <div class="col-lg-12" style="margin-left:2rem;">
             <div class="event-name">
                <h1>Inno-Spark</h1>
                </div>
            </div>
    
    
            <div class="row" style="margin-top:2rem; display:flex; justify-content:space-evenly;">
                <div class="col-lg-2">
                    <h4>Date:23/12/2021</h4> 
                </div>
                <div class="col-lg-2 offset-lg-1">
                    <h4>Time:16:00</h4>
    
                </div>
                <div class="col-lg-2">
                    <h4>Location:Aryabhatt hall</h4>
                </div>
            </div>
    
        <div  style = "border:none; display: flex; justify-content: center;align-items: center; margin-top: 1.2rem;" class = "submit row form-control">
        <button class = "submit form-control" data-toggle="modal" data-target="#exampleModalCenter" id = "submit" >Read More</button>
        </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    
    
    
    
    <!-- <div class="event container"> -->
    <!-- <div class="row"> -->
        <!-- <div class="container"> -->
     <!-- slider -->
     <!-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators" id="caro-indicators">
    
                  
                        <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li> 
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> 
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li> 
                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li> 
                   
                </ol>
                <div class="carousel-inner" id="caro-inner">
    
                    
                        <div class="carousel-item active">
                            <img class="d-block w-100 " style="height:20rem;" src="https://source.unsplash.com/random/nature" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" style="height:20rem;" src="https://source.unsplash.com/random/dark" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" style="height:20rem;" src="https://source.unsplash.com/random/animals" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" style="height:20rem;" src="https://source.unsplash.com/random/spirutuality" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" style="height:20rem;" src="https://source.unsplash.com/random/light" alt="Second slide">
                        </div>
                    
                    
                </div>
            </div>  -->
    </div>
    </div>
    <div>
    <!-- <div class="row " style="display:flex;justify-content:center; align-items:center;margin-top:2rem;">
    <div class="col-lg-3 event-logo">
            <img src="/images/logo/codechef-logo.jpg" alt="">
        </div>
    
        <div class="col-lg-6" style="margin-left:2rem;">
            <div class="event-name">
                <h1>Inno-Spark</h1>
            </div>
        </div>
    
    </div>
    </div>
    
    
    <div class="row" style="margin-top:2rem; display:flex; justify-content:center;">
            <div class="col-lg-3">
                <h4>Date:23/12/2021</h4> 
            </div>
            <div class="col-lg-3 offset-lg-1">
                <h4>Time:16:00</h4>
    
            </div>
            <div class="col-lg-4">
                <h4>Location:Aryabhatt hall</h4>
            </div>
    </div>
    
    <div style = "display: flex; justify-content: center;align-items: center; margin-top: 1.2rem;" class = "submit">
        <button class = "submit form-control" data-toggle="modal" data-target="#exampleModalCenter" id = "submit" >Read More</button>
    </div> -->
    
    
    </div>
    <div>
    
    
    
    
    <!--Modal-->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Inno-spark</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <label for="">Description</label>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, quos. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur at reiciendis quo aperiam, corporis eveniet.</p>
    
          </div>
          <div class="modal-footer">
             <a href="https://www.google.com/" target="_blank"><button class="btn btn-success text-white">Register here</button></a>
          </div>
        </div>
      </div>
    </div>
    
    
    
    
    
    
    
    
    
    
</main>
    

    

@section('js')
    <script type="text/javascript" src={{ asset('js/events.js') }}></script>
@endsection

@endsection
