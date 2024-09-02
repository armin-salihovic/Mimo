@php
    $width = $block->imageAsArray('news-image')['width'];
    $height = $block->imageAsArray('news-image')['height'];
@endphp

<div class="max-w-6xl mx-auto my-10">
    <x-lazy-loading-wrapper :lqip="$block->lowQualityImagePlaceholder('news-image')">
        <img
            src="{{ $block->image('news-image') }}"
            alt="{{ $block->imageAltText('news-image') }}"
            loading="lazy"
            style="aspect-ratio: {{ "$width/$height" }};"
        >
    </x-lazy-loading-wrapper>
    <figcaption class="text-xs text-neutral-500 font-mono mt-2 px-6 lg:px-0">{{ $block->imageCaption('news-image') }}</figcaption>
</div>
