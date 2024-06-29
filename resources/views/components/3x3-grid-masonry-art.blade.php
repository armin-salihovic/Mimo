<div class="w-full">
    <div class="h-full">
        <div class="columns-1 md:columns-2 lg:columns-3">
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
