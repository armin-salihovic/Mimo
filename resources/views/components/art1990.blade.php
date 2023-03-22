@php

$art1990 = [
    [
        "img" => "https://cdn.mimo.ba/img/art/1990/74.jpg",
        "title" => "Oil on wood, 180x110cm, 1994.",
        "thumb" => "https://cdn.mimo.ba/img/art/1990/thumbnails/74_thumbnail.jpg",
        "year" => 1994,
    ],

    [
        "img" => "https://cdn.mimo.ba/img/art/1990/81.JPG",
        "title" => "Oil on wood, 240x60cm, 1998.",
        "thumb" => "https://cdn.mimo.ba/img/art/1990/thumbnails/81_thumbnail.jpg",
        "year" => 1998,
    ],

    [
        "img" => "https://cdn.mimo.ba/img/art/1990/36.JPG",
        "title" => "Oil on wood, 50x90cm, 1999.",
        "thumb" => "https://cdn.mimo.ba/img/art/1990/thumbnails/36_thumbnail.jpg",
        "year" => 1999,
    ],
];

@endphp

<x-gallery-render year="" :gallery="$art1990" />

