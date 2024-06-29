@php
    $seen = [];
    $filteredArtsByYears = [];
    foreach($arts as $item) {
        if (!array_key_exists($item->year, $filteredArtsByYears)) {
            $filteredArtsByYears[$item->year] = [];
        }

        $filteredArtsByYears[$item->year][] = $item;
    }
    krsort($filteredArtsByYears);
@endphp
<x-art-layout :arts="$arts" :art="$art ?? null" :art-links="$artLinks" :meta="$meta">
    <x-slot name="gallery">
        <div id="gallery">
            @foreach($filteredArtsByYears as $year => $filteredArtsByYear)
                <div class="flex flex-col mb-24 px-6">
                    <x-gallery-title :title="$year"/>

                    <div class="w-full">
                        <div class=" h-full">
                            <div class="columns-1 md:columns-2 lg:columns-3">
                                @foreach($filteredArtsByYear as $art)
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
            @endforeach
        </div>
    </x-slot>
</x-art-layout>
