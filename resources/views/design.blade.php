@php
    $meta = [
       "title" => "Design | Emir Salihović Mimo",
       "description" => "Items of furniture and decoration designed by Emir Salihović Mimo.",
       "thumbnail" => config('app.cdn_endpoint') . "/img/og-design-thumbnail.jpg",
    ];

    $chandelierMosqueJablanica = [
        [
            "img" => config('app.cdn_endpoint') . "/img/design/chandelier-mosque-jablanica/1.jpg",
            "title" => "Chandelier for Mosque, Jablanica",
            "thumb" => config('app.cdn_endpoint') . "/img/design/chandelier-mosque-jablanica/thumbnails/1_thumbnail.jpg",
        ],
        [
            "img" => config('app.cdn_endpoint') . "/img/design/chandelier-mosque-jablanica/2.jpg",
            "title" => "Chandelier for Mosque, Jablanica",
            "thumb" => config('app.cdn_endpoint') . "/img/design/chandelier-mosque-jablanica/thumbnails/2_thumbnail.jpg",
        ],
        [
            "img" => config('app.cdn_endpoint') . "/img/design/chandelier-mosque-jablanica/3.jpg",
            "title" => "Chandelier for Mosque, Jablanica",
            "thumb" => config('app.cdn_endpoint') . "/img/design/chandelier-mosque-jablanica/thumbnails/3_thumbnail.jpg",
        ],
        [
            "img" => config('app.cdn_endpoint') . "/img/design/chandelier-mosque-jablanica/4.jpg",
            "title" => "Chandelier for Mosque, Jablanica",
            "thumb" => config('app.cdn_endpoint') . "/img/design/chandelier-mosque-jablanica/thumbnails/4_thumbnail.jpg",
        ],
        [
            "img" => config('app.cdn_endpoint') . "/img/design/chandelier-mosque-jablanica/5.jpg",
            "title" => "Chandelier for Mosque, Jablanica",
            "thumb" => config('app.cdn_endpoint') . "/img/design/chandelier-mosque-jablanica/thumbnails/5_thumbnail.jpg",
        ],
    ];

   $chairs = [
    [
        "img" => config('app.cdn_endpoint') . "/img/design/chairs/1.jpg",
        "title" => "Tsuki 2020",
        "thumb" => config('app.cdn_endpoint') . "/img/design/chairs/thumbnails/1_thumbnail.jpg",
    ],
    [
        "img" => config('app.cdn_endpoint') . "/img/design/chairs/2.jpg",
        "title" => "Silmukka 2020",
        "thumb" => config('app.cdn_endpoint') . "/img/design/chairs/thumbnails/2_thumbnail.jpg",
    ],
    [
        "img" => config('app.cdn_endpoint') . "/img/design/chairs/3.jpg",
        "title" => "Wallander 2019",
        "thumb" => config('app.cdn_endpoint') . "/img/design/chairs/thumbnails/3_thumbnail.jpg",
    ],
    [
        "img" => config('app.cdn_endpoint') . "/img/design/chairs/4.jpg",
        "title" => "Uchu 2019",
        "thumb" => config('app.cdn_endpoint') . "/img/design/chairs/thumbnails/4_thumbnail.jpg",
    ],
    [
        "img" => config('app.cdn_endpoint') . "/img/design/chairs/5.jpg",
        "title" => "Hoiru 2019",
        "thumb" => config('app.cdn_endpoint') . "/img/design/chairs/thumbnails/5_thumbnail.jpg",
    ],
    [
        "img" => config('app.cdn_endpoint') . "/img/design/chairs/6.jpg",
        "title" => "Hakucho 2018",
        "thumb" => config('app.cdn_endpoint') . "/img/design/chairs/thumbnails/6_thumbnail.jpg",
    ],
    [
        "img" => config('app.cdn_endpoint') . "/img/design/chairs/7.jpg",
        "title" => "Tauko 2018",
        "thumb" => config('app.cdn_endpoint') . "/img/design/chairs/thumbnails/7_thumbnail.jpg",
    ],
    [
        "img" => config('app.cdn_endpoint') . "/img/design/chairs/12.jpg",
        "title" => "Rokka 2017",
        "thumb" => config('app.cdn_endpoint') . "/img/design/chairs/thumbnails/12_thumbnail.jpg",
    ],
    [
        "img" => config('app.cdn_endpoint') . "/img/design/chairs/10.jpg",
        "title" => "Vakka 2017",
        "thumb" => config('app.cdn_endpoint') . "/img/design/chairs/thumbnails/10_thumbnail.jpg",
    ],
    [
        "img" => config('app.cdn_endpoint') . "/img/design/chairs/11.jpg",
        "title" => "Tori 2016",
        "thumb" => config('app.cdn_endpoint') . "/img/design/chairs/thumbnails/11_thumbnail.jpg",
    ],
//    [
//        "img" => config('app.cdn_endpoint') . /img/design/chairs/8.jpg",
//        "title" => "Momi 2016",
//        "thumb" => config('app.cdn_endpoint') . /img/design/chairs/thumbnails/8_thumbnail.jpg",
//    ],//
//    [
//        "img" => config('app.cdn_endpoint') . /img/design/chairs/20.jpg",
//        "title" => "Lu 2020",
//        "thumb" => config('app.cdn_endpoint') . /img/design/chairs/thumbnails/20_thumbnail.jpg",
//    ],
];

$lamps = [
    [
        "img" => config('app.cdn_endpoint') . "/img/design/lamps/1.jpg",
        "title" => "Lamp: wood and rice paper 1985",
        "thumb" => config('app.cdn_endpoint') . "/img/design/lamps/thumbnails/1_thumbnail.jpg",
    ],
    [
        "img" => config('app.cdn_endpoint') . "/img/design/lamps/2.jpg",
        "title" => "Lamp: wood and rice paper 1985",
        "thumb" => config('app.cdn_endpoint') . "/img/design/lamps/thumbnails/2_thumbnail.jpg",
    ],
    [
        "img" => config('app.cdn_endpoint') . "/img/design/lamps/3.jpg",
        "title" => "Lamp: wood and rice paper 1985",
        "thumb" => config('app.cdn_endpoint') . "/img/design/lamps/thumbnails/3_thumbnail.jpg",
    ],
    [
        "img" => config('app.cdn_endpoint') . "/img/design/lamps/4.jpg",
        "title" => "Lamp: wood and rice paper 1985",
        "thumb" => config('app.cdn_endpoint') . "/img/design/lamps/thumbnails/4_thumbnail.jpg",
    ],
    [
        "img" => config('app.cdn_endpoint') . "/img/design/lamps/5.jpg",
        "title" => "Lamp: wood and rice paper 1985",
        "thumb" => config('app.cdn_endpoint') . "/img/design/lamps/thumbnails/5_thumbnail.jpg",
    ],
];

@endphp

<x-layout :meta="$meta" main-class="text-center">
    <x-title>Design</x-title>

    <x-gallery-render-single title="Chandelier - Mosque, Jablanica" :gallery="$chandelierMosqueJablanica" />
    <x-gallery-render-single title="Chairs" :gallery="$chairs" />
    <x-gallery-render-single title="Lamps" :gallery="$lamps" />

    @push('meta')
        <link rel="stylesheet" href="{{ asset('css/design1.css') }}">
    @endpush

</x-layout>
