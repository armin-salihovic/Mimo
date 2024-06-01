@php
    $meta = [
       "title" => "Monument and Memorial Centre, Žuč | Emir Salihović Mimo",
       "description" => "A monument and museum commemorating the fallen soldiers and fighters of the Battles of Žuč.",
       "thumbnail" => "https://cdn.mimo.ba/img/og-architecture-zuc-thumbnail.jpg",
    ];
@endphp

<x-main-layout :meta="$meta">
    <div class="mx-auto">
        <x-page-title title="Contact" />

        <div class="flex flex-col lg:flex-row lg:gap-10 pb-48">
            <div class="w-full lg:w-8/12 order-2">
                <div id="app"></div>
            </div>
            <div class="w-full lg:w-5/12 order-1 px-6 mb-12 text-lg md:text-xl">
                <p class="mb-12 text-3xl">If you have any questions or comments for Mimo, please reach out via email, or send a message using the contact form.</p>
                <div class="flex flex-col text-3xl">
                    <a class="uppercase pb-1" href="mailto:info@mimo.ba">info@mimo.ba</a>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script src="{{ asset('js/contact.js') }}"></script>
    @endpush

</x-main-layout>


