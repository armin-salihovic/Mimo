@push('scripts')
    <script>
        window.addEventListener('scroll', handleScroll);

        const navDesktop = document.getElementById('nav-desktop')

        function handleScroll() {
            // when the user scrolls, check the pageYOffset
            if(window.pageYOffset>0){
                // user is scrolled
                navDesktop.classList.add('shadow-md')
            }else{
                // user is at top of page
                navDesktop.classList.remove('shadow-md')
            }
        }
    </script>
@endpush

@php
$links = [
    [
        'name' => 'Architecture',
        'route' => 'architecture'
    ],
    [
        'name' => 'Art',
        'route' => 'art'
    ],
    [
        'name' => 'Sculpture',
        'route' => 'sculpture'
    ],
    [
        'name' => 'Design',
        'route' => 'design'
    ],
    [
        'name' => 'About',
        'route' => 'about'
    ],
    [
        'name' => 'Contact',
        'route' => 'contact'
    ],
    [
        'name' => 'News',
        'route' => 'news'
    ],
];
@endphp


<!-- This example requires Tailwind CSS v2.0+ -->
<div x-data="{ open: false }" id="nav-desktop" class="relative bg-white mb-5 sticky top-0 z-20 border-b-2 border-gray-100 transition ease-in-out duration-300 delay-200">
    <div class="mx-auto container px-4 sm:px-6">
        <div class="flex items-center justify-between py-6 md:justify-start">
            <div class="flex justify-start lg:w-1/4">
                <a href="{{ route('home') }}">
                    <span class="sr-only">Your Company</span>
                    <span class="h-8 w-auto sm:h-10 text-xl text-slate-900 logo">MIMO</span>
                </a>
            </div>
            <div class="-my-2 -mr-2 md:hidden">
                <button @click="open = ! open" id="mob-menu" type="button" class="inline-flex items-center justify-center bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
                    <span class="sr-only">Open menu</span>
                    <!-- Heroicon name: outline/bars-3 -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
            <nav class="hidden space-x-10 md:flex lg:w-2/4">
                @foreach($links as $link)
                    <a href="{{ route($link['route']) }}" class="text-sm uppercase font-medium text-black-500 hover:underline {{ Route::is($link['route']) ? 'underline' : '' }}">{{ $link['name'] }}</a>
                @endforeach
            </nav>
        </div>
    </div>

    <div x-show="open"
         x-transition:enter="duration-200 ease-out"
         x-transition:enter-start="opacity-0 scale-95"
         x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="duration-100 ease-in"
         x-transition:leave-start="opacity-100 scale-100"
         x-transition:leave-end="opacity-0 scale-95"
         x-cloak
         id="mob-menu-details"
         class="absolute inset-x-0 top-0 origin-top-right transform p-2 transition"
    >
        <div class="divide-y-2 divide-gray-50 bg-white shadow-lg ring-1 ring-black ring-opacity-5">
            <div class="px-5 pt-5 pb-6">
                <div class="flex items-center justify-between">
                    <div>
                        <span class="h-8 w-auto">MIMO</span>
{{--                        <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">--}}
                    </div>
                    <div class="-mr-2">
                        <button @click="open = !open" id="menu-close" type="button" class="inline-flex items-center justify-center bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                            <span class="sr-only">Close menu</span>
                            <!-- Heroicon name: outline/x-mark -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="mt-6">
                    <nav class="grid gap-y-8">
                        @foreach($links as $link)
                        <a href="{{ route($link['route']) }}" class="-m-3 flex items-center p-3 hover:bg-gray-50">
                            <span class="text-sm font-medium text-gray-900 uppercase">{{ $link['name'] }}</span>
                        </a>
                        @endforeach
                    </nav>
                </div>
            </div>
            <div class="space-y-6 py-6 px-5">
                <a href="#" class="-m-3 flex items-center p-3 hover:bg-gray-50">
                    <!-- Heroicon name: outline/chart-bar -->
                    <i class="fa fa-instagram text-xl" aria-hidden="true"></i>

                    <span class="ml-3 text-base font-medium text-gray-900">Instagram</span>
                </a>
            </div>
        </div>
    </div>
</div>
