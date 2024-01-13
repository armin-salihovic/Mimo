@php
    $warrior = [
        [
            "img" => "https://cdn.mimo.ba/img/sculpture/warrior/1.jpg",
            "title" => "Warrior 2008",
            "thumb" => "https://cdn.mimo.ba/img/sculpture/warrior/thumbnails/1_thumbnail.jpg",
        ],
        [
            "img" => "https://cdn.mimo.ba/img/sculpture/warrior/2.jpg",
            "title" => "Warrior 2008",
            "thumb" => "https://cdn.mimo.ba/img/sculpture/warrior/thumbnails/2_thumbnail.jpg",
        ],
        [
            "img" => "https://cdn.mimo.ba/img/sculpture/warrior/3.jpg",
            "title" => "Warrior 2008",
            "thumb" => "https://cdn.mimo.ba/img/sculpture/warrior/thumbnails/3_thumbnail.jpg",
        ],
        [
            "img" => "https://cdn.mimo.ba/img/sculpture/warrior/4.jpg",
            "title" => "Warrior 2008",
            "thumb" => "https://cdn.mimo.ba/img/sculpture/warrior/thumbnails/4_thumbnail.jpg",
        ],
        [
            "img" => "https://cdn.mimo.ba/img/sculpture/warrior/5.jpg",
            "title" => "Warrior 2008",
            "thumb" => "https://cdn.mimo.ba/img/sculpture/warrior/thumbnails/5_thumbnail.jpg",
        ],
        [
            "img" => "https://cdn.mimo.ba/img/sculpture/warrior/6.jpg",
            "title" => "Warrior 2008",
            "thumb" => "https://cdn.mimo.ba/img/sculpture/warrior/thumbnails/6_thumbnail.jpg",
        ],
        [
            "img" => "https://cdn.mimo.ba/img/sculpture/warrior/7.jpg",
            "title" => "Warrior 2008",
            "thumb" => "https://cdn.mimo.ba/img/sculpture/warrior/thumbnails/7_thumbnail.jpg",
        ],
        [
            "img" => "https://cdn.mimo.ba/img/sculpture/warrior/8.jpg",
            "title" => "Warrior 2008",
            "thumb" => "https://cdn.mimo.ba/img/sculpture/warrior/thumbnails/8_thumbnail.jpg",
        ],
        [
            "img" => "https://cdn.mimo.ba/img/sculpture/warrior/9.jpg",
            "title" => "Warrior 2008",
            "thumb" => "https://cdn.mimo.ba/img/sculpture/warrior/thumbnails/9_thumbnail.jpg",
        ],
        [
            "img" => "https://cdn.mimo.ba/img/sculpture/warrior/10.jpg",
            "title" => "Warrior 2008",
            "thumb" => "https://cdn.mimo.ba/img/sculpture/warrior/thumbnails/10_thumbnail.jpg",
        ],
    ];

    $ship = [
        [
            "img" => "https://cdn.mimo.ba/img/sculpture/ship/1.jpg",
            "title" => "Ship 2019",
            "thumb" => "https://cdn.mimo.ba/img/sculpture/ship/thumbnails/1_thumbnail.jpg",
        ],
        [
            "img" => "https://cdn.mimo.ba/img/sculpture/ship/2.jpg",
            "title" => "Ship 2019",
            "thumb" => "https://cdn.mimo.ba/img/sculpture/ship/thumbnails/2_thumbnail.jpg",
        ],
        [
            "img" => "https://cdn.mimo.ba/img/sculpture/ship/3.jpg",
            "title" => "Ship 2019",
            "thumb" => "https://cdn.mimo.ba/img/sculpture/ship/thumbnails/3_thumbnail.jpg",
        ],
        [
            "img" => "https://cdn.mimo.ba/img/sculpture/ship/4.jpg",
            "title" => "Ship 2019",
            "thumb" => "https://cdn.mimo.ba/img/sculpture/ship/thumbnails/4_thumbnail.jpg",
        ],
        [
            "img" => "https://cdn.mimo.ba/img/sculpture/ship/5.jpg",
            "title" => "Ship 2019",
            "thumb" => "https://cdn.mimo.ba/img/sculpture/ship/thumbnails/5_thumbnail.jpg",
        ],
        [
            "img" => "https://cdn.mimo.ba/img/sculpture/ship/6.jpg",
            "title" => "Ship 2019",
            "thumb" => "https://cdn.mimo.ba/img/sculpture/ship/thumbnails/6_thumbnail.jpg",
        ],
        [
            "img" => "https://cdn.mimo.ba/img/sculpture/ship/7.jpg",
            "title" => "Ship 2019",
            "thumb" => "https://cdn.mimo.ba/img/sculpture/ship/thumbnails/7_thumbnail.jpg",
        ],
    ];

    $choppedRoller = [
        [
            "img" => "https://cdn.mimo.ba/img/sculpture/chopped-roller/1.jpg",
            "title" => "Chopped Roller 2019",
            "thumb" => "https://cdn.mimo.ba/img/sculpture/chopped-roller/thumbnails/1_thumbnail.jpg",
        ],
        [
            "img" => "https://cdn.mimo.ba/img/sculpture/chopped-roller/2.jpg",
            "title" => "Chopped Roller 2019",
            "thumb" => "https://cdn.mimo.ba/img/sculpture/chopped-roller/thumbnails/2_thumbnail.jpg",
        ],
    ];

    $deformedRoller = [
        [
            "img" => "https://cdn.mimo.ba/img/sculpture/deformed-rollers/1.jpg",
            "title" => "Deformed Roller 2011",
            "thumb" => "https://cdn.mimo.ba/img/sculpture/deformed-rollers/thumbnails/1_thumbnail.jpg",
        ],
        [
            "img" => "https://cdn.mimo.ba/img/sculpture/deformed-rollers/2.jpg",
            "title" => "Deformed Roller 2011",
            "thumb" => "https://cdn.mimo.ba/img/sculpture/deformed-rollers/thumbnails/2_thumbnail.jpg",
        ],
    ];

    $other = [
        [
            "img" => "https://cdn.mimo.ba/img/sculpture/other/1.jpg",
            "title" => "A Sick Tree 2016",
            "thumb" => "https://cdn.mimo.ba/img/sculpture/other/thumbnails/1_thumbnail.jpg",
        ],
        [
            "img" => "https://cdn.mimo.ba/img/sculpture/other/2.jpg",
            "title" => "Laid Tree 2015",
            "thumb" => "https://cdn.mimo.ba/img/sculpture/other/thumbnails/2_thumbnail.jpg",
        ],
        [
            "img" => "https://cdn.mimo.ba/img/sculpture/other/3.jpg",
            "title" => "Paper Sculpture 2010",
            "thumb" => "https://cdn.mimo.ba/img/sculpture/other/thumbnails/3_thumbnail.jpg",
        ],
        [
            "img" => "https://cdn.mimo.ba/img/sculpture/other/4.jpg",
            "title" => "Bird 1997",
            "thumb" => "https://cdn.mimo.ba/img/sculpture/other/thumbnails/4_thumbnail.jpg",
        ],
        [
            "img" => "https://cdn.mimo.ba/img/sculpture/other/5.jpg",
            "title" => "Around The World",
            "thumb" => "https://cdn.mimo.ba/img/sculpture/other/thumbnails/5_thumbnail.jpg",
        ],
    ];
@endphp

<x-gallery-render-single title="Warrior" :gallery="$warrior" />
<x-gallery-render-single title="Ship" :gallery="$ship" />
<x-gallery-render-single title="Chopped Roller" :gallery="$choppedRoller" />
<x-gallery-render-single title="Deformed Roller" :gallery="$deformedRoller" />
<x-gallery-render-single title="Other" :gallery="$other" />
