<header>
    <nav class="navbar px-0 navbar-expand-sm center">
        <a class="navbar-brand" href="{{ route('home') }}"><span class="navbar-text text-dark">MIMO</span></a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#this-collapse">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="this-collapse">

            <ul class="navbar-nav align-items-center">
                <li class="nav-item">
                    <a class="nav-link {{ Request::segment(1) === 'architecture' ? 'text-danger' : 'text-dark' }}" href="{{ route('architecture') }}">Architecture</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('art') ? 'text-danger' : 'text-dark' }}" href="{{ route('art') }}">Art</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('design') ? 'text-danger' : 'text-dark' }}" href="{{ route('design') }}">Design</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('sculpture') ? 'text-danger' : 'text-dark' }}" href="{{ route('sculpture') }}">Sculpture</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('about') ? 'text-danger' : 'text-dark' }}" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('contact') ? 'text-danger' : 'text-dark' }}" href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
