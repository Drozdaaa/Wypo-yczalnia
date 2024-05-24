<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand">Wypożyczalnia maszyn</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link @if (str_contains(request()->path(), 'offers')) active @endif" href="{{ route('offers.index') }}">Oferty</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if (str_contains(request()->path(), 'machines')) active @endif" href="{{ route('machines.index') }}">Maszyny</a>
                </li>

            </ul>
        </div>
        <ul id="navbar-user" class="navbar-nav mb-2 mb-lg-0">
            @if (Auth::check())
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}">{{ Auth::user()->name }}, wyloguj się... </a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Zaloguj się...</a>
                </li>
            @endif
        </ul>
    </div>

</nav>
