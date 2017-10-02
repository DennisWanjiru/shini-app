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