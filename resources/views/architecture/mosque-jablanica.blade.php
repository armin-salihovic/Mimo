@php
    $meta = [
       "title" => "Mosque, Jablanica | Emir Salihović Mimo",
       "description" => "Project made in collaboration with his father, this modernist mosque stands in the centre of Jablanica.",
       "thumbnail" => config('app.cdn_endpoint') . "/img/og-architecture-mosque-jablanica-thumbnail.jpg",
    ];

    $gallery = [
        [
            "img" => config('app.cdn_endpoint') . "/img/architecture/mosque-jablanica/1.jpg",
            "title" => "Mosque, Jablanica",
            "thumb" => config('app.cdn_endpoint') . "/img/architecture/mosque-jablanica/thumbnails/1_thumbnail.jpg",
        ],
        [
            "img" => config('app.cdn_endpoint') . "/img/architecture/mosque-jablanica/2.jpg",
            "title" => "Mosque, Jablanica",
            "thumb" => config('app.cdn_endpoint') . "/img/architecture/mosque-jablanica/thumbnails/2_thumbnail.jpg",
        ],
        [
            "img" => config('app.cdn_endpoint') . "/img/architecture/mosque-jablanica/3.jpg",
            "title" => "Mosque, Jablanica",
            "thumb" => config('app.cdn_endpoint') . "/img/architecture/mosque-jablanica/thumbnails/3_thumbnail.jpg",
        ],
        [
            "img" => config('app.cdn_endpoint') . "/img/architecture/mosque-jablanica/4.jpg",
            "title" => "Mosque, Jablanica",
            "thumb" => config('app.cdn_endpoint') . "/img/architecture/mosque-jablanica/thumbnails/4_thumbnail.jpg",
        ],
        [
            "img" => config('app.cdn_endpoint') . "/img/architecture/mosque-jablanica/5.jpg",
            "title" => "Mosque, Jablanica",
            "thumb" => config('app.cdn_endpoint') . "/img/architecture/mosque-jablanica/thumbnails/5_thumbnail.jpg",
        ],
        [
            "img" => config('app.cdn_endpoint') . "/img/architecture/mosque-jablanica/6.jpg",
            "title" => "Mosque, Jablanica",
            "thumb" => config('app.cdn_endpoint') . "/img/architecture/mosque-jablanica/thumbnails/6_thumbnail.jpg",
        ],
        [
            "img" => config('app.cdn_endpoint') . "/img/architecture/mosque-jablanica/7.jpg",
            "title" => "Mosque, Jablanica",
            "thumb" => config('app.cdn_endpoint') . "/img/architecture/mosque-jablanica/thumbnails/7_thumbnail.jpg",
        ],
        [
            "img" => config('app.cdn_endpoint') . "/img/architecture/mosque-jablanica/8.jpg",
            "title" => "Mosque, Jablanica",
            "thumb" => config('app.cdn_endpoint') . "/img/architecture/mosque-jablanica/thumbnails/8_thumbnail.jpg",
        ],
        [
            "img" => config('app.cdn_endpoint') . "/img/architecture/mosque-jablanica/9.jpg",
            "title" => "Mosque, Jablanica",
            "thumb" => config('app.cdn_endpoint') . "/img/architecture/mosque-jablanica/thumbnails/9_thumbnail.jpg",
        ],
        [
            "img" => config('app.cdn_endpoint') . "/img/architecture/mosque-jablanica/10.jpg",
            "title" => "Mosque, Jablanica",
            "thumb" => config('app.cdn_endpoint') . "/img/architecture/mosque-jablanica/thumbnails/10_thumbnail.jpg",
        ],
        [
            "img" => config('app.cdn_endpoint') . "/img/architecture/mosque-jablanica/11.jpg",
            "title" => "Mosque, Jablanica",
            "thumb" => config('app.cdn_endpoint') . "/img/architecture/mosque-jablanica/thumbnails/11_thumbnail.jpg",
        ],
        [
            "img" => config('app.cdn_endpoint') . "/img/architecture/mosque-jablanica/12.jpg",
            "title" => "Mosque, Jablanica",
            "thumb" => config('app.cdn_endpoint') . "/img/architecture/mosque-jablanica/thumbnails/12_thumbnail.jpg",
        ],
    ];
@endphp

<x-layout :meta="$meta">

    <h1 class="text-dark mb-0">Mosque, Jablanica</h1>
    <p class="city">Jablanica</p>
    <div class="row">
        <div class="col-lg-7 col-md-7 description">
            <p>Another project made in collaboration with his father, this modernist mosque stands in the centre of Jablanica, nestled between socialist-era buildings on one side and Austro-Hungarian structures on the other.</p>
            <p>Co-author - Prof. Dr Hamdija Salihović</p>
        </div>
        <div class="col-lg-5 col-md-5 d-flex info">
            <div>
                <h2>Status</h2>
                <p>Realised</p>
                <h2>Dates</h2>
                <p>2004 - 2012</p>
                <h2>Address</h2>
                <p>Jablanica, Bosnia and Herzegovina</p>
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
