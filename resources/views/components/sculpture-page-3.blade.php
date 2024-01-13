@php
    $family = [
        [
            "img" => config('app.cdn_endpoint') . "/img/sculpture/new/obitelj/1.JPG",
            "title" => "Family 2021",
            "thumb" => config('app.cdn_endpoint') . "/img/sculpture/new/obitelj/thumbnails/1_thumbnail.jpg",
        ],
    ];

    $rupture = [
//        [
//            "img" => config('app.cdn_endpoint') . "/img/sculpture/new/rascjep/1.JPG",
//            "title" => "Rupture 2021",
//            "thumb" => config('app.cdn_endpoint') . "/img/sculpture/new/rascjep/thumbnails/1_thumbnail.jpg",
//        ],
        [
            "img" => config('app.cdn_endpoint') . "/img/sculpture/new/rascjep/2.JPG",
            "title" => "Rupture 2021",
            "thumb" => config('app.cdn_endpoint') . "/img/sculpture/new/rascjep/thumbnails/2_thumbnail.jpg",
        ],
        [
            "img" => config('app.cdn_endpoint') . "/img/sculpture/new/rascjep/3.JPG",
            "title" => "Rupture 2021",
            "thumb" => config('app.cdn_endpoint') . "/img/sculpture/new/rascjep/thumbnails/3_thumbnail.jpg",
        ],
    ];

    $autophagos = [
        [
            "img" => config('app.cdn_endpoint') . "/img/sculpture/new/samojed/1.JPG",
            "title" => "Autóphagos 2021",
            "thumb" => config('app.cdn_endpoint') . "/img/sculpture/new/samojed/thumbnails/1_thumbnail.jpg",
        ],
        [
            "img" => config('app.cdn_endpoint') . "/img/sculpture/new/samojed/2.JPG",
            "title" => "Autóphagos 2021",
            "thumb" => config('app.cdn_endpoint') . "/img/sculpture/new/samojed/thumbnails/2_thumbnail.jpg",
        ],
//        [
//            "img" => config('app.cdn_endpoint') . "/img/sculpture/new/samojed/3.JPG",
//            "title" => "Autóphagos 2021",
//            "thumb" => config('app.cdn_endpoint') . "/img/sculpture/new/samojed/thumbnails/3_thumbnail.jpg",
//        ],
//        [
//            "img" => config('app.cdn_endpoint') . "/img/sculpture/new/samojed/4.JPG",
//            "title" => "Autóphagos 2021",
//            "thumb" => config('app.cdn_endpoint') . "/img/sculpture/new/samojed/thumbnails/4_thumbnail.jpg",
//        ],
//        [
//            "img" => config('app.cdn_endpoint') . "/img/sculpture/new/samojed/5.JPG",
//            "title" => "Autóphagos 2021",
//            "thumb" => config('app.cdn_endpoint') . "/img/sculpture/new/samojed/thumbnails/5_thumbnail.jpg",
//        ],
//        [
//            "img" => config('app.cdn_endpoint') . "/img/sculpture/new/samojed/6.JPG",
//            "title" => "Autóphagos 2021",
//            "thumb" => config('app.cdn_endpoint') . "/img/sculpture/new/samojed/thumbnails/6_thumbnail.jpg",
//        ],
        [
            "img" => config('app.cdn_endpoint') . "/img/sculpture/new/samojed/7.JPG",
            "title" => "Autóphagos 2021",
            "thumb" => config('app.cdn_endpoint') . "/img/sculpture/new/samojed/thumbnails/7_thumbnail.jpg",
        ],
        [
            "img" => config('app.cdn_endpoint') . "/img/sculpture/new/samojed/8.JPG",
            "title" => "Autóphagos 2021",
            "thumb" => config('app.cdn_endpoint') . "/img/sculpture/new/samojed/thumbnails/8_thumbnail.jpg",
        ],
    ];

    $statics = [
        [
            "img" => config('app.cdn_endpoint') . "/img/sculpture/new/statika/1.JPG",
            "title" => "Statics A821",
            "thumb" => config('app.cdn_endpoint') . "/img/sculpture/new/statika/thumbnails/1_thumbnail.jpg",
        ],
        [
            "img" => config('app.cdn_endpoint') . "/img/sculpture/new/statika/2.JPG",
            "title" => "Statics A821",
            "thumb" => config('app.cdn_endpoint') . "/img/sculpture/new/statika/thumbnails/2_thumbnail.jpg",
        ],
        [
            "img" => config('app.cdn_endpoint') . "/img/sculpture/new/statika/3.JPG",
            "title" => "Statics A821",
            "thumb" => config('app.cdn_endpoint') . "/img/sculpture/new/statika/thumbnails/3_thumbnail.jpg",
        ],
        [
            "img" => config('app.cdn_endpoint') . "/img/sculpture/new/statika/4.JPG",
            "title" => "Statics A821",
            "thumb" => config('app.cdn_endpoint') . "/img/sculpture/new/statika/thumbnails/4_thumbnail.jpg",
        ],

    ];

    $arrow = [
        [
            "img" => config('app.cdn_endpoint') . "/img/sculpture/new/strela/1.JPG",
            "title" => "Arrow 2021",
            "thumb" => config('app.cdn_endpoint') . "/img/sculpture/new/strela/thumbnails/1_thumbnail.jpg",
        ],
        [
            "img" => config('app.cdn_endpoint') . "/img/sculpture/new/strela/2.JPG",
            "title" => "Arrow 2021",
            "thumb" => config('app.cdn_endpoint') . "/img/sculpture/new/strela/thumbnails/2_thumbnail.jpg",
        ],
        [
            "img" => config('app.cdn_endpoint') . "/img/sculpture/new/strela/3.JPG",
            "title" => "Arrow 2021",
            "thumb" => config('app.cdn_endpoint') . "/img/sculpture/new/strela/thumbnails/3_thumbnail.jpg",
        ],

    ];
@endphp

{{--Obitelj--}}
<x-gallery-render-single title="Family" :gallery="$family" />

{{--rascjep--}}
<x-gallery-render-single title="Rupture" :gallery="$rupture" />

{{--samojed--}}
<x-gallery-render-single title="Autóphagos" :gallery="$autophagos" />

{{--statika--}}
<x-gallery-render-single title="Statics A821" :gallery="$statics" />

{{--strela--}}
<x-gallery-render-single title="Arrow" :gallery="$arrow" />
