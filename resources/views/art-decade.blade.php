@php
    $meta = [
       "title" => "Monument and Memorial Centre, Žuč | Emir Salihović Mimo",
       "description" => "A monument and museum commemorating the fallen soldiers and fighters of the Battles of Žuč.",
       "thumbnail" => "https://cdn.mimo.ba/img/og-architecture-zuc-thumbnail.jpg",
    ];

    $seen = [];
@endphp

<x-main-layout :meta="$meta">
    <div class="container mx-auto lg:flex">
        <div class="w-full lg:w-1/4">
            <div class="flex justify-between px-4">
                <h1 class="text-3xl my-12 sm:text-4xl lg:text-5xl md:my-24 uppercase">Art</h1>
                <div class="my-12"></div>
            </div>

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
            <div class="px-4 lg:pr-6 lg:pl-10 mb-4 h-full">
                <div id="gallery" >
                @foreach($arts as $art)
                    @if(!in_array($art->year, $seen))

                        @php
                            $seen[] = $art->year;
                        @endphp

                        <h2 class="text-2xl lg:text-5xl mb-6 lg:my-24">{{ $art->year }}</h2>

                        <div class="columns-1 md:columns-2 lg:columns-3">
                            @foreach($arts as $art2)
                                @if($art->year === $art2->year)
                                    <a class="gallery-item"
                                       href="{{ $art2->image('image', 'free') }}"
                                       title="some title"
                                       data-year="{{ $art2->year }}"
                                       data-width="{{ $art2->width }}"
                                       data-height="{{ $art2->height }}"
                                       data-status="{{ $art2->status }}"
                                       data-sn="{{ $art2->serial_number }}"
                                    >
                                        <x-image-art class="mb-4"
                                                 :alt="$art2->imageAltText('image')"
                                                 :img="$art2->image('image', 'free')"
                                        />
                                    </a>
                                @endif
                            @endforeach
{{--                            </div>--}}
                        </div>


                    @endif
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
