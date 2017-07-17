<header class="header" id="header">
        <nav>
            <div class="nav-wrapper">
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">reorder</i></a>
                <a href="#" class="brand-logo center hide">Deng</a>
                <ul id="nav-mobile" class="left hide-on-med-and-down">
                    <li><a href="http://dengneyal.com/#home">Home</a></li>
                    <li><a href="http://dengneyal.com/#portfolio">Portfolio</a></li>
                    <li><a href="http://dengneyal.com/#about">About</a></li>
                    <li><a href="http://#dengneyal.com/#contact">Contact</a></li>
                </ul>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-button" href="!#" data-activates="dropdown1" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-content" id="dropdown1" role="menu">
                                <li><a href="{{ url('/dashboard') }}"><i class="fa fa-btn fa-sign-out"></i>Dashboard</a></li>                                
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
                <ul class="side-nav" id="mobile-demo" style="transform: translateX(-100%);">
                    <li><a href="http://dengneyal.com/#home">Home</a></li>
                    <li><a href="http://dengneyal.com/#portfolio">Portfolio</a></li>
                    <li><a href="http://dengneyal.com/#about">About</a></li>
                    <li><a href="#http://dengneyal.com/contact">Contact</a></li>
                </ul>
            </div>
        </nav>
        <div class="header-content grey-text text-lighten-2">
            <h1 class="center">DENG A <span class="blue-text">NEYAL</span></h1>
            <h3 class="center" style="font-weight:300;">BLOG</h3>
    </header>