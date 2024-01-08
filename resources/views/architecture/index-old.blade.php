@php
    $meta = [
       "title" => "Architecture | Emir Salihović Mimo",
       "description" => "A selection of architectural designs and concepts by Emir Salihović Mimo.",
       "thumbnail" => "https://cdn.mimo.ba/img/og-architecture-thumbnail.jpg",
    ];
@endphp

<x-layout :meta="$meta" :has-gallery="false">
    <x-title>Architecture</x-title>
    <div class="row">
        <div class="col-lg-3 col-md-6 d-flex justify-content-center">
            <a class="d-flex flex-column align-items-center" href="{{ route('monument-zuc') }}">
                <img src="https://cdn.mimo.ba/img/architecture_thumbnail.jpg" alt="Monument and Memorial Centre, Žuč">
                <p class="pt-3 pb-4 text-center text-dark">Monument and Memorial<br>Centre, Žuč</p>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 d-flex justify-content-center">
            <a href="{{ route('mosque-kakanj') }}">
                <img src="https://cdn.mimo.ba/img/architecture/mosque-kakanj_thumbnail.jpg" alt="Mosque, Kakanj">
                <p class="pt-3 pb-4 text-center text-dark">Mosque, Kakanj</p>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 d-flex justify-content-center">
            <a href="{{ route('mosque-jablanica') }}">
                <img src="https://cdn.mimo.ba/img/architecture/mosque-jablanica_thumbnail.jpg" alt="Mosque, Jablanica">
                <p class="pt-3 pb-4 text-center text-dark">Mosque, Jablanica</p>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 d-flex justify-content-center">
            <a href="{{ route('tunnel-of-hope') }}">
                <img src="https://cdn.mimo.ba/img/architecture/tunnel-of-hope-museum_thumbnail.jpg" alt="Tunnel of Hope – Museum">
                <p class="pt-3 pb-4 text-center text-dark">Tunnel of Hope – Museum</p>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-6 d-flex justify-content-center">
            <a href="{{ route('skender-pasha') }}">
                <img src="https://cdn.mimo.ba/img/architecture/skender-pasha-mosque_thumbnail.jpg" alt="Skender Pasha Mosque">
                <p class="pt-3 pb-4 text-center text-dark">Skender Pasha Mosque</p>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 d-flex justify-content-center">
            <a class="d-flex flex-column align-items-center" href="{{ route('multi-religion-complex') }}">
                <img src="https://cdn.mimo.ba/img/architecture/multi-religious-complex-little-jerusalem_thumbnail.jpg" alt='Multi-Religious Complex: "Little Jerusalem"'>
                <p class="pt-3 pb-4 text-center text-dark">Multi-Religious Complex: "Little<br>Jerusalem"</p>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 d-flex justify-content-center">
            <a href="{{ route('school-sip') }}">
                <img src="https://cdn.mimo.ba/img/architecture/primary-school-sip_thumbnail.jpg" alt="Primary School, Šip">
                <p class="pt-3 pb-4 text-center text-dark">Primary School, Šip</p>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 d-flex justify-content-center">
            <a href="{{ route('yugoslav-pavilion') }}">
                <img src="https://cdn.mimo.ba/img/architecture/yugoslav-pavilion-proposal_thumbnail.jpg" alt="Yugoslav Pavilion proposal">
                <p class="pt-3 pb-4 text-center text-dark">Yugoslav Pavilion proposal</p>
            </a>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col col-lg-3 col-md-6 d-flex justify-content-center">
            <a href="{{ route('selected-arch') }}">
                <img src="https://cdn.mimo.ba/img/architecture/jb-tito-museum-sketch_thumbnail.jpg" alt="Selected Sketches and Models">
                <p class="pt-3 pb-4 text-center text-dark">Selected Sketches and Models</p>
            </a>
        </div>
    </div>

    @push('meta')
        <link rel="stylesheet" href="{{ asset('css/architecture-index1.css') }}">
    @endpush

</x-layout>
