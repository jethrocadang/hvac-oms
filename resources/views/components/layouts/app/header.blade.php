<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom shadow-sm">
    <div class="container">
        <!-- Brand -->
        <a class="navbar-brand fw-semibold" href="{{ url('/') }}">
            Aeris
        </a>

        <!-- Mobile toggle -->
        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#publicNavbar"
                aria-controls="publicNavbar"
                aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar content -->
        <div class="collapse navbar-collapse" id="publicNavbar">
            <!-- Left links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}"
                       href="{{ url('/') }}">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" >
                        About
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" >
                        Contact
                    </a>
                </li>
            </ul>

            <!-- Right links -->
            <ul class="navbar-nav ms-auto">
                @guest
                    <!-- Guest -->
                    <li class="nav-item">
                        <a class="nav-link" >
                            Login
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="btn btn-primary ms-lg-2" >
                            Get Started
                        </a>
                    </li>
                @endguest

                @auth
                    <!-- Authenticated -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center"
                           href="#"
                           role="button"
                           data-bs-toggle="dropdown"
                           aria-expanded="false">
                            {{ auth()->user()->name }}
                        </a>

                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a class="dropdown-item" >
                                    Dashboard
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item" >
                                    Profile
                                </a>
                            </li>

                            <li><hr class="dropdown-divider"></li>

                            <li>
                                <form method="POST" action="{{ route('/') }}">
                                    @csrf
                                    <button class="dropdown-item text-danger" type="submit">
                                        Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
