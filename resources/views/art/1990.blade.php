@php
    $meta = [
       "title" => "Art 1990s | Emir Salihović Mimo",
       "description" => "A selection of abstract paintings by Emir Salihović Mimo, hand-picked by the artist himself.",
       "thumbnail" => "https://cdn.mimo.ba/img/og-art-thumbnail.jpg",
    ];
@endphp

<x-layout :meta="$meta" main-class="d-flex flex-column align-items-center">
    <x-title>Art</x-title>

    <x-nav-art />

    <x-art1990 />

    @push('meta')
        <link rel="stylesheet" href="{{ asset('css/art1.css') }}">
    @endpush

</x-layout>


