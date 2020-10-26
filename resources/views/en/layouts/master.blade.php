<!DOCTYPE html>

<html>

<head>

@yield('title')

<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- icon -->
    <link rel="icon" href="{{asset('img/logolabo.ico')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">

    <!-- site CSS -->
    <link rel="stylesheet" href="{{asset('css/site.css')}}">

    @yield('head')


</head>
<body>
<header>


    <div class=" container">
        <div id="barlogo" class="row">

            <!-- Logo EST -->

            <div class=" col-lg-2 hidden-md-down">
                <img align="left" src="{{asset('img/LOGOESTE.gif')}}" HEIGHT="75">
            </div>

            <div class=" col-md-6  hidden-lg-up hidden-sm-down">
                <img align="left" class="img-fluid" src="{{asset('img/LOGOESTE.gif')}}">
            </div>

            <div class=" col-sm-12 col-xs-12 hidden-md-up ">
                <span class="row">
                    <span class="col-2"></span>
                    <span class="col-8">
                       <img class=" container img-fluid" src="{{asset('img/LOGOESTE.gif')}}">
                    </span>
                    <span class="col-2"></span>
                </span>
            </div>

            <!-- Titre SAEDD -->

            <div class="col-lg-8 hidden-md-down " style="margin: auto; padding-right: -40px ; padding-left: 50px ;">
                <img align="center" src="{{asset('img/titrelabo.png')}}" width=100%>
            </div>


            <!-- Logo SAEDD -->

            <div class=" col-lg-2 hidden-md-down">
                <img id="logolabo " align="right" src="{{asset('img/LOGOLABO.gif')}}" HEIGHT="75">
            </div>


            <div class=" col-md-6  hidden-lg-up hidden-sm-down">
                <img class="img-fluid" align="right" src="{{asset('img/LOGOLABO.gif')}}">
            </div>

            <div class=" col-sm-12 col-xs-12 hidden-md-up container">
                <span class="row">
                    <span class="col-2"></span>
                    <span class="col-8">
                       <img style=" width: 100%;" class=" container img-fluid" src="{{asset('img/LOGOLABO.gif')}}">
                    </span>
                    <span class="col-2"></span>
                </span>
            </div>


            <!-- Titre SAEDD -->

            <div class="col-md-12 hidden-lg-up ">
                <img align="center" src="{{asset('img/titrelabo.png')}}" width=100%>
            </div>

        </div>
    </div>


    <div id="bar2">

        <section id="barmenu" class="container">

            <nav id="nav" class="  navbar sticky-top  navbar-toggleable-md navbar-light ">

                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                        data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <span id="mobilemenu" class="navbar-brand hidden-lg-up " href="#">Menu</span>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="container navbar-nav mr-auto mt-2 mt-md-0 nav  ">

                        <li class="nav-item  ">
                            <a class="nav-link @if($choix==0) navactive @endif " href="{{url('/en/')}}">Home</a>
                        </li>

                        <li class="nav-item  ">
                            <a class="nav-link @if($choix==1) navactive @endif " href={{url('/en/research_axes')}}>Research
                                axes</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link @if($choix==2) navactive @endif "
                               href="{{url('/en/members')}}">Members</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link @if($choix==3) navactive @endif "
                               href="{{url('/en/research_projects')}}"> Research projects</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link @if($choix==4) navactive @endif "
                               href="{{url('/en/scientific_events')}}">Scientific events</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link @if($choix==5) navactive @endif " href="{{url('/en/equipments')}}">Equipments</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link @if($choix==6) navactive @endif " href="{{url('/en/publications')}}">Publications</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link @if($choix==7) navactive @endif " href="{{url('/en/contact')}}">
                                Contact </a>
                        </li>
                    </ul>

                    <span id="mobilemenu" class="navbar-brand hidden-lg-up " href="#">Language</span>

                    <ul class=" navbar-nav mr-auto mt-2 mt-md-0 nav  ">
                        <li class="nav-item pull-right ">
                            <a class="nav-link  "
                               href="{{url('/fr/'.Request::segment(2)."/".Request::segment(3) )}}">Fr</a>
                        </li>

                        <li class="nav-item pull-md-right">
                            <a class="navactive nav-link  "
                               href="{{url('/en/'.Request::segment(2)."/".Request::segment(3) )}}">En</a>
                        </li>

                        @if (Auth::check() && Auth::user()->is_admin)

                            <li class="dropdown " style="margin-bottom: -30px;padding-bottom: -30px;">

                                <a href="#" class="nav-link" data-toggle="dropdown" role="button"
                                   aria-expanded="false" style="padding-bottom: 10px; margin-bottom: 0px; ">
                                    {{ Auth::user()->name }}
                                </a>

                                <ul class="dropdown-menu" role="menu" style="margin-top: -25px;">

                                    <li style="width: 100%;">

                                        <a class="nav-link" href="{{url('/home')}}">
                                            Account
                                        </a>
                                        <a href="#" class="nav-link" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>


                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              style="display: none;">
                                            {{ csrf_field() }}
                                        </form>

                                    </li>

                                </ul>

                            </li>

                        @endif

                    </ul>
                </div>
            </nav>

        </section>

    </div>


</header>

<div class="container">

    @yield('content')

</div>

<footer class="container text-center ">
    <br/>
    <section id="CRsection">

        <P id="CR">
            <br/>
            Copyright &copy 2017 EST ESSAOUIRA
        </P>
    </section>
</footer>

<!-- jQuery first,  Tether,  Bootstrap JS. -->

<script src="{{URL::asset('jquery/jquery-3.1.1.slim.min.js')}}"></script>

<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>

<script src="{{URL::asset('js/tether.min.js')}}"></script>


</body>

</html>
