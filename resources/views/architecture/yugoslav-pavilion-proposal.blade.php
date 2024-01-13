@php
    $meta = [
       "title" => "Yugoslav Pavilion proposal | Emir Salihović Mimo",
       "description" => "Proposal for the Yugoslavian pavilion for the Seville Expo ‘92.",
       "thumbnail" => config('app.cdn_endpoint') . "/img/og-architecture-yugoslav-pavilion-proposal-thumbnail.jpg",
    ];

    $gallery = [
        [
            "img" => config('app.cdn_endpoint') . "/img/architecture/yugoslav-pavilion-proposal/1.jpg",
            "title" => "Yugoslav Pavilion proposal - Perspective 1",
            "thumb" => config('app.cdn_endpoint') . "/img/architecture/yugoslav-pavilion-proposal/thumbnails/1_thumbnail.jpg",
        ],
        [
            "img" => config('app.cdn_endpoint') . "/img/architecture/yugoslav-pavilion-proposal/2.jpg",
            "title" => "Yugoslav Pavilion proposal - Perspective 2",
            "thumb" => config('app.cdn_endpoint') . "/img/architecture/yugoslav-pavilion-proposal/thumbnails/2_thumbnail.jpg",
        ],
        [
            "img" => config('app.cdn_endpoint') . "/img/architecture/yugoslav-pavilion-proposal/3.jpg",
            "title" => "Yugoslav Pavilion proposal - Perspective 3",
            "thumb" => config('app.cdn_endpoint') . "/img/architecture/yugoslav-pavilion-proposal/thumbnails/3_thumbnail.jpg",
        ],
        [
            "img" => config('app.cdn_endpoint') . "/img/architecture/yugoslav-pavilion-proposal/4.jpg",
            "title" => "Yugoslav Pavilion proposal - Facade",
            "thumb" => config('app.cdn_endpoint') . "/img/architecture/yugoslav-pavilion-proposal/thumbnails/4_thumbnail.jpg",
        ],
        [
            "img" => config('app.cdn_endpoint') . "/img/architecture/yugoslav-pavilion-proposal/5.jpg",
            "title" => "Yugoslav Pavilion proposal - Plan",
            "thumb" => config('app.cdn_endpoint') . "/img/architecture/yugoslav-pavilion-proposal/thumbnails/5_thumbnail.jpg",
        ],
        [
            "img" => config('app.cdn_endpoint') . "/img/architecture/yugoslav-pavilion-proposal/6.jpg",
            "title" => "Yugoslav Pavilion proposal - Section",
            "thumb" => config('app.cdn_endpoint') . "/img/architecture/yugoslav-pavilion-proposal/thumbnails/6_thumbnail.jpg",
        ],
    ];
@endphp

<x-layout :meta="$meta">

    <h1 class="text-dark mb-0">Yugoslav Pavilion proposal</h1>
    <p class="city">Seville</p>
    <div class="row">
        <div class="col-lg-7 col-md-7 d-flex description">
            <p>Proposal for the Yugoslavian pavilion for the <i>Seville Expo ‘92</i>; the competition was held in 1991 but left unawarded due to the Yugoslav Wars.</p>
        </div>
        <div class="col-lg-5 col-md-5 d-flex info">
            <div>
                <h2>Status</h2>
                <p>Not realised</p>
                <h2>Dates</h2>
                <p>1990</p>
                <h2>Address</h2>
                <p>Seville, Spain</p>
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
