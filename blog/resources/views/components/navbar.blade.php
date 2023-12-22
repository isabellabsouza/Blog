<nav class="navbar navbar-expand-lg bg-body-tertiary nav-color">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="/assets/logo.png" width="100">
        </a>
        <button class="navbar-toggler nav-text-color" 
            type="button" 
            data-bs-toggle="collapse" 
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" 
            aria-expanded="false" 
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link nav-text-color" href="">Posts</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle nav-text-color" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Categorias
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item nav-text-color" href="#">Action</a></li>
                        <li><a class="dropdown-item nav-text-color" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item nav-text-color" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    @if (Route::has('login'))
                        @auth
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="nav-link nav-text-color" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                {{ __('Logout') }}
                            </a>
                        </form>
                        @else
                            <a class="nav-link nav-text-color" href="{{ url('login') }}">Login</a>

                        @endauth
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>
