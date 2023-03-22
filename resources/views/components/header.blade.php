<header>
    <nav class="navbar px-0 navbar-expand-sm center">
        <a class="navbar-brand" href="{{ route('home') }}"><span class="navbar-text text-dark">MIMO</span></a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#this-collapse">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="this-collapse">

            <ul class="navbar-nav align-items-center">
                <li class="nav-item pr-3">
                    <a class="nav-link {{ Request::segment(1) === 'architecture' ? 'nav-active' : 'text-dark' }}" href="{{ route('architecture') }}">Architecture</a>
                </li>
                <li class="nav-item pr-3">
                    <a class="nav-link {{ Route::is('art.*', 'art') ? 'nav-active' : 'text-dark' }}" href="{{ route('art') }}">Art</a>
                </li>
                <li class="nav-item pr-3">
                    <a class="nav-link {{ Route::is('design') ? 'nav-active' : 'text-dark' }}" href="{{ route('design') }}">Design</a>
                </li>
                <li class="nav-item pr-3">
                    <a class="nav-link {{ Route::is('sculpture') ? 'nav-active' : 'text-dark' }}" href="{{ route('sculpture') }}">Sculpture</a>
                </li>
                <li class="nav-item pr-3">
                    <a class="nav-link {{ Route::is('about') ? 'nav-active' : 'text-dark' }}" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item pr-3">
                    <a class="nav-link {{ Route::is('contact') ? 'nav-active' : 'text-dark' }}" href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
