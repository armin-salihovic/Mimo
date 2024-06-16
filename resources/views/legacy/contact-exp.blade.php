@php
    $meta = [
       "title" => "Monument and Memorial Centre, Žuč | Emir Salihović Mimo",
       "description" => "A monument and museum commemorating the fallen soldiers and fighters of the Battles of Žuč.",
       "thumbnail" => "https://cdn.mimo.ba/img/og-architecture-zuc-thumbnail.jpg",
    ];
@endphp

<x-main-layout :meta="$meta">
    <div class="mx-auto">
        <div class="flex">
            <h1 class="px-4 text-3xl my-12 sm:text-4xl lg:text-5xl md:my-24 uppercase">Contact</h1>
        </div>

        <div class="flex flex-col lg:flex-row lg:gap-10 pb-48">
            <div class="w-full lg:w-8/12 order-2">
                <div id="app"></div>
            </div>
            <div class="w-full lg:w-5/12 order-1 px-6 mb-12 text-lg md:text-xl">
                <p class="mb-12">If you have any questions or comments for Mimo, please reach out via email, phone, WhatsApp or Viber, or send a message using the contact form.</p>
                <div class="flex flex-col">
                    <a class="uppercase pb-1" href="mailto:info@mimo.ba">info@mimo.ba</a>
                    <div>+49 1522 2378953</div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script src="{{ asset('js/contact.js') }}"></script>
    @endpush

</x-main-layout>


