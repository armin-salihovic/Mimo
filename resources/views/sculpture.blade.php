<x-main-layout :meta="$meta">
    <x-lightbox />

    <x-page-title title="Sculpture" />

    @foreach($sculptures as $sculpture)
    <div class="px-4 sm:px-6 pb-24 lg:pb-48">
        <div>
            <img class="pb-16 hidden md:block" src="{{ $sculpture->image('thumbnail', 'index') }}" alt="">
            <img class="pb-8 md:hidden" src="{{ $sculpture->image('thumbnail', 'mobile') }}" alt="">
            <div class="flex justify-center md:justify-between md:items-center">
                <div class="text-center md:text-start">
                    <h2 class="text-2xl md:text-3xl lg:text-5xl md:pb-4 font-bold">{{ $sculpture->title }}</h2>
                    <div class="text-xl md:text-2xl lg:text-3xl">2015</div>
                </div>
                <button class="hidden md:block bg-neutral-900 hover:bg-neutral-700 text-white font-bold py-8 px-16">See Sculpture</button>
            </div>
        </div>

    </div>
    @endforeach

</x-main-layout>

