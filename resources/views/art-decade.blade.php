@php
    $meta = [
       "title" => "Monument and Memorial Centre, Žuč | Emir Salihović Mimo",
       "description" => "A monument and museum commemorating the fallen soldiers and fighters of the Battles of Žuč.",
       "thumbnail" => "https://cdn.mimo.ba/img/og-architecture-zuc-thumbnail.jpg",
    ];

    $seen = [];
@endphp

<x-art-layout :arts="$arts" :art="$art ?? null" :art-links="$artLinks">
    <x-slot name="gallery">
        <div id="gallery">
            @foreach($arts as $art)
                @if(!in_array($art->year, $seen))
                    @php
                        $seen[] = $art->year;
                    @endphp
                    <div class="flex flex-col lg:flex-row mb-24">
                        <div class="lg:w-1/4 w-full px-4 lg:pr-0 lg:pl-6 lg:w-1/4 pb-6 lg:pb-0 flex justify-center lg:justify-start">
                            <h2 class="text-2xl lg:text-5xl font-bold">{{ $art->year }}</h2>
                        </div>

                        <div class="w-full lg:w-3/4">
                            <div class="px-4 lg:pl-3 lg:pr-6 mb-4 h-full">
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
