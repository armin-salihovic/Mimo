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
    <div class="container mx-auto lg:flex">
        <div class="w-full lg:w-1/4">
            <h1 class="px-4 text-3xl my-12 sm:text-4xl lg:text-5xl md:my-24 uppercase">About</h1>
        </div>
        <div class="w-full lg:w-3/4">
            <div class="px-4 lg:pl-3 lg:pr-6">
                <h2 class="text-2xl lg:text-5xl mb-6 lg:my-24">Emir Mimo Salihovic</h2>
                <div class="flex w-full mb-16">
                    <div class="w-1/2">
                        <img src="https://mimo.imgix.net/a18ee15f-2aed-47ab-a4d1-6757aa15fcc7/IMG_0033.JPG?auto=compress%2Cformat&fit=min&fm=jpg&q=80&rect=0%2C0%2C1920%2C1280" width="100%" alt="">
                    </div>

                </div>
                <div class="mb-16">
                    <p class="text-dark mb-3">Born 1960 in Sarajevo, Bosnia and Herzegovina. Graduated Architecture in 1984. Major works include the monument and memorial centre atop the locality Žuč (currently under construction) in Sarajevo and mosques in Jablanica and Kakanj. Various private home designs have also encompassed interior and furniture design. Pursuits in the fine arts have led to several regional exhibitions in abstract painting. Professor at the Academy of Fine Arts in Sarajevo.</p>
                    <p class="text-dark mb-5">This page is dedicated to the various artistic and architectural works and concepts undertaken by Emir Salihović Mimo.</p>
                </div>

                <div class="w-1/2">
                    <img src="https://mimo.imgix.net/5c9b33d1-59fd-4ed9-a8ad-6d98bb354638/facd-logo-2.png?auto=compress%2Cformat&fit=min&fm=jpg&q=80&rect=0%2C0%2C512%2C512" alt="">

                </div>
            </div>
        </div>
    </div>

    @push('meta')
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
        <link rel="stylesheet" href="{{ asset('css/architecture.css') }} ">
    @endpush
</x-main-layout>

