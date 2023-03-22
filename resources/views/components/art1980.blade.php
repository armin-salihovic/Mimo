@php

$art1980 = [
    [
        "img" => "https://cdn.mimo.ba/img/art/1980/13.jpg",
        "title" => "Oil on canvas, 50x70cm, 1985.",
        "thumb" => "https://cdn.mimo.ba/img/art/1980/thumbnails/13_thumbnail.jpg",
        "year" => 1985,
    ],

    [
        "img" => "https://cdn.mimo.ba/img/art/1980/14.jpg",
        "title" => "Airbrush on wood, 60x60cm, 1986.",
        "thumb" => "https://cdn.mimo.ba/img/art/1980/thumbnails/14_thumbnail.jpg",
        "year" => 1986,
    ],

    [
        "img" => "https://cdn.mimo.ba/img/art/1980/20.JPG",
        "title" => "Oil on canvas, 35x80cm, 1980.",
        "thumb" => "https://cdn.mimo.ba/img/art/1980/thumbnails/20_thumbnail.jpg",
        "year" => 1980,
    ],

    [
        "img" => "https://cdn.mimo.ba/img/art/1980/51.JPG",
        "title" => "Oil on canvas, 100x70cm, 1989.",
        "thumb" => "https://cdn.mimo.ba/img/art/1980/thumbnails/51_thumbnail.jpg",
        "year" => 1989,
    ],
];

@endphp

<x-gallery-render year="" :gallery="$art1980" />

