<x-art-layout :arts="$arts" :art="$art ?? null" :art-links="$artLinks" :meta="$meta">
    <x-slot name="gallery">
        <div class="flex flex-col">
            <div class="w-full px-6 text-center mb-24">
                <h2 class="text-2xl lg:text-5xl">Selected Works</h2>
            </div>
            <div class="w-full">
                <div class="px-6 mb-4 h-full">
                    <div id="gallery" class="columns-1 md:columns-2 lg:columns-3">
                        @foreach($arts as $art)
                            <x-lazy-loading-wrapper :lqip="$art->lowQualityImagePlaceholder('image', 'free')">
                                <a class="gallery-item"
                                   href="{{ $art->image('image', 'free') }}"
                                   title="{{ $art->generateTitle() }}"
                                   data-year="{{ $art->year }}"
                                   data-width="{{ $art->width }}"
                                   data-height="{{ $art->height }}"
                                   data-status="{{ $art->status }}"
                                   data-technique="{{ $art->technique ?? 'No Information' }}"
                                   data-sn="{{ $art->serial_number }}"
                                >
                                    <x-image-art class="mb-4"
                                                 :alt="$art->generateTitle()"
                                                 :img="$art->image('image', 'free')"
                                                 :aspect-ratio="$art->getAspectRatioFormatted('image', 'free')"
                                    />
                                </a>
                            </x-lazy-loading-wrapper>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-art-layout>
