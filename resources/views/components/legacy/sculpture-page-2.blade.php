@php
    $man = [
        [
            "img" => "https://cdn.mimo.ba/img/sculpture/new/covjek/1.JPG",
            "title" => "Man 2021",
            "thumb" => "https://cdn.mimo.ba/img/sculpture/new/covjek/thumbnails/1_thumbnail.jpg",
        ],
        [
            "img" => "https://cdn.mimo.ba/img/sculpture/new/covjek/2.JPG",
            "title" => "Man 2021",
            "thumb" => "https://cdn.mimo.ba/img/sculpture/new/covjek/thumbnails/2_thumbnail.jpg",
        ],
        [
            "img" => "https://cdn.mimo.ba/img/sculpture/new/covjek/3.JPG",
            "title" => "Man 2021",
            "thumb" => "https://cdn.mimo.ba/img/sculpture/new/covjek/thumbnails/3_thumbnail.jpg",
        ],
        [
            "img" => "https://cdn.mimo.ba/img/sculpture/new/covjek/4.JPG",
            "title" => "Man 2021",
            "thumb" => "https://cdn.mimo.ba/img/sculpture/new/covjek/thumbnails/4_thumbnail.jpg",
        ],
    ];

    $twisted = [
        [
            "img" => "https://cdn.mimo.ba/img/sculpture/new/izuvijano/1.JPG",
            "title" => "Twisted 2021",
            "thumb" => "https://cdn.mimo.ba/img/sculpture/new/izuvijano/thumbnails/1_thumbnail.jpg",
        ],
    ];

    $stoneForest = [
//        [
//            "img" => "https://cdn.mimo.ba/img/sculpture/new/kamena-suma/1.JPG",
//            "title" => "Stone Forest 2021",
//            "thumb" => "https://cdn.mimo.ba/img/sculpture/new/kamena-suma/thumbnails/1_thumbnail.jpg",
//        ],
//        [
//            "img" => "https://cdn.mimo.ba/img/sculpture/new/kamena-suma/2.JPG",
//            "title" => "Stone Forest 2021",
//            "thumb" => "https://cdn.mimo.ba/img/sculpture/new/kamena-suma/thumbnails/2_thumbnail.jpg",
//        ],
        [
            "img" => "https://cdn.mimo.ba/img/sculpture/new/kamena-suma/3.JPG",
            "title" => "Stone Forest 2021",
            "thumb" => "https://cdn.mimo.ba/img/sculpture/new/kamena-suma/thumbnails/3_thumbnail.jpg",
        ],
        [
            "img" => "https://cdn.mimo.ba/img/sculpture/new/kamena-suma/4.JPG",
            "title" => "Stone Forest 2021",
            "thumb" => "https://cdn.mimo.ba/img/sculpture/new/kamena-suma/thumbnails/4_thumbnail.jpg",
        ],
        [
            "img" => "https://cdn.mimo.ba/img/sculpture/new/kamena-suma/5.JPG",
            "title" => "Stone Forest 2021",
            "thumb" => "https://cdn.mimo.ba/img/sculpture/new/kamena-suma/thumbnails/5_thumbnail.jpg",
        ],
    ];

    $soft = [
        [
            "img" => "https://cdn.mimo.ba/img/sculpture/new/mekano/1.JPG",
            "title" => "Soft 2021",
            "thumb" => "https://cdn.mimo.ba/img/sculpture/new/mekano/thumbnails/1_thumbnail.jpg",
        ],
        [
            "img" => "https://cdn.mimo.ba/img/sculpture/new/mekano/2.JPG",
            "title" => "Soft 2021",
            "thumb" => "https://cdn.mimo.ba/img/sculpture/new/mekano/thumbnails/2_thumbnail.jpg",
        ],
        [
            "img" => "https://cdn.mimo.ba/img/sculpture/new/mekano/3.JPG",
            "title" => "Soft 2021",
            "thumb" => "https://cdn.mimo.ba/img/sculpture/new/mekano/thumbnails/3_thumbnail.jpg",
        ],
    ];

    $unending = [
        [
            "img" => "https://cdn.mimo.ba/img/sculpture/new/neprekinuto/1.JPG",
            "title" => "Unending 2021",
            "thumb" => "https://cdn.mimo.ba/img/sculpture/new/neprekinuto/thumbnails/1_thumbnail.jpg",
        ],
        [
            "img" => "https://cdn.mimo.ba/img/sculpture/new/neprekinuto/2.JPG",
            "title" => "Unending 2021",
            "thumb" => "https://cdn.mimo.ba/img/sculpture/new/neprekinuto/thumbnails/2_thumbnail.jpg",
        ],
        [
            "img" => "https://cdn.mimo.ba/img/sculpture/new/neprekinuto/3.JPG",
            "title" => "Unending 2021",
            "thumb" => "https://cdn.mimo.ba/img/sculpture/new/neprekinuto/thumbnails/3_thumbnail.jpg",
        ],
    ];
@endphp

{{--covjek--}}
<x-gallery-render-single title="Man" :gallery="$man" />

{{--Izuvijano--}}
<x-gallery-render-single title="Twisted" :gallery="$twisted" />

{{--Kamena šuma--}}
<x-gallery-render-single title="Stone Forest" :gallery="$stoneForest" />

{{--mekano--}}
<x-gallery-render-single title="Soft" :gallery="$soft" />

{{--neprekinuto--}}
<x-gallery-render-single title="Unending" :gallery="$unending" />
