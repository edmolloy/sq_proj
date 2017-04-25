<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', '[S]quareList') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-left">
                        @if (!Auth::guest())
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Electronics <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('listings/electronics/phones') }}">
                                            Phones
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('listings/electronics/tvs') }}">
                                            TVs
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('listings/electronics/computers') }}">
                                            Computers
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('listings/electronics/appliances') }}">
                                            Appliances
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('listings/electronics/other') }}">
                                            Other
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Clothing <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('listings/clothing/mens') }}">
                                            Men's
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('listings/clothing/womens') }}">
                                            Women's
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('listings/clothing/kids') }}">
                                            Kid's
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Automobiles <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('listings/automobiles/cars') }}">
                                            Cars
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('listings/automobiles/trucks') }}">
                                            Trucks
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('listings/automobiles/motorcycles') }}">
                                            Motorcycles
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('listings/automobiles/other') }}">
                                            Other
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Furniture <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('listings/furniture/kitchen') }}">
                                            Kitchen
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('listings/furniture/office') }}">
                                            Office
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('listings/furniture/bedroom') }}">
                                            Bedroom
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('listings/furniture/office') }}">
                                            Other
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    My Listings <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('mylistings') }}">
                                            My Listings
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('newlisting') }}">
                                            Create Listings
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('watchlistings') }}">
                                            Listings on Watch
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('logout') }}">
                                            Desired Listings
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('logout') }}">
                                            Purchased Listings
                                        </a>
                                    </li>

                                </ul>
                            </li>

                        @endif
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li> <a href="#"> {{ Auth::user()->email }} </a> </li>
                                    <hr>
                                    <li><a href="{{ route('reset_email') }}">Change Email</a></li>
                                    <li><a href="{{ route('reset_password') }}">Changed Password</a></li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
