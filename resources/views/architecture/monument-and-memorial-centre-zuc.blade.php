@php
    $meta = [
       "title" => "Monument and Memorial Centre, Žuč | Emir Salihović Mimo",
       "description" => "A monument and museum commemorating the fallen soldiers and fighters of the Battles of Žuč.",
       "thumbnail" => config('app.cdn_endpoint') . "/img/og-architecture-zuc-thumbnail.jpg",
    ];

    $gallery = [
        [
            "img" => config('app.cdn_endpoint') . "/img/architecture/monument-and-memorial-centre-zuc/1.jpg",
            "title" => "Monument and Memorial Centre, Žuč",
            "thumb" => config('app.cdn_endpoint') . "/img/architecture/monument-and-memorial-centre-zuc/thumbnails/1_thumbnail.jpg",
        ],
        [
            "img" => config('app.cdn_endpoint') . "/img/architecture/monument-and-memorial-centre-zuc/2.jpg",
            "title" => "Monument and Memorial Centre, Žuč",
            "thumb" => config('app.cdn_endpoint') . "/img/architecture/monument-and-memorial-centre-zuc/thumbnails/2_thumbnail.jpg",
        ],
        [
            "img" => config('app.cdn_endpoint') . "/img/architecture/monument-and-memorial-centre-zuc/3.jpg",
            "title" => "Monument and Memorial Centre, Žuč",
            "thumb" => config('app.cdn_endpoint') . "/img/architecture/monument-and-memorial-centre-zuc/thumbnails/3_thumbnail.jpg",
        ],
        [
            "img" => config('app.cdn_endpoint') . "/img/architecture/monument-and-memorial-centre-zuc/4.jpg",
            "title" => "Monument and Memorial Centre, Žuč",
            "thumb" => config('app.cdn_endpoint') . "/img/architecture/monument-and-memorial-centre-zuc/thumbnails/4_thumbnail.jpg",
        ],
        [
            "img" => config('app.cdn_endpoint') . "/img/architecture/monument-and-memorial-centre-zuc/5.jpg",
            "title" => "Monument and Memorial Centre, Žuč",
            "thumb" => config('app.cdn_endpoint') . "/img/architecture/monument-and-memorial-centre-zuc/thumbnails/5_thumbnail.jpg",
        ],
//        [
//            "img" => config('app.cdn_endpoint') . "/img/architecture/monument-and-memorial-centre-zuc/6.jpg",
//            "title" => "Monument and Memorial Centre, Žuč",
//            "thumb" => config('app.cdn_endpoint') . "/img/architecture/monument-and-memorial-centre-zuc/thumbnails/6_thumbnail.jpg",
//        ],
//        [
//            "img" => config('app.cdn_endpoint') . "/img/architecture/monument-and-memorial-centre-zuc/7.jpg",
//            "title" => "Monument and Memorial Centre, Žuč",
//            "thumb" => config('app.cdn_endpoint') . "/img/architecture/monument-and-memorial-centre-zuc/thumbnails/7_thumbnail.jpg",
//        ],
        [
            "img" => config('app.cdn_endpoint') . "/img/architecture/monument-and-memorial-centre-zuc/12.jpg",
            "title" => "Monument and Memorial Centre, Žuč",
            "thumb" => config('app.cdn_endpoint') . "/img/architecture/monument-and-memorial-centre-zuc/thumbnails/12_thumbnail.jpg",
        ],
        [
            "img" => config('app.cdn_endpoint') . "/img/architecture/monument-and-memorial-centre-zuc/8.jpg",
            "title" => "Monument and Memorial Centre, Žuč",
            "thumb" => config('app.cdn_endpoint') . "/img/architecture/monument-and-memorial-centre-zuc/thumbnails/8_thumbnail.jpg",
        ],
        [
            "img" => config('app.cdn_endpoint') . "/img/architecture/monument-and-memorial-centre-zuc/9.jpg",
            "title" => "Monument and Memorial Centre, Žuč",
            "thumb" => config('app.cdn_endpoint') . "/img/architecture/monument-and-memorial-centre-zuc/thumbnails/9_thumbnail.jpg",
        ],
        [
            "img" => config('app.cdn_endpoint') . "/img/architecture/monument-and-memorial-centre-zuc/10.jpg",
            "title" => "Monument and Memorial Centre, Žuč",
            "thumb" => config('app.cdn_endpoint') . "/img/architecture/monument-and-memorial-centre-zuc/thumbnails/10_thumbnail.jpg",
        ],
        [
            "img" => config('app.cdn_endpoint') . "/img/architecture/monument-and-memorial-centre-zuc/11.jpg",
            "title" => "Monument and Memorial Centre, Žuč",
            "thumb" => config('app.cdn_endpoint') . "/img/architecture/monument-and-memorial-centre-zuc/thumbnails/11_thumbnail.jpg",
        ],
    ];
@endphp

<x-layout :meta="$meta">
    <h1 class="text-dark mb-0">Monument and Memorial Centre, Žuč</h1>
    <p class="city">Sarajevo</p>
    <div class="row">
        <div class="col-lg-7 col-md-7 description">
            <p>A monument and museum commemorating the fallen soldiers and fighters of the Battles of Žuč, which took place from 1992 to 1995. Crucial battles were fought at this locality in defence of the city during the Siege of Sarajevo.</p>
            <p>Co-author - Prof. Dr Hamdija Salihović</p>
        </div>
        <div class="col-lg-5 col-md-5 d-flex info">
            <div>
                <h2>Status</h2>
                <p>Under construction</p>
                <h2>Dates</h2>
                <p>2015 - </p>
                <h2>Address</h2>
                <p>Sarajevo, Bosnia and Herzegovina</p>
            </div>
        </div>
    </div>

    <x-gallery-render-single :gallery="$gallery" />

    <a class="float-right pb-3" href="{{ route('architecture') }}"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> return</a>

    @push('meta')
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
        <link rel="stylesheet" href="{{ asset('css/architecture.css') }} ">
    @endpush
</x-layout>
