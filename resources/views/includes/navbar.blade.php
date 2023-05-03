<div class="container">

    <nav class="navbar navbar-expand-md ">
        <div class="container d-flex justify-content-between">
            <div class="collapse navbar-collapse d-flex justify-content-between align-items-" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <div class="navMenu d-flex align-items-center">
                    <a class="mx-3 logo d-flex align-items-center" href="{{ route('dashboard') }}">
                        <img src="{{ asset('img/logo-400x400.png') }}" alt="logo deliveboo" class="d-flex align-items-center">
                        <h2 class="m-0 ms-2 p-0 fw-bold m-0 ms-2 p-0 fw-bold d-md-block">DeliveBoo</h2>
                    </a>
                </div>
                
                <!-- Right Side Of Navbar -->
                @if (!Route::is('payments'))
                @if (!Route::is('payment-success'))    
                <ul class="navbar-nav ml-auto d-flex justify-content-end traslate-down mt-3">
                    @auth
                    <li class="link-menu"><a class="p-0 d-none d-md-block d-xs-none size me-3" href="http://localhost:5174/">Home</a></li>
                    <!-- <a class="p-0 size me-3 hover-underline-animation" href="">showRestaurant()</a> -->
                    <li class="link-menu"><a class="p-0 d-none d-md-block d-xs-none size me-3" href="{{ route('admin.orders.index') }}">Ordini Ricevuti</a></li>
                    @endauth
                    <!-- Authentication Links -->
                    @guest
                    <li class="nav-item">
                        <a class="p-0 size me-3" href="{{ route('login') }}">Login</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="p-0 size me-3" href="{{ route('register') }}">Crea un Account</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-white p-0 me-3" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>
                        
                        <div class="dropdown-menu dropdown-menu-right traslate" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text-dark d-sm-block d-md-none" href="http://localhost:5174/">Home</a>
                            <a class="dropdown-item text-dark d-sm-block d-md-none" href="{{ route('admin.orders.index') }}">Ordini Ricevuti</a>
                            {{-- <a class="dropdown-item text-dark" href="{{ url('dashboard') }}">{{__('Dashboard')}}</a> --}}
                            <a class="dropdown-item text-dark" href="{{ url('profile') }}">{{__('Profilo')}}</a>
                            <a class="dropdown-item text-dark" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
                @endif
                @endif
            </div>
        </div>
    </nav>
</div>