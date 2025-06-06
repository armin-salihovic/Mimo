@php
    $collection = [];
    $remainderCollection = [];
    $remainder = count($items) % 3;

    for ($i = 0; $i < count($items) - $remainder; $i++) {
        $collection[] = $items[$i];
    }
    for (count($items) - $remainder - 1; $i < count($items); $i++) {
        $remainderCollection[] = $items[$i];
    }

//    temporary
    $collection = $items;
@endphp

<x-scroll-to-top/>
<x-lazy-loading/>
<div class="py-24 px-4 sm:px-6">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-12 gap-y-24 {{ $remainder !== 0 ? 'mb-24' : ''}}">
        @foreach($collection as $item)
            <div class="pb-16 md:pb-8">
                <a href="{{ route($route, $item->slug) }}">
                    <div class="flex flex-col-reverse gap-14">
                        <div class="w-full">
                            <h2 class="text-lg font-bold md:text-lg lg:text-xl hover:underline text-center">{{ $item->title }}</h2>
                            <h3 class="text-lg md:text-lg lg:text-xl text-gray-700 text-center">{{ $item->{$subtitleName} }}</h3>
                        </div>
                        <div class="w-full md:hidden shadow-lg">
                            <x-lazy-loading-wrapper :lqip="$item->lowQualityImagePlaceholder($thumbnailRole, 'mobile')">
                                <img src="{{ $item->image($thumbnailRole, 'mobile') }}"
                                     alt="{{ $item->imageAltText($thumbnailRole) }}"
                                     style="aspect-ratio: 1/1;"
                                     loading="lazy"
                                >
                            </x-lazy-loading-wrapper>
                        </div>
                        <div class="hidden md:block shadow-lg">
                            <x-lazy-loading-wrapper :lqip="$item->lowQualityImagePlaceholder($thumbnailRole)">
                                <img src="{{ $item->image($thumbnailRole) }}"
                                     alt="{{ $item->imageAltText($thumbnailRole) }}"
                                     style="aspect-ratio: 4/5;"
                                     loading="lazy"
                                >
                            </x-lazy-loading-wrapper>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>
