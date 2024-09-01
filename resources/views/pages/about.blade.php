@php
    $meta = [
       "title" => "About | Emir Salihović Mimo",
       "description" => "Born 1960 in Sarajevo, Bosnia and Herzegovina. Graduated Architecture in 1984. Major works include the monument and memorial centre atop the locality Žuč (currently under construction) in Sarajevo and mosques in Jablanica and Kakanj.",
       "thumbnail" => "https://cdn.mimo.ba/img/og-about-thumbnail.jpg",
    ];
@endphp
@php
    $meta = [
       "title" => "Monument and Memorial Centre, Žuč | Emir Salihović Mimo",
       "description" => "A monument and museum commemorating the fallen soldiers and fighters of the Battles of Žuč.",
       "thumbnail" => "https://cdn.mimo.ba/img/og-architecture-zuc-thumbnail.jpg",
    ];
@endphp

<x-main-layout :meta="$meta">
        <x-page-title title="Emir Salihovic" subtitle="Mimo" />

        <div class="mb-24 text-lg leading-8 lg:text-3xl px-6 lg:leading-10 lg:px-64">
            <p class="text-dark mb-10">Born 1960 in Sarajevo, Bosnia and Herzegovina. Graduated Architecture in 1984. Major works include the monument and memorial centre atop the locality Žuč (currently under construction) in Sarajevo and mosques in Jablanica and Kakanj. Various private home designs have also encompassed interior and furniture design. Pursuits in the fine arts have led to several regional exhibitions in abstract painting. Professor at the Academy of Fine Arts in Sarajevo.</p>
            <p class="text-dark mb-5">This page is dedicated to the various artistic and architectural works and concepts undertaken by Emir Salihović Mimo.</p>
        </div>
        <div class="w-full mb-12 px-6 lg:px-64">
            <div class="">
                <img src="https://mimo.imgix.net/a18ee15f-2aed-47ab-a4d1-6757aa15fcc7/IMG_0033.JPG?auto=compress%2Cformat&fit=min&fm=jpg&q=80&rect=0%2C0%2C1920%2C1280" width="100%" alt="">
            </div>
        </div>
</x-main-layout>

