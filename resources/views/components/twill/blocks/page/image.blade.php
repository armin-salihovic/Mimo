@php

    $width = $block->imageAsArray('image', $block->input('orientation'))['width'];
            $height = $block->imageAsArray('image', $block->input('orientation'))['height'];
@endphp

<div class="w-full mb-16 px-6 lg:px-96">
    <x-lazy-loading-wrapper :lqip="$block->lowQualityImagePlaceholder('image', $block->input('orientation'))">
        <img
            src="{{ $block->image('image', $block->input('orientation')) }}"
            alt="{{ $block->imageAltText('image') }}"
            width="100%"
            loading="lazy"
            style="aspect-ratio: {{ "$width/$height" }};"
        >
    </x-lazy-loading-wrapper>
</div>
