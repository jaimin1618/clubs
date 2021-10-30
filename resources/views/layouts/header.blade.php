
<header>
        <nav class="navbar navbar-expand-lg navbar-light"style="background-color:white;padding:1.3rem; font-size:1.1rem; border-bottom:1.6px solid #E5E7EB; z-index:1;">
      
        <img src="/images/logo/clubLogo.png" alt="logo" class="logo"> 

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('index') }}" id = "header-link">Home </a>
            </li>
            <li class="nav-item" >
              <a class="nav-link" href="{{ route('events') }}" id= "header-link" >Events</a>
            </li>
            <li class="nav-item" >
              <a class="nav-link" href="{{ route('about') }}" id= "header-link">About-us</a>
            </li>
            <li class="nav-item" >
              <a class="nav-link" href="{{ route('contact') }}" id= "header-link">Contact-us</a>
            </li>
            @auth
                @if (Auth()->user()->role == config('constants.ADMIN_ROLE') || Auth()->user()->role == config('constants.SUPER_ADMIN_ROLE')) 
                <li class="nav-item" >
                  <a class="nav-link" href="{{ route('admin.form') }}" id= "header-link">Add Event</a>
                </li>
              @endif
            @endauth
          
          </ul>
        </div>   
        

<!----RIGHT SIDE OF NAVBAR-->

        <div class="collapse navbar-collapse" data-target="collapse" id="navbarNavDropdown">             
        <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item" class="collapse navbar-collapse"  aria-expanded="true"  style="margin-right:2rem;">
                                <a class="nav-links" style="background-color:#2C2C96;color:white; border-radius:5px; padding:6px 9px; border:none;" href="{{ route('login') }}">Login</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item" class="collapse navbar-collapse"   aria-expanded="true"  data-toggle="collapse">
                                <a class="nav-links" style=" background-color:#2C2C96;border:none; color:white;  padding:6px 9px; border-radius:5px;   " href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                            </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                             </li>
                    @endguest
                </ul>
            </div>          

 
</div>
        </div>
    </nav>
   
    
</header>