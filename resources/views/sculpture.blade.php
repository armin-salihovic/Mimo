<x-main-layout :meta="$meta">
    <x-lightbox />
    <x-lazy-loading />

    <x-page-title title="Sculpture" />

    @foreach($sculptures as $sculpture)
    <div class="py-24 px-4 sm:px-6">
        <div>
            <div class="pb-8 md:hidden">
                <div
                    class="blur-div"
                    style="background-image: url({{ $sculpture->lowQualityImagePlaceholder('thumbnail', 'mobile') }})"
                >
                    <img
                        src="{{ $sculpture->image('thumbnail', 'mobile') }}"
                        alt="{{ $sculpture->imageAltText('thumbnail') }}"
                        style="aspect-ratio: 1/1;"
                        loading="lazy"
                    >
                </div>
            </div>

            <div class="pb-16 hidden md:block">
                <div
                    class="blur-div"
                    style="background-image: url({{ $sculpture->lowQualityImagePlaceholder('thumbnail', 'index') }})"
                >
                    <img
                        src="{{ $sculpture->image('thumbnail', 'index') }}"
                        alt="{{ $sculpture->imageAltText('thumbnail') }}"
                        style="aspect-ratio: 21/9;"
                        loading="lazy"
                    >
                </div>
            </div>

            <div class="flex justify-center md:justify-between md:items-center">
                <div class="text-center md:text-start">
                    <h2 class="text-2xl md:text-3xl lg:text-5xl md:pb-4 font-bold">{{ $sculpture->title }}</h2>
                    <div class="text-xl md:text-2xl lg:text-3xl">2015</div>
                </div>
                <a href="{{ route('sculpture.show', $sculpture->slug) }}" class="hidden md:block bg-neutral-900 hover:bg-neutral-700 text-white font-bold py-8 px-16">See Sculpture</a>
            </div>
        </div>
    </div>
    @endforeach

</x-main-layout>

