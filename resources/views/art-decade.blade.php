@php
    $seen = [];
@endphp

<x-art-layout :arts="$arts" :art="$art ?? null" :art-links="$artLinks" :meta="$meta">
    <x-slot name="gallery">
        <div id="gallery">
            @foreach($arts as $art)
                @if(!in_array($art->year, $seen))
                    @php
                        $seen[] = $art->year;
                    @endphp
                    <div class="flex flex-col mb-24 px-6">
                        <x-gallery-title :title="$art->year" />

                        <div class="w-full">
                            <div class=" h-full">
                                <div class="columns-1 md:columns-2 lg:columns-3">
                                    @foreach($arts as $art2)
                                        @if($art->year === $art2->year)
                                            <a class="gallery-item"
                                               href="{{ $art2->image('image', 'free') }}"
                                               title="some title"
                                               data-year="{{ $art2->year }}"
                                               data-width="{{ $art2->width }}"
                                               data-height="{{ $art2->height }}"
                                               data-status="{{ $art2->status }}"
                                               data-sn="{{ $art2->serial_number }}"
                                            >
                                                <x-image-art class="mb-4"
                                                             :alt="$art2->imageAltText('image')"
                                                             :img="$art2->image('image', 'free')"
                                                />
                                            </a>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </x-slot>
</x-art-layout>
