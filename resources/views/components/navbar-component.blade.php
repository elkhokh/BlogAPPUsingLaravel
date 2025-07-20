<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="{{ url('index') }}">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto py-4 py-lg-0">
                <li class="nav-item">
                    <a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ url('index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ url('form') }}">Form</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ url('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ url('post') }}">Sample Post</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ url('contact') }}">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ url('/product/create') }}">Product</a>
                </li>

                @if (Route::has('login'))
                    @auth
                        <li class="nav-item">
                            <a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ url('/dashboard') }}">Dashboard</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ route('login') }}">Log in</a>
                        </li>

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ route('register') }}">Register</a>
                            </li>
                        @endif
                    @endauth
                @endif
            </ul>
        </div>
    </div>
</nav>
