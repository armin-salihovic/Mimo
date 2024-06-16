<div class="relative inline-block text-left" x-data="{ open: false }">
    <div>
        <button @click="open = !open" type="button"
                class="inline-flex w-full justify-center items-center gap-x-2 bg-white"
                id="menu-button" aria-expanded="true" aria-haspopup="true">
            <span>{{ $default ?? 'Options' }}</span>
            <svg class="-mr-1 mt-1.5 h-5 w-5 text-neutral-900" fill="currentColor" aria-hidden="true" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                 viewBox="0 0 407.437 407.437" xml:space="preserve">
<polygon points="386.258,91.567 203.718,273.512 21.179,91.567 0,112.815 203.718,315.87 407.437,112.815 "/>
</svg>
            {{--            <svg class="-mr-1 h-10 w-10 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">--}}
            {{--                <path fill-rule="evenodd"--}}
            {{--                      d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"--}}
            {{--                      clip-rule="evenodd"/>--}}
            {{--            </svg>--}}
        </button>
    </div>
{{--    absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none--}}
    <div
        x-show="open"
        x-transition:enter="transition ease-out duration-100"
        x-transition:enter-start="transform opacity-0 scale-95"
        x-transition:enter-end="transform opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75"
        x-transition:leave-start="transform opacity-100 scale-100"
        x-transition:leave-end="transform opacity-0 scale-95"
        x-cloak
        class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
        role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
        <div class="py-1" role="none">
            <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
            @foreach($artLinks as $route => $name)
                @if(!in_array($route, $exclude))
                    <a href="{{ route($route) }}" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                       id="menu-item-0">{{ $name }}</a>
                @endif
            @endforeach
        </div>
    </div>
</div>
