@php
$links = [
    [
        'name' => 'Instagram',
        'route' => ''
    ],
    [
        'name' => 'info@mimo.ba',
        'route' => 'mailto:info@mimo.ba'
    ],
];
@endphp

<div id="nav-desktop" class="relative bg-white sticky top-0 z-20 border-t-2 border-gray-100 transition ease-in-out duration-300 delay-200">
    <div class="mx-auto container px-4 sm:px-6">
        <div class="flex flex-col items-center justify-between py-6 md:justify-between md:flex-row">
            <div class="">
                <a href="{{ route('home') }}">
                    <span class="sr-only">Your Company</span>
                    <span class="h-8 w-auto sm:h-10 text-sm text-slate-900 uppercase">&copy; {{ date("Y") }} Emir Salihović</span>
                </a>
            </div>
            <nav class="space-x-5 md:space-x-10 md:flex">
                @foreach($links as $link)
                    <a href="{{ $link['route'] }}" class="text-sm uppercase font-medium text-black-500 hover:underline {{ Route::is($link['route']) ? 'underline' : '' }}">{{ $link['name'] }}</a>
                @endforeach
            </nav>
        </div>
    </div>
</div>
