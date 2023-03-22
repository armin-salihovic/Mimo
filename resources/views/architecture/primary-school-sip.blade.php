@php
    $meta = [
       "title" => "Primary School, Šip | Emir Salihović Mimo",
       "description" => "An unrealised project conceptualised in a modernistic style for a post-war neighbourhood on the periphery of Sarajevo.",
       "thumbnail" => "https://cdn.mimo.ba/img/og-architecture-primary-school-sip-thumbnail.jpg",
    ];

    $gallery = [
        [
            "img" => "https://cdn.mimo.ba/img/architecture/primary-school-sip/1.jpg",
            "title" => "Primary School, Šip",
            "thumb" => "https://cdn.mimo.ba/img/architecture/primary-school-sip/thumbnails/1_thumbnail.jpg",
        ],
        [
            "img" => "https://cdn.mimo.ba/img/architecture/primary-school-sip/2.jpg",
            "title" => "Primary School, Šip",
            "thumb" => "https://cdn.mimo.ba/img/architecture/primary-school-sip/thumbnails/2_thumbnail.jpg",
        ],
        [
            "img" => "https://cdn.mimo.ba/img/architecture/primary-school-sip/3.jpg",
            "title" => "Primary School, Šip",
            "thumb" => "https://cdn.mimo.ba/img/architecture/primary-school-sip/thumbnails/3_thumbnail.jpg",
        ],
        [
            "img" => "https://cdn.mimo.ba/img/architecture/primary-school-sip/4.jpg",
            "title" => "Primary School, Šip",
            "thumb" => "https://cdn.mimo.ba/img/architecture/primary-school-sip/thumbnails/4_thumbnail.jpg",
        ],
        [
            "img" => "https://cdn.mimo.ba/img/architecture/primary-school-sip/5.jpg",
            "title" => "Primary School, Šip",
            "thumb" => "https://cdn.mimo.ba/img/architecture/primary-school-sip/thumbnails/5_thumbnail.jpg",
        ],
        [
            "img" => "https://cdn.mimo.ba/img/architecture/primary-school-sip/6.jpg",
            "title" => "Primary School, Šip",
            "thumb" => "https://cdn.mimo.ba/img/architecture/primary-school-sip/thumbnails/6_thumbnail.jpg",
        ],
    ];

@endphp

<x-layout :meta="$meta">

    <h1 class="text-dark mb-0">Primary School, Šip</h1>
    <p class="city">Sarajevo</p>
    <div class="row">
        <div class="col-lg-7 col-md-7 description">
            <p>An unrealised project conceptualised in a modernistic style for a post-war neighbourhood on the periphery of Sarajevo.</p>
            <p>Co-author - Prof. Dr Hamdija Salihović</p>
        </div>
        <div class="col-lg-5 col-md-5 d-flex info">
            <div>
                <h2>Status</h2>
                <p>Not realised</p>
                <h2>Dates</h2>
                <p>2005</p>
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
