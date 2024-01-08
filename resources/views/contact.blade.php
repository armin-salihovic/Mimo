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
            <h1 class="px-4 text-3xl my-12 sm:text-4xl lg:text-5xl md:my-24 uppercase">Contact</h1>

        </div>
        <div class="w-full lg:w-3/4">
            <div class="px-4 lg:pl-3 lg:pr-6 mb-4 h-full">

                <h2 class="text-2xl lg:text-5xl mb-6 lg:my-24">Selected Paintings</h2>

                <div id="gallery" class="columns-1 md:columns-2 lg:columns-3">

                </div>
            </div>
        </div>
    </div>

    @push('meta')
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
        <link rel="stylesheet" href="{{ asset('css/architecture.css') }} ">
    @endpush
</x-main-layout>
