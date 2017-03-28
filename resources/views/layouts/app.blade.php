<!DOCTYPE html>
<html lang="Great Himalayan Trails">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Great Himalayan Trails</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">


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
                    <a class="navbar-brand" href="{{ url('/home') }}">
                        Great Himalaya Trails
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else

                            <li>
                                <a href="/pages/preference_setup">Preference Setup</a>

                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    General Setup <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                    <li><a href="{{route('country.index') }}">Country</a></li>
                                    <li><a href="/pages/generalsetup/embassy_contact">Embassy Contact</a></li>
                                    <li role="presentation" class="divider"></li>
                                    <li><a href="/pages/generalsetup/place_type">Place Type</a></li>
                                    <li><a href="/pages/generalsetup/location">Location</a></li>
                                    <li><a href="/pages/generalsetup/route">Route</a></li>
                                    <li role="presentation" class="divider"></li>
                                    <li><a href="/pages/generalsetup/weather_station">Weather Station</a></li>
                                    <li><a href="/pages/generalsetup/incident_type">Incident Type</a></li>
                                    <li role="presentation" class="divider"></li>
                                    <li><a href="/pages/generalsetup/push_notification">Push Notification</a></li>
                                    <li><a href="/pages/generalsetup/alert_notification">Alert Notification</a></li>

                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Transaction<span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                    <li><a href="/pages/transaction/registration">User Registration</a></li>
                                    <li><a href="/pages/transaction/weather">Daily Weather</a></li>
                                    <li><a href="/pages/transaction/disperse">Disperse Notification/Alert</a></li>


                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Reports<span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="/pages/reports/radar_embassy">User Radar for Embassy</a></li>
                                    <li><a href="/pages/reports/radar_police">User Radar for Police</a></li>
                                    <li role="presentation" class="divider"></li>
                                    <li><a href="/pages/reports/incident_report">Incident Report</a></li>
                                    <li role="presentation" class="divider"></li>
                                    <li><a href="/pages/reports/alert_map">Alert Map</a></li>
                                    <li><a href="/pages/reports/route_density">Route Density</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
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
