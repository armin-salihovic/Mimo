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

@push('scripts')
    <script>
        var introContent = document.getElementById('intro-content');
        var archGallery = document.getElementById('arch-gallery');

        function setIntroContentMarginBottom() {
            if (introContent.offsetHeight < window.innerHeight) {
                introContent.style.marginBottom = window.innerHeight - (introContent.offsetHeight + 76) + 'px';
            }
        }

        setIntroContentMarginBottom();

        window.addEventListener("resize", (event) => {
            setIntroContentMarginBottom();
        });
    </script>
@endpush

@push('styles')
    <style>
        .custom-wysiwyg > p {
            margin-bottom: 1rem;
        }
    </style>
@endpush

<x-main-layout :meta="$meta">
    <x-lazy-loading/>
    <x-scroll-to-top/>
    <div class="mx-auto px-6">
        <div class="">
            <div class="py-32 lg:py-64" id="intro-content">
                <div class="grid grid-cols-1 gap-8 md:grid-cols-2 md:gap-16 lg:gap-24">
                    <div class="">
                        <h1 class="text-2xl sm:text-4xl text-neutral-900 font-bold tracking-wider">
                            {{ $architecture->title }}</h1>
                        <h2 class="text-lg lg:text-xl">{{ $architecture->location }}</h2>
                        <h2 class="lg:text-lg">{{ $architecture->status }}</h2>
                        <h2 class="lg:text-lg">
                            @if($architecture->start_year === $architecture->end_year)
                                <p class="text-lg">{{ $architecture->start_year }} </p>
                            @elseif($architecture->end_year === null || $architecture->end_year === '')
                                <p class="text-lg">{{ $architecture->start_year }} - </p>
                            @else
                                <p class="text-lg">{{ $architecture->start_year }} - {{$architecture->end_year}}</p>
                            @endif
                        </h2>
                    </div>
                    <div class="text-xl leading-7 lg:leading-10 custom-wysiwyg">{!! $architecture->intro !!}</div>
                </div>
            </div>
            <div id="arch-gallery" class="w-full pb-32 lg:pb-64">
                <div class="mb-4">
                    <div id="gallery" class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        @foreach($architecture->imagesAsArraysWithCrops('images') as $img)
                            <x-lazy-loading-wrapper :lqip="$img['mobile']['lqip']">
                                <a class="gallery-item h-full" href="{{ $img['free']['src'] }}" title="{{$img['mobile']['alt']}}">
                                    <x-image-arch class="h-full" :img="$img['mobile']['src']" :alt="$img['mobile']['alt']" aspect-ratio="1/1"/>
                                </a>
                            </x-lazy-loading-wrapper>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <x-lightbox/>
    </div>
</x-main-layout>
