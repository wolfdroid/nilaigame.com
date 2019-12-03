<nav class="navbar navbar-expand-lg navbar-light">
        <!-- Navbar Logo -->
        <a class="navbar-brand" href="{{ url('/') }}"> <img src="img/logo.png" alt="logo"> </a>
        <!-- Toogler Navbar-->
        <button class="navbar-toggler" type="button" data-toggle="collapse"data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="ti-menu"></span>
        </button>
        <div class="collapse navbar-collapse main-menu-item justify-content-end" id="navbarSupportedContent">
            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav align-items-center"> 
                <!-- Guest Session -->
                @guest
                    <!-- Register Page -->
                    <li class="nav-item"> <a class="nav-link" href="{{ route('login') }}">{{ __('Masuk') }}</a> </li>
                    <!-- Login Page -->
                    @if (Route::has('register'))
                        <li class="nav-item"> <a class="nav-link" href="{{ route('register') }}">{{ __('Daftar') }}</a> </li>
                    @endif
                    <!-- After Logged In -->
                    @else
                        <!-- Profile Bar -->
                        <li class="nav-item dropdown">
                            <!-- Logged In -->
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" 
                            href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <!-- Dropdown Menu -->
                            <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
                                <!-- Profile Button -->
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    {{ __('Profile') }}
                                </a>
                                <!-- Logout Button -->
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
                        <!-- Review Bar -->
                        <li class="nav-item ml-auto">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Buat Review') }}</a>
                        </li>
                @endguest
            </ul>
            <!-- Search Bar-->
            <ul class="nav navbar-nav ml-auto"> 
                <form class="form-inline">
                    <input class = "form-control ml-sm-4" type="search" placeholder="Cari" aria-label="Search">
                    <button class= "btn btn-search  my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
                </form> 
            </ul>
        </div>
    </div>
</nav>