
<!---navbar section--->
<nav class="navbar navbar-light navbar-expand-md fixed-top">

    <a class="navbar-brand" href=""> @yield('brand') </a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="collapsibleNavbar">

        <ul class="navbar-nav ml-auto">

                @if( Auth::check() )

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home.content') }}">Home</a>
                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                            Profile(<i>{{ Auth::user()->username }}</i>)<span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <h3 class="dropdown-header"><i class="fas fa-cog"></i> Account Setting</h3>

                            <a class="dropdown-item" href="{{ route('form.show') }}"><i class="fas fa-user-circle"></i> Add User</a>


                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">

                                <i class="fas fa-power-off"></i>{{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>


                @else

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('index') }}">Home</a>
                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                            Profile <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <h3 class="dropdown-header"><i class="fas fa-cog"></i> Account Setting</h3>

                            <a class="dropdown-item" href="{{ route('login') }}"><i class="fas fa-user-circle"></i> Login</a>
                            <a class="dropdown-item" href="{{ route('register') }}"><i class="fas fa-sign-out-alt"></i> Register</a>

                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>


                @endif

        </ul>

    </div>

</nav>

