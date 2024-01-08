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


    <!-- This example requires Tailwind CSS v2.0+ -->
<div id="nav-desktop" class="relative bg-white sticky top-0 z-20 border-t-2 border-gray-100 transition ease-in-out duration-300 delay-200">
    <div class="mx-auto container px-4 sm:px-6">
        <div class="flex items-center justify-between py-6 md:justify-start">
            <div class="flex justify-start lg:w-1/4">
                <a href="{{ route('home') }}">
                    <span class="sr-only">Your Company</span>
                    <span class="h-8 w-auto sm:h-10 text-xl text-slate-900 logo">Emir Salihović</span>
                </a>
            </div>
            <nav class="space-x-10 md:flex lg:w-2/4">
                @foreach($links as $link)
                    <a href="{{ $link['route'] }}" class="text-sm uppercase font-medium text-black-500 hover:underline {{ Route::is($link['route']) ? 'underline' : '' }}">{{ $link['name'] }}</a>
                @endforeach
            </nav>
            <div class="hidden items-center justify-end md:flex md:flex-1 lg:w-2/4">
                {{--                <a href="#">--}}
                {{--                    <i class="fa fa-facebook-official text-xl mr-3" aria-hidden="true"></i>--}}
                {{--                </a>--}}

{{--                <a href="#">--}}
{{--                    <i class="fa fa-instagram text-xl" aria-hidden="true"></i>--}}
{{--                </a>--}}
            </div>
        </div>
    </div>
</div>
