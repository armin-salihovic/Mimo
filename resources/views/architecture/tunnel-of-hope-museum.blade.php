@php
    $meta = [
       "title" => "Tunnel of Hope – Museum | Emir Salihović Mimo",
       "description" => "Proposed project is comprised of a memorial centre and museum.",
       "thumbnail" => config('app.cdn_endpoint') . "/img/og-architecture-tunnel-of-hope-museum-thumbnail.jpg",
    ];

    $gallery = [
        [
            "img" => config('app.cdn_endpoint') . "/img/architecture/tunnel-of-hope-museum/1.jpg",
            "title" => "Tunnel of Hope – Museum",
            "thumb" => config('app.cdn_endpoint') . "/img/architecture/tunnel-of-hope-museum/thumbnails/1_thumbnail.jpg",
        ],
        [
            "img" => config('app.cdn_endpoint') . "/img/architecture/tunnel-of-hope-museum/2.jpg",
            "title" => "Tunnel of Hope – Museum",
            "thumb" => config('app.cdn_endpoint') . "/img/architecture/tunnel-of-hope-museum/thumbnails/2_thumbnail.jpg",
        ],
        [
            "img" => config('app.cdn_endpoint') . "/img/architecture/tunnel-of-hope-museum/3.jpg",
            "title" => "Tunnel of Hope – Museum",
            "thumb" => config('app.cdn_endpoint') . "/img/architecture/tunnel-of-hope-museum/thumbnails/3_thumbnail.jpg",
        ],
        [
            "img" => config('app.cdn_endpoint') . "/img/architecture/tunnel-of-hope-museum/4.jpg",
            "title" => "Tunnel of Hope – Museum",
            "thumb" => config('app.cdn_endpoint') . "/img/architecture/tunnel-of-hope-museum/thumbnails/4_thumbnail.jpg",
        ],
        [
            "img" => config('app.cdn_endpoint') . "/img/architecture/tunnel-of-hope-museum/5.jpg",
            "title" => "Tunnel of Hope – Museum",
            "thumb" => config('app.cdn_endpoint') . "/img/architecture/tunnel-of-hope-museum/thumbnails/5_thumbnail.jpg",
        ],
        [
            "img" => config('app.cdn_endpoint') . "/img/architecture/tunnel-of-hope-museum/6.jpg",
            "title" => "Tunnel of Hope – Museum",
            "thumb" => config('app.cdn_endpoint') . "/img/architecture/tunnel-of-hope-museum/thumbnails/6_thumbnail.jpg",
        ],
        [
            "img" => config('app.cdn_endpoint') . "/img/architecture/tunnel-of-hope-museum/7.jpg",
            "title" => "Tunnel of Hope – Museum",
            "thumb" => config('app.cdn_endpoint') . "/img/architecture/tunnel-of-hope-museum/thumbnails/7_thumbnail.jpg",
        ],
        [
            "img" => config('app.cdn_endpoint') . "/img/architecture/tunnel-of-hope-museum/8.jpg",
            "title" => "Tunnel of Hope – Museum",
            "thumb" => config('app.cdn_endpoint') . "/img/architecture/tunnel-of-hope-museum/thumbnails/8_thumbnail.jpg",
        ],
        [
            "img" => config('app.cdn_endpoint') . "/img/architecture/tunnel-of-hope-museum/9.jpg",
            "title" => "Tunnel of Hope – Museum",
            "thumb" => config('app.cdn_endpoint') . "/img/architecture/tunnel-of-hope-museum/thumbnails/9_thumbnail.jpg",
        ],
        [
            "img" => config('app.cdn_endpoint') . "/img/architecture/tunnel-of-hope-museum/10.jpg",
            "title" => "Tunnel of Hope – Museum",
            "thumb" => config('app.cdn_endpoint') . "/img/architecture/tunnel-of-hope-museum/thumbnails/10_thumbnail.jpg",
        ],
        [
            "img" => config('app.cdn_endpoint') . "/img/architecture/tunnel-of-hope-museum/11.jpg",
            "title" => "Tunnel of Hope – Museum",
            "thumb" => config('app.cdn_endpoint') . "/img/architecture/tunnel-of-hope-museum/thumbnails/11_thumbnail.jpg",
        ],
        [
            "img" => config('app.cdn_endpoint') . "/img/architecture/tunnel-of-hope-museum/12.jpg",
            "title" => "Tunnel of Hope – Museum",
            "thumb" => config('app.cdn_endpoint') . "/img/architecture/tunnel-of-hope-museum/thumbnails/12_thumbnail.jpg",
        ],

    ];
@endphp

<x-layout :meta="$meta">

    <h1 class="text-dark mb-0">Tunnel of Hope – Museum</h1>
    <p class="city">Sarajevo</p>
    <div class="row">
        <div class="col-lg-7 col-md-7 description">
            <p>During the Siege of Sarajevo, the citizens built a tunnel which linked the besieged city to Bosnian-held territory; the tunnel ran underneath the UN-held airport and enabled the transport of food, aid, supplies and so forth. This proposed project is comprised of a memorial centre and museum which would be found at either side of the tunnel. The museum would house various historical artefacts from the period, whilst parts of the tunnel would be revitalised to inform the public of the actual conditions.</p>
            <p>Co-author - Prof. Dr Hamdija Salihović</p>
        </div>
        <div class="col-lg-5 col-md-5 d-flex info">
            <div>
                <h2>Status</h2>
                <p>Not realised</p>
                <h2>Dates</h2>
                <p>2017</p>
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
