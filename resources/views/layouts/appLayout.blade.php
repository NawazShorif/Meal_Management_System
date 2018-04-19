<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Meal Management System</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="{{ url('/') }}">
                        Meal Management System</a>
                    <!-- Branding Image -->
                    
                  
                    
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
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
                    </ul>
                </div>
                <br>
                <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                <ul class="nav navbar-nav navbar-left">
                        <li><a class="navbar-brand btn btn-success" href="{{ url('status') }}">My Status</a></li>
                       <li><a class="navbar-brand btn btn-success" href="{{ url('myTodayBuzzer') }}">My Today Buzzer</a></li>
                       <li><a class="navbar-brand btn btn-success" href="{{ url('mymeal') }}">My Today Meal</a></li>
                       <li><a class="navbar-brand btn btn-success" href="{{ url('bh') }}">My Bazzer History</a></li>
                       <li><a class="navbar-brand btn btn-success" href="{{ url('mh') }}">My Meal History</a></li>
                       <li><a class="navbar-brand btn btn-success" href="{{ url('aUM') }}">all User Meal</a></li>
                       <li><a class="navbar-brand btn btn-success" href="{{ url('aUB') }}">All User Buzzer</a></li>
                       <li><a class="navbar-brand btn btn-success" href="{{ url('aus') }}">Total View</a></li>
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
