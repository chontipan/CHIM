<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CHIM') }}</title>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyB1tI29Od4wKgtIrTGWkMd9FLY_8mMXahI&libraries=places"></script>

    <script src="{{ asset('js/gmaps.js') }}"></script>

    <!-- Styles -->
<style>

    #map {
        width: 800px;
        height: 400px;
        padding-top: 1em;
    }
    #mymap {

        width: 1100px;
        height: 420px;
        padding-top: 1em;
    }
    #footer{

        position:fixed;
        height:50px;
        background-color:white;
        bottom:0px;
        left:0px;
        right:0px;
        margin-bottom:0px;
        color: orangered;
    }
    body{
        padding-bottom: 50px;
        margin-bottom:50px;
    }

</style>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->

                    <!-- Branding Image -->
                    <a class="navbar-brand" style="color: orangered" href="{{ url('/') }}">
                        {{ config('app.name', 'CHIM') }}
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
                            <li><a href="{{ route('login') }}">เข้าสู่ระบบ</a></li>
                            <li><a href="{{ route('register') }}">สมัครสมาชิก</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="/{{Auth::user()->id}}/edit">แก้ไขข้อมูลส่วนตัว
                                        </a>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            ออกจากระบบ
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
        <div class="container">
            @yield('content')
        </div>


    </div>
    <div id="footer">
        <p align="center">CHIM (Criminal History Information System) 2017</p>
    </div>
    <!-- Scripts -->
   {{-- <script src="{{ asset('js/vue.js') }}"></script> }}
    {{--<script src="https://unpkg.com/vue"></script>--}}
    <script src="{{ asset('js/app.js') }}"></script>
@yield("javascript")
</body>

</html>
