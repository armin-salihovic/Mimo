@php
    $meta = [
       "title" => "Monument and Memorial Centre, Žuč | Emir Salihović Mimo",
       "description" => "A monument and museum commemorating the fallen soldiers and fighters of the Battles of Žuč.",
       "thumbnail" => "https://cdn.mimo.ba/img/og-architecture-zuc-thumbnail.jpg",
    ];

    $gallery = [
        [
            "img" => "https://cdn.mimo.ba/img/architecture/monument-and-memorial-centre-zuc/1.jpg",
            "title" => "Monument and Memorial Centre, Žuč",
            "thumb" => "https://cdn.mimo.ba/img/architecture/monument-and-memorial-centre-zuc/thumbnails/1_thumbnail.jpg",
        ],
        [
            "img" => "https://cdn.mimo.ba/img/architecture/monument-and-memorial-centre-zuc/2.jpg",
            "title" => "Monument and Memorial Centre, Žuč",
            "thumb" => "https://cdn.mimo.ba/img/architecture/monument-and-memorial-centre-zuc/thumbnails/2_thumbnail.jpg",
        ],
        [
            "img" => "https://cdn.mimo.ba/img/architecture/monument-and-memorial-centre-zuc/3.jpg",
            "title" => "Monument and Memorial Centre, Žuč",
            "thumb" => "https://cdn.mimo.ba/img/architecture/monument-and-memorial-centre-zuc/thumbnails/3_thumbnail.jpg",
        ],
        [
            "img" => "https://cdn.mimo.ba/img/architecture/monument-and-memorial-centre-zuc/4.jpg",
            "title" => "Monument and Memorial Centre, Žuč",
            "thumb" => "https://cdn.mimo.ba/img/architecture/monument-and-memorial-centre-zuc/thumbnails/4_thumbnail.jpg",
        ],
        [
            "img" => "https://cdn.mimo.ba/img/architecture/monument-and-memorial-centre-zuc/5.jpg",
            "title" => "Monument and Memorial Centre, Žuč",
            "thumb" => "https://cdn.mimo.ba/img/architecture/monument-and-memorial-centre-zuc/thumbnails/5_thumbnail.jpg",
        ],
//        [
//            "img" => "https://cdn.mimo.ba/img/architecture/monument-and-memorial-centre-zuc/6.jpg",
//            "title" => "Monument and Memorial Centre, Žuč",
//            "thumb" => "https://cdn.mimo.ba/img/architecture/monument-and-memorial-centre-zuc/thumbnails/6_thumbnail.jpg",
//        ],
//        [
//            "img" => "https://cdn.mimo.ba/img/architecture/monument-and-memorial-centre-zuc/7.jpg",
//            "title" => "Monument and Memorial Centre, Žuč",
//            "thumb" => "https://cdn.mimo.ba/img/architecture/monument-and-memorial-centre-zuc/thumbnails/7_thumbnail.jpg",
//        ],
        [
            "img" => "https://cdn.mimo.ba/img/architecture/monument-and-memorial-centre-zuc/12.jpg",
            "title" => "Monument and Memorial Centre, Žuč",
            "thumb" => "https://cdn.mimo.ba/img/architecture/monument-and-memorial-centre-zuc/thumbnails/12_thumbnail.jpg",
        ],
        [
            "img" => "https://cdn.mimo.ba/img/architecture/monument-and-memorial-centre-zuc/8.jpg",
            "title" => "Monument and Memorial Centre, Žuč",
            "thumb" => "https://cdn.mimo.ba/img/architecture/monument-and-memorial-centre-zuc/thumbnails/8_thumbnail.jpg",
        ],
        [
            "img" => "https://cdn.mimo.ba/img/architecture/monument-and-memorial-centre-zuc/9.jpg",
            "title" => "Monument and Memorial Centre, Žuč",
            "thumb" => "https://cdn.mimo.ba/img/architecture/monument-and-memorial-centre-zuc/thumbnails/9_thumbnail.jpg",
        ],
        [
            "img" => "https://cdn.mimo.ba/img/architecture/monument-and-memorial-centre-zuc/10.jpg",
            "title" => "Monument and Memorial Centre, Žuč",
            "thumb" => "https://cdn.mimo.ba/img/architecture/monument-and-memorial-centre-zuc/thumbnails/10_thumbnail.jpg",
        ],
        [
            "img" => "https://cdn.mimo.ba/img/architecture/monument-and-memorial-centre-zuc/11.jpg",
            "title" => "Monument and Memorial Centre, Žuč",
            "thumb" => "https://cdn.mimo.ba/img/architecture/monument-and-memorial-centre-zuc/thumbnails/11_thumbnail.jpg",
        ],
    ];
@endphp

<x-main-layout :meta="$meta">
    <div class="mx-auto container lg:flex">
        <div class="w-full lg:w-1/2">
            <div class="max-w-6xl mx-auto mb-8 lg:px-6 pt-4">
                <img src="{{ $architecture->image('cover') }}" alt="{{ $architecture->imageAltText('cover') }}">
            </div>

            <div class="px-4 sm:px-6 mb-8 pt-4">
                <h1 class="text-2xl uppercase">{{ $architecture->title }}</h1>
                <h2 class="text-lg uppercase text-gray-900 pt-1">Sarajevo</h2>
            </div>

            <div class="px-4 sm:px-6 mb-8 text-lg">
                {!! $architecture->renderBlocks() !!}
            </div>

            <div class="px-4 sm:px-6 mb-8">
                <div class="border-b border-gray-400"></div>
            </div>

            <div class="px-4 sm:px-6 mb-8">
                <div class="col-lg-5 col-md-5 d-flex info">
                    <div>
                        <div class="mb-4">
                            <h2 class="uppercase text-gray-900 pt-1">Status</h2>
                            <p class="text-lg">{{ $architecture->status }}</p>
                        </div>
                        <div class="mb-4">
                            <h2 class="uppercase text-gray-900 pt-1">Dates</h2>
                            @if($architecture->start_year === $architecture->end_year)
                                <p class="text-lg">{{ $architecture->start_year }} </p>
                            @elseif($architecture->end_year === null || $architecture->end_year === '')
                                <p class="text-lg">{{ $architecture->start_year }} - </p>
                            @else
                                <p class="text-lg">{{ $architecture->start_year }} - {{$architecture->end_year}}</p>
                            @endif
                        </div>
                        <div class="mb-4">
                            <h2 class="uppercase text-gray-900 pt-1">Location</h2>
                            <p class="text-lg">{{ $architecture->location }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full lg:w-1/2 lg:pt-4">
            <div class="px-4 sm:px-6 mb-4">
                <div id="gallery" class="columns-1 md:columns-2 lg:columns-2">
                        @foreach($architecture->images('images', 'free') as $img)
                        <a class="gallery-item" href="{{ $img }}">
                            <x-image-arch class="mb-4" :img="$img" />
                        </a>
                        @endforeach
                </div>
            </div>
        </div>
    </div>

    <x-lightbox />
</x-main-layout>
