@php
    $sn = $art->serial_number;
@endphp

<x-lightbox-art :active-first="true">
    <x-slot name="imageInfo">
        <span id="art-year">{{ $art->year }}</span>
        <span id="art-height">{{ rtrim(rtrim(number_format($art->height, 2, '.', ''), '0'), '.') }}cm</span>
        <span id="art-width">{{ rtrim(rtrim(number_format($art->width, 2, '.', ''), '0'), '.') }}cm</span>
        <span id="art-status">{{ $art->status }}</span>
    </x-slot>
    <x-slot name="lightboxList">
        @foreach($arts as $art)
            <figure
                class="lightbox-item"
                data-active="{{ $art->serial_number === $sn ? 'true' : 'false' }}"
                data-url="{{ $art->image('image', 'free') }}"
                data-year="{{$art->year}}"
                data-height="{{$art->height}}"
                data-width="{{$art->width}}"
                data-status="{{$art->status}}"
                data-sn="{{$art->serial_number}}"
                style="background-image: url({{ $art->lowQualityImagePlaceholder('image', 'free') }})"
            ><img
                class="lightbox-item-img"
                data-src="{{ $art->image('image', 'free') }}"
                alt=""
                src="{{ $art->serial_number === $sn ? $art->image('image', 'free') : '' }}"
                data-loaded="true"
                style="aspect-ratio: {{ $art->getAspectRatioFormatted('image') }};"
            >
            <div class="lightbox-item-title">
                <h3>{{ $art->year }} | {{ $art->size }}</h3>
                <h3>{{ $loop->index+1 }}/{{ count($arts) }}</h3>
            </div>
            </figure>
        @endforeach
    </x-slot>
</x-lightbox-art>
