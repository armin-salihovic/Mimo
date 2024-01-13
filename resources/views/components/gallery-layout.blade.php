<x-main-layout :meta="$meta">
    @if(isset($art))
        <x-lightbox-art-active-first :art="$art" :arts="$arts" />
    @else
        <x-lightbox-art />
    @endif

    <div class="container mx-auto">
        <div class="flex justify-center">
            <h1 class="px-4 text-3xl my-12 sm:text-4xl lg:text-5xl md:my-24 uppercase">Art</h1>
        </div>
        <div class="w-full flex justify-center">
            <div class="px-4 text-lg md:text-3xl flex gap-4 lg:gap-16 mb-12 lg:mb-24">
                @foreach($artLinks as $link)
                    <a href="{{ $link['route'] }}">{{ $link['name'] }}</a>
                @endforeach
            </div>
        </div>
        {{ $gallery }}
    </div>

    @push('meta')
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
        <link rel="stylesheet" href="{{ asset('css/architecture.css') }} ">
    @endpush
</x-main-layout>
