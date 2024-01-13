@php
    $meta = [
       "title" => "Monument and Memorial Centre, Žuč | Emir Salihović Mimo",
       "description" => "A monument and museum commemorating the fallen soldiers and fighters of the Battles of Žuč.",
       "thumbnail" => "https://cdn.mimo.ba/img/og-architecture-zuc-thumbnail.jpg",
    ];
@endphp

<x-main-layout :meta="$meta">
    <div class="container mx-auto">
        <div class="flex justify-center">
            <h1 class="px-4 text-3xl my-12 sm:text-4xl lg:text-5xl md:my-24 uppercase">Contact</h1>
        </div>

        <div id="app"></div>
    </div>

    @push('scripts')
        <script src="{{ asset('js/contact.js') }}"></script>
    @endpush

</x-main-layout>


