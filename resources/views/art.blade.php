<x-art-layout :arts="$arts" :art="$art ?? null" :art-links="$artLinks">
    <x-slot name="gallery">
        <div class="flex flex-col lg:flex-row">
            <div class="w-full px-4 md:pl-6 lg:pr-0 lg:pl-6 lg:w-1/4 pb-6 lg:pb-0 flex justify-center lg:justify-start">
                <h2 class="text-2xl lg:text-5xl">Selected Paintings</h2>
            </div>
            <div class="w-full lg:w-3/4">
                <div class="px-4 lg:pl-3 lg:pr-6 mb-4 h-full">
                    <div id="gallery" class="columns-1 md:columns-2 lg:columns-3">
                        @foreach($arts as $art)
                            <a class="gallery-item"
                               href="{{ $art->image('image', 'free') }}"
                               title="some title"
                               data-year="{{ $art->year }}"
                               data-width="{{ $art->width }}"
                               data-height="{{ $art->height }}"
                               data-status="{{ $art->status }}"
                               data-sn="{{ $art->serial_number }}"
                            >
                                <x-image-art class="mb-4"
                                             :alt="$art->imageAltText('image')"
                                             :img="$art->image('image', 'free')"
                                />
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-art-layout>
