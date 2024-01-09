@php
    $meta = [
       "title" => "Architecture | Emir Salihović Mimo",
       "description" => "A selection of architectural designs and concepts by Emir Salihović Mimo.",
       "thumbnail" => "https://cdn.mimo.ba/img/og-architecture-thumbnail.jpg",
    ];

    $data = [
        [
            'title' => 'Monument and Memorial Centre, Žuč',
            'location' => 'Sarajevo',
            'img' => 'https://via.placeholder.com/1920x1080/eee?text=16:9',
            'route' => 'monument-zuc',
        ],
        [
            'title' => 'Mosque, Kakanj',
            'location' => 'Kakanj',
            'img' => 'https://via.placeholder.com/1920x1080/eee?text=16:9',
            'route' => 'mosque-kakanj',
        ],
        [
            'title' => 'Mosque',
            'location' => 'Jablanica',
            'img' => 'https://via.placeholder.com/1920x1080/eee?text=16:9',
            'route' => 'mosque-jablanica',
        ],
        [
            'title' => 'Tunnel of Hope – Museum',
            'location' => 'Sarajevo',
            'img' => 'https://via.placeholder.com/1920x1080/eee?text=16:9',
            'route' => 'tunnel-of-hope',
        ],
        [
            'title' => 'Skender Pasha Mosque',
            'location' => 'Sarajevo',
            'img' => 'https://via.placeholder.com/1920x1080/eee?text=16:9',
            'route' => 'skender-pasha',
        ],
        [
            'title' => 'Multi-Religious Complex: "Little Jerusalem"',
            'location' => 'Sarajevo',
            'img' => 'https://via.placeholder.com/1920x1080/eee?text=16:9',
            'route' => 'multi-religion-complex',
        ],
        [
            'title' => 'Primary School, Šip',
            'location' => 'Sarajevo',
            'img' => 'https://via.placeholder.com/1920x1080/eee?text=16:9',
            'route' => 'school-sip',
        ],
        [
            'title' => 'Yugoslav Pavilion proposal',
            'location' => 'Spain',
            'img' => 'https://via.placeholder.com/1920x1080/eee?text=16:9',
            'route' => 'yugoslav-pavilion',
        ],
        [
            'title' => 'Selected Sketches and Models',
            'location' => 'Sarajevo',
            'img' => 'https://via.placeholder.com/1920x1080/eee?text=16:9',
            'route' => 'selected-arch',
        ],
    ];
@endphp

<x-main-layout :meta="$meta">

    <div class="container mx-auto px-6">
        <div class="flex justify-center">
            <h1 class="text-2xl my-12 sm:text-4xl lg:text-5xl md:my-24 uppercase">Architecture</h1>
        </div>
        @foreach($architectures as $architecture)
            <x-architecture-listbox :item="$architecture" />
        @endforeach
    </div>

</x-main-layout>
