@push('styles')
    <style>
        .custom-grid {
            display: flex;
            flex-flow: row wrap;
            justify-content: center;
            align-items: stretch;
            align-content: flex-start;
            gap: 1rem 1rem;
        }

        .custom-grid-item {
            flex: 0 0 calc(33.33% - (1rem * 2) / 3);
        }

        @media (max-width: 1023px) {
            .custom-grid-item {
                flex: 0 0 calc(50% - (1rem * 2) / 2);
            }
        }

        @media (max-width: 767px) {
            .custom-grid-item {
                flex: 0 0 calc(100% - (1rem * 2) / 1);
            }
        }

    </style>
@endpush

<div class="w-full">
    <div class="h-full">
        <div class="{{ count($arts) < 3 ? 'custom-grid' : 'columns-1 md:columns-2 lg:columns-3' }}">
            @foreach($arts as $art)
                <x-lazy-loading-wrapper :class="count($arts) < 3 ? 'custom-grid-item' : ''" :lqip="$art->lowQualityImagePlaceholder('image', 'free')">
                    <a class="gallery-item"
                       href="{{ $art->image('image', 'free') }}"
                       title="{{ $art->generateTitle() }}"
                       data-year="{{ $art->year }}"
                       data-width="{{ $art->width }}"
                       data-height="{{ $art->height }}"
                       data-status="{{ $art->status }}"
                       data-technique="{{ $art->technique ?? 'No Information' }}"
                       data-sn="{{ $art->serial_number }}"
                       data-lqip="{{ $art->lowQualityImagePlaceholder('image', 'free') }}"
                       data-aspect-ratio="{{ $art->getAspectRatioFormatted('image', 'free') }}"
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
