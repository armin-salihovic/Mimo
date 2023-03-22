@php
    $meta = [
       "title" => "Mosque, Kakanj | Emir Salihović Mimo",
       "description" => "The mosque is located in the centre of Kakanj.",
       "thumbnail" => "https://cdn.mimo.ba/img/og-architecture-mosque-kakanj-thumbnail.jpg",
    ];

    $gallery = [
        [
            "img" => "https://cdn.mimo.ba/img/architecture/mosque-kakanj/1.jpg",
            "title" => "Mosque, Kakanj",
            "thumb" => "https://cdn.mimo.ba/img/architecture/mosque-kakanj/thumbnails/1_thumbnail.jpg",
        ],
        [
            "img" => "https://cdn.mimo.ba/img/architecture/mosque-kakanj/2.jpg",
            "title" => "Mosque, Kakanj",
            "thumb" => "https://cdn.mimo.ba/img/architecture/mosque-kakanj/thumbnails/2_thumbnail.jpg",
        ],
        [
            "img" => "https://cdn.mimo.ba/img/architecture/mosque-kakanj/3.jpg",
            "title" => "Mosque, Kakanj",
            "thumb" => "https://cdn.mimo.ba/img/architecture/mosque-kakanj/thumbnails/3_thumbnail.jpg",
        ],
        [
            "img" => "https://cdn.mimo.ba/img/architecture/mosque-kakanj/4.jpg",
            "title" => "Mosque, Kakanj",
            "thumb" => "https://cdn.mimo.ba/img/architecture/mosque-kakanj/thumbnails/4_thumbnail.jpg",
        ],
        [
            "img" => "https://cdn.mimo.ba/img/architecture/mosque-kakanj/5.jpg",
            "title" => "Mosque, Kakanj",
            "thumb" => "https://cdn.mimo.ba/img/architecture/mosque-kakanj/thumbnails/5_thumbnail.jpg",
        ],
        [
            "img" => "https://cdn.mimo.ba/img/architecture/mosque-kakanj/6.jpg",
            "title" => "Mosque, Kakanj",
            "thumb" => "https://cdn.mimo.ba/img/architecture/mosque-kakanj/thumbnails/6_thumbnail.jpg",
        ],
        [
            "img" => "https://cdn.mimo.ba/img/architecture/mosque-kakanj/7.jpg",
            "title" => "Mosque, Kakanj",
            "thumb" => "https://cdn.mimo.ba/img/architecture/mosque-kakanj/thumbnails/7_thumbnail.jpg",
        ],
        [
            "img" => "https://cdn.mimo.ba/img/architecture/mosque-kakanj/8.jpg",
            "title" => "Mosque, Kakanj",
            "thumb" => "https://cdn.mimo.ba/img/architecture/mosque-kakanj/thumbnails/8_thumbnail.jpg",
        ],
        [
            "img" => "https://cdn.mimo.ba/img/architecture/mosque-kakanj/9.jpg",
            "title" => "Mosque, Kakanj",
            "thumb" => "https://cdn.mimo.ba/img/architecture/mosque-kakanj/thumbnails/9_thumbnail.jpg",
        ],
        [
            "img" => "https://cdn.mimo.ba/img/architecture/mosque-kakanj/10.jpg",
            "title" => "Mosque, Kakanj",
            "thumb" => "https://cdn.mimo.ba/img/architecture/mosque-kakanj/thumbnails/10_thumbnail.jpg",
        ],
        [
            "img" => "https://cdn.mimo.ba/img/architecture/mosque-kakanj/11.jpg",
            "title" => "Mosque, Kakanj",
            "thumb" => "https://cdn.mimo.ba/img/architecture/mosque-kakanj/thumbnails/11_thumbnail.jpg",
        ],
        [
            "img" => "https://cdn.mimo.ba/img/architecture/mosque-kakanj/12.jpg",
            "title" => "Mosque, Kakanj",
            "thumb" => "https://cdn.mimo.ba/img/architecture/mosque-kakanj/thumbnails/12_thumbnail.jpg",
        ],
        [
            "img" => "https://cdn.mimo.ba/img/architecture/mosque-kakanj/13.jpg",
            "title" => "Mosque, Kakanj",
            "thumb" => "https://cdn.mimo.ba/img/architecture/mosque-kakanj/thumbnails/13_thumbnail.jpg",
        ],
        [
            "img" => "https://cdn.mimo.ba/img/architecture/mosque-kakanj/14.jpg",
            "title" => "Mosque, Kakanj",
            "thumb" => "https://cdn.mimo.ba/img/architecture/mosque-kakanj/thumbnails/14_thumbnail.jpg",
        ],
        [
            "img" => "https://cdn.mimo.ba/img/architecture/mosque-kakanj/15.jpg",
            "title" => "Mosque, Kakanj",
            "thumb" => "https://cdn.mimo.ba/img/architecture/mosque-kakanj/thumbnails/15_thumbnail.jpg",
        ],
    ];
@endphp

<x-layout :meta="$meta">

    <h1 class="text-dark mb-0">Mosque, Kakanj</h1>
    <p class="city">Kakanj</p>
    <div class="row">
        <div class="col-lg-7 col-md-7 d-flex description">
            <p>One of many projects made in collaboration with his father, Prof. Dr Hamdija Salihović - the two architects began this project in the autumn of 1991. It was left unfinished due to the Bosnian War and finally completed before the turn of the century. The mosque is located in the centre of Kakanj on slightly raised foundations; it was initially conceptualised as part of a larger complex (designed by the aforementioned authors), which comprised a number of other complementing forms such as a <i>bedesten</i> and <i>kuttab</i>,  but only the mosque was finally realised.</p>
        </div>
        <div class="col-lg-5 col-md-5 d-flex info">
            <div>
                <h2>Status</h2>
                <p>Realised</p>
                <h2>Dates</h2>
                <p>1991 - 1999</p>
                <h2>Address</h2>
                <p>Kakanj, Bosnia and Herzegovina</p>
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
