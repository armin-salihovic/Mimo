<nav class="d-none d-sm-flex">
    <a href="{{ route('art') }}" class="mr-3 {{ Route::is('art') ? 'nav-active' : 'text-dark' }}">Select work</a>
    <a href="{{ route('art.2020') }}" class="mr-3 {{ Route::is('art.2020') ? 'nav-active' : 'text-dark' }}">2020s</a>
    <a href="{{ route('art.2010') }}" class="mr-3 {{ Route::is('art.2010') ? 'nav-active' : 'text-dark' }}">2010s</a>
    <a href="{{ route('art.2000') }}" class="mr-3 {{ Route::is('art.2000') ? 'nav-active' : 'text-dark' }}">2000s</a>
    <a href="{{ route('art.1990') }}" class="mr-3 {{ Route::is('art.1990') ? 'nav-active' : 'text-dark' }}">1990s</a>
    <a href="{{ route('art.1980') }}" class="mr-3 {{ Route::is('art.1980') ? 'nav-active' : 'text-dark' }}">1980s</a>
</nav>

<div class="d-sm-none dropdown show">
    <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        {{ Route::is('art') ? 'Select work' : '' }}
        {{ Route::is('art.2020') ? '2020s' : '' }}
        {{ Route::is('art.2010') ? '2010s' : '' }}
        {{ Route::is('art.2000') ? '2000s' : '' }}
        {{ Route::is('art.1990') ? '1990s' : '' }}
        {{ Route::is('art.1980') ? '1980s' : '' }}
    </a>

    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        @if(!Route::is('art'))
            <a class="dropdown-item" href="{{ route('art') }}">Select work</a>
        @else
            <a class="dropdown-item" href="#"><u>Select work</u></a>
        @endif
        @if(!Route::is('art.2020'))
            <a class="dropdown-item" href="{{ route('art.2020') }}">2020s</a>
        @else
            <a class="dropdown-item" href="#"><u>2020s</u></a>
        @endif
        @if(!Route::is('art.2010'))
            <a class="dropdown-item" href="{{ route('art.2010') }}">2010s</a>
        @else
            <a class="dropdown-item" href="#"><u>2010s</u></a>
        @endif
        @if(!Route::is('art.2000'))
            <a class="dropdown-item" href="{{ route('art.2000') }}">2000s</a>
        @else
            <a class="dropdown-item" href="#"><u>2000s</u></a>
        @endif
        @if(!Route::is('art.1990'))
            <a class="dropdown-item" href="{{ route('art.1990') }}">1990s</a>
        @else
            <a class="dropdown-item" href="#"><u>1990s</u></a>
        @endif
        @if(!Route::is('art.1980'))
            <a class="dropdown-item" href="{{ route('art.1980') }}">1980s</a>
        @else
            <a class="dropdown-item" href="#"><u>1980s</u></a>
        @endif
    </div>
</div>

<hr class="py-4 w-50">
