
<nav class = "navbar navbar-expand-md navbar-light navbar-laravel">
    <div class = "container">
        <a class = "navbar-brand" href = "{{ url('/') }}">
            {{ config('app.name', 'BLOG-APP') }}
        </a>

        <button class = "navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class = "navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

                <ul class="navbar-nav mr-auto">
                
                    <li>  <a class = "nav-link" href = "/"> Home <span class = "sr-only"> (current) </span>  </a>  </li>
                    <li class = "nav-item">  <a class = "nav-link" href = "/about"> About </a>  </li>
                    <li class = "nav-item">  <a class = "nav-link" href = "/services"> Services </a>  </li>
                    <li class = "nav-item">  <a class = "nav-link" href = "/posts"> Blog </a>  </li>
                    
                    <!-- <li class = "nav-item">  <a class = "nav-link disabled" href = "#" tabindex = "-1" aria-disabled = "true"> Disabled </a>  </li> -->
                                
                    <li class="nav-item dropdown">
                
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                
                        </div>
                
                    </li>
        
                </ul>

            </ul>


            <!-- The Search bar 
                <ul class = "nav navbar-center">
                    <form class="form-inline my-2 my-lg-0" action = "/search" method = "POST" role = "search">
            
                            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                            <button class="btn btn-secondary my-2 my-sm-0" type="submit"> Search </button>
                    
                    </form>
                </ul>
            -->

            
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif

                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            
                            <a class = "dropdown-item" href = "/dashboard"> Dashboard </a>
                            
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                        </div>

                    </li>

                @endguest

            </ul>

        </div>

    </div>
    
</nav>