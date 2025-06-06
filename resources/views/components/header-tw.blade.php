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
        'route' => 'designs'
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
<div x-data="{ open: false }" id="nav-desktop" class="relative bg-white sticky top-0 z-[60] border-b-2 border-gray-100 transition ease-in-out duration-300 delay-200">
    <div class="mx-auto px-4 sm:px-6">
        <div class="flex items-center justify-between py-6 md:justify-start md:space-x-10">
            <div class="flex justify-start lg:w-0 lg:flex-1">
                <a href="{{ route('home') }}">
                    <span class="sr-only">Emir Salihović Mimo</span>
                    <span class="h-8 w-auto sm:h-10 text-xl text-neutral-900 logo">MIMO</span>
                </a>
            </div>
            <div class="-my-2 -mr-2 md:hidden">
                <button @click="open = ! open" id="mob-menu" type="button" class="inline-flex items-center justify-center bg-white p-2 text-neutral-900 hover:bg-gray-100 hover:text-neutral-950 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
                    <span class="sr-only">Open menu</span>
                    <!-- Heroicon name: outline/bars-3 -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
            <nav class="hidden space-x-10 md:flex">
                @foreach($links as $link)
                    <a href="{{ route($link['route']) }}" class="text-sm uppercase font-medium text-neutral-900 hover:underline {{ Route::is($link['route']) || request()->is($link['route'] . '/*') ? 'underline' : '' }}">{{ $link['name'] }}</a>
                @endforeach
            </nav>
            <div class="hidden items-center justify-end md:flex md:flex-1 lg:w-0 text-neutral-900">
{{--                <a href="#">--}}
{{--                    <i class="fa fa-facebook-official text-xl mr-3" aria-hidden="true"></i>--}}
{{--                </a>--}}
                <a href="https://www.instagram.com/mimoarchitect/">
                    <i class="fa fa-instagram text-xl" aria-hidden="true"></i>
                </a>
            </div>
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
                            <!-- Heroicon name: outline/chart-bar -->
{{--                            <svg class="h-6 w-6 flex-shrink-0 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">--}}
{{--                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />--}}
{{--                            </svg>--}}
                            <span class="text-sm font-medium text-gray-900 uppercase">{{ $link['name'] }}</span>
                        </a>
                        @endforeach
                    </nav>
                </div>
            </div>
            <div class="space-y-6 py-6 px-5">
                <a href="https://www.facebook.com/mimo.1960" class="-m-3 flex items-center p-3 hover:bg-gray-50">
                    <!-- Heroicon name: outline/chart-bar -->
                    <i class="fa fa-facebook-official text-xl" aria-hidden="true"></i>
                    <span class="ml-3 text-base font-medium text-gray-900">Facebook</span>
                </a>
                <a href="https://www.instagram.com/mimoarchitect/" class="-m-3 flex items-center p-3 hover:bg-gray-50">
                    <!-- Heroicon name: outline/chart-bar -->
                    <i class="fa fa-instagram text-xl" aria-hidden="true"></i>

                    <span class="ml-3 text-base font-medium text-gray-900">Instagram</span>
                </a>
{{--                <div class="grid grid-cols-2 gap-y-4 gap-x-8">--}}
{{--                    <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">Pricing</a>--}}

{{--                    <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">Docs</a>--}}

{{--                    <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">Help Center</a>--}}

{{--                    <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">Guides</a>--}}

{{--                    <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">Events</a>--}}

{{--                    <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">Security</a>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
</div>
