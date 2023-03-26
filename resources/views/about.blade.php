@php
    $meta = [
       "title" => "About | Emir Salihović Mimo",
       "description" => "Born 1960 in Sarajevo, Bosnia and Herzegovina. Graduated Architecture in 1984. Major works include the monument and memorial centre atop the locality Žuč (currently under construction) in Sarajevo and mosques in Jablanica and Kakanj.",
       "thumbnail" => "https://cdn.mimo.ba/img/og-about-thumbnail.jpg",
    ];
@endphp

<x-layout :meta="$meta" :has-gallery="false">

<x-title>Emir Salihović Mimo</x-title>

<div class="mb-5 d-flex justify-content-center">
    <img class="portrait" src="https://cdn.mimo.ba/img/mimo-portrait.jpg" alt="Emir Salihović Mimo Portrait">
</div>

<p class="text-dark">Born 1960 in Sarajevo, Bosnia and Herzegovina. Graduated Architecture in 1984. Major works include the monument and memorial centre atop the locality Žuč (currently under construction) in Sarajevo and mosques in Jablanica and Kakanj. Various private home designs have also encompassed interior and furniture design. Pursuits in the fine arts have led to several regional exhibitions in abstract painting. Professor at the Academy of Fine Arts in Sarajevo.</p>
<p class="text-dark mb-5">This page is dedicated to the various artistic and architectural works and concepts undertaken by Emir Salihović Mimo.</p>

<div class="mb-5 d-flex justify-content-center">
    <img class="portrait" src="https://cdn.mimo.ba/img/art/1990/189.jpg" alt="Emir Salihović Mimo Portrait Art">
</div>

@push('meta')
    <link rel="stylesheet" href="{{ asset('css/about1.css') }}">
@endpush

</x-layout>
