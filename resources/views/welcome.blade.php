<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Shini') }}</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="css/app.css">        
       
    </head>
    <body style="background-color: #fff;">
        <header>
            <div class="navbar-fixed">
                <nav>
                    <div class="nav-wrapper">
                        <a href="#" data-activates="mobile-menu" class="brand-logo">Shini</a>
                        <a href="#" data-activates="mobile-menu" class="button-collapse"><i class="material-icons">menu</i></a>

                        <ul class="right hide-on-med-and-down">
                            <li><a href="#">Find Workers</a></li>

                            @guest
                                <li><a href="{{ route('login') }}">Sign in</a></li>
                                <li><a href="{{ route('register') }}">Sign up</a></li>
                            @else
                                <li class="dropdown">
                                    <a href="#" class="dropdown-button" data-activates='account' role="button" aria-expanded="false">
                                        {{ Auth::user()->name }} 
                                    </a>

                                    <ul id='account' class="dropdown-content" role="menu">
                                        <li><a href="#!">Account</a></li>
                                        <li class="divider"></li>
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
                            @endguest
                        </ul>
                        
                        <ul id="mobile-menu" class="side-nav">
                            <li>
                                <div class="user-view">
                                    <div class="background">
                                        <img src="images/app/sam.jpg">
                                    </div>
                                    <a href="#!user"><img class="circle" src="images/app/pat.jpg"></a>
                                    <a href="#!name"><span class="white-text name">John Doe</span></a>
                                    <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
                                </div>
                            </li>
                            <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
                            <li><a href="#!">Second Link</a></li>
                            <li>
                                <div class="divider"></div>
                            </li>
                            <li><a class="subheader">Subheader</a></li>
                            <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
                        </ul>

                    </div>
                </nav>
            </div>
        </header>

        <main>
            <div class="container">
                <div class="row">
                            <div class="col m6 input-field">
                                <input id="first_name" type="text" class="validate">
                                <label for="firstname">First Name</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <label for="password">Password</label>
                                <input id="password" type="password" class="validate">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col s12">
                                This is an inline input field:
                                <div class="input-field inline">
                                    <i class="material-icons prefix">mail</i>
                                    <input id="email" type="email" class="validate">
                                    <label for="email" data-error="wrong" data-success="right">Email</label>
                                </div>
                            </div>
                        </div>
            </div>
        </main>

        <script src="js/jquery/jquery.min.js"></script>
        <script src="js/materialize.min.js"></script>

        <script>
            $('.button-collapse').sideNav({
                menuWidth: 310, // Default is 300
                edge: 'left', // Choose the horizontal origin
                closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
                draggable: true, // Choose whether you can drag to open on touch screens,
            });
        </script>
    </body>
</html>
