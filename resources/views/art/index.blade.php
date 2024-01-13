@php
$meta = [
   "title" => "Art | Emir Salihović Mimo",
   "description" => "A selection of abstract paintings by Emir Salihović Mimo, hand-picked by the artist himself.",
   "thumbnail" => config('app.cdn_endpoint') . "/img/og-art-thumbnail.jpg",
];
@endphp

<x-layout :meta="$meta" main-class="d-flex flex-column align-items-center">

    <x-title>Art</x-title>

    <x-nav-art />

    <x-select-art />

</x-layout>


