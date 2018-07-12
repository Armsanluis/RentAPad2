    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark" id="backtotop">
      <a class="navbar-brand" href="{{ url('/home') }}">RentAPad</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          
            @guest
            <li class="nav-item">
            <a class="nav-link" href="/home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/rent">For Rent Properties</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/buy">Buy Properties Here</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/posts">All Properties</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/create">Post Your Properties Here</a>
          </li>          
          <!-- <li class="nav-item">
            <a class="nav-link" href="/account">My Account</a>
          </li> -->
        </ul>
        

          
          @else
          @if(Auth::user()->role == 'admin')
          <li class="nav-item">
           <a class="nav-link" href="/dashboard">DashBoard <span class="sr-only"></span></a>
          </li>
          @else
          <li class="nav-item">
           <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/rent">For Rent Properties</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/buy">Buy Properties Here</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/posts">All Properties</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/create">Post Your Properties Here</a>
          </li>          
          <li class="nav-item">
            <a class="nav-link" href="/account">My Account</a>
          </li>
          @endif
        </ul>

        @endguest
        <form class="form-inline" action="search">
          <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search Location</button>
        </form>


        <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
    </nav>
  </div>