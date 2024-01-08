@php
    $meta = [
       "title" => "Monument and Memorial Centre, Žuč | Emir Salihović Mimo",
       "description" => "A monument and museum commemorating the fallen soldiers and fighters of the Battles of Žuč.",
       "thumbnail" => "https://cdn.mimo.ba/img/og-architecture-zuc-thumbnail.jpg",
    ];
@endphp

<x-main-layout :meta="$meta">
    <div class="container mx-auto lg:flex">
        <div class="w-full lg:w-1/4">
            <h1 class="px-4 text-3xl my-12 sm:text-4xl lg:text-5xl md:my-24 uppercase">Art</h1>

            <div class="px-4 lg:flex-col text-xl lg:text-3xl flex gap-5">
                @foreach($artLinks as $link)
                    <a class="mb-10" href="{{ $link['route'] }}">{{ $link['name'] }}</a>
                @endforeach
            </div>

            @if(isset($art))
                <x-lightbox-art-active-first :art="$art" :arts="$arts" />
            @else
                <x-lightbox-art />
            @endif

        </div>
        <div class="w-full lg:w-3/4">
            <div class="px-4 lg:pl-3 lg:pr-6 mb-4 h-full">

                <h2 class="text-2xl lg:text-5xl mb-6 lg:my-24">Selected Paintings</h2>
                <div id="gallery" class="columns-1 md:columns-2 lg:columns-3">
                    @foreach($arts as $art)
                        <a class="gallery-item"
                           href="{{ $art->image('image', 'free') }}"
                           title="some title"
                           data-year="{{ $art->year }}"
                           data-width="{{ $art->width }}"
                           data-height="{{ $art->height }}"
                           data-status="{{ $art->status }}"
                           data-sn="{{ $art->serial_number }}"
                        >
                            <x-image-art class="mb-4"
                                     :alt="$art->imageAltText('image')"
                                     :img="$art->image('image', 'free')"
                            />
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    @push('meta')
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
        <link rel="stylesheet" href="{{ asset('css/architecture.css') }} ">
    @endpush
</x-main-layout>
