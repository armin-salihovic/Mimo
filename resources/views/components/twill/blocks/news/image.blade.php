@php
    $width = $block->imageAsArray('image')['width'];
    $height = $block->imageAsArray('image')['height'];
@endphp

<div class="max-w-6xl mx-auto my-10">
    <x-lazy-loading-wrapper :lqip="$block->lowQualityImagePlaceholder('image')">
        <img
            src="{{ $block->image('image') }}"
            alt="{{ $block->imageAltText('image') }}"
            loading="lazy"
            style="aspect-ratio: {{ "$width/$height" }};"
        >
    </x-lazy-loading-wrapper>
    <figcaption class="text-xs text-neutral-500 font-mono mt-2 px-6 lg:px-0">Getty; The Atlantic</figcaption>
</div>
