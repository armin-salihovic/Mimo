<x-main-layout :meta="$meta">
    <x-lightbox />

    <div class="container mx-auto">
        <div class="flex justify-center">
            <h1 class="px-4 text-3xl my-12 sm:text-4xl lg:text-5xl md:my-24 uppercase">Sculpture</h1>
        </div>

        <div id="gallery">
            @foreach($sculptures as $sculpture)

                    <div class="flex flex-col lg:flex-row mb-24">
                        <x-gallery-title :title="$sculpture->title" />

                        <div class="w-full lg:w-3/4">
                            <div class="px-4 lg:pl-3 lg:pr-6 mb-4 h-full">
                                <div class="columns-1 md:columns-2 lg:columns-3">
                                    @foreach($sculpture->imagesAsArrays('images') as $image)
                                            <a class="gallery-item"
                                               href="{{ $image['src'] }}"
                                               title="{{ $image['alt'] }}"
                                            >
                                                <x-image-art class="mb-4"
                                                             :alt="$image['alt']"
                                                             :img="$image['src']"
                                                />
                                            </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>

    </div>
</x-main-layout>

