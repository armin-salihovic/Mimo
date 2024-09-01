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

    $collection = $items;
    $filteredCollection = [];
    $x = 0;
    $index = 0;
    foreach($collection as $item) {
        if ($x === 3) {
            $x = 0;
            $index++;
        }
        $filteredCollection[$index][] = $item;
        $x++;
    }
@endphp

<x-scroll-to-top/>
<x-lazy-loading/>
<div class="flex flex-wrap">
    <div class="grid grid-cols-3 gap-4 w-3/4">
        @foreach ($filteredCollection as $row)
            @if ($loop->last)
                <div class="col-span-3">
                @foreach ($row as $item)
                    <div class="pb-16 md:pb-8">
                        <a href="{{ route($route, $item->slug) }}">
                            <div class="flex flex-col-reverse gap-14">
                                <div class="w-full">
                                    <h2 class="text-lg font-bold md:text-lg lg:text-xl hover:underline text-center">{{ $item->title }}</h2>
                                    <h3 class="text-lg md:text-lg lg:text-xl text-gray-700 text-center">{{ $item->{$subtitleName} }}</h3>
                                </div>
                                <div class="w-full md:hidden shadow-lg">
                                    <x-lazy-loading-wrapper
                                        :lqip="$item->lowQualityImagePlaceholder($thumbnailRole, 'mobile')">
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
            @else
                @foreach ($row as $item)

                    <div class="pb-16 md:pb-8">
                        <a href="{{ route($route, $item->slug) }}">
                            <div class="flex flex-col-reverse gap-14">
                                <div class="w-full">
                                    <h2 class="text-lg font-bold md:text-lg lg:text-xl hover:underline text-center">{{ $item->title }}</h2>
                                    <h3 class="text-lg md:text-lg lg:text-xl text-gray-700 text-center">{{ $item->{$subtitleName} }}</h3>
                                </div>
                                <div class="w-full md:hidden shadow-lg">
                                    <x-lazy-loading-wrapper
                                        :lqip="$item->lowQualityImagePlaceholder($thumbnailRole, 'mobile')">
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
            @endif
            @if ($loop->last)
                @for ($i = 0; $i < 3 - count($row); $i++)
                    <div class="col-span-1"></div>
                @endfor
            @endif
        @endforeach

        {{--    @foreach($filteredCollection as $itemsX)--}}
        {{--        <div class="w-full sm:w-1/3 flex flex-col space-y-4">--}}
        {{--            --}}
        {{--        @foreach($itemsX as $item)--}}
        {{--                <div class="pb-16 md:pb-8">--}}
        {{--                    <a href="{{ route($route, $item->slug) }}">--}}
        {{--                        <div class="flex flex-col-reverse gap-14">--}}
        {{--                            <div class="w-full">--}}
        {{--                                <h2 class="text-lg font-bold md:text-lg lg:text-xl hover:underline text-center">{{ $item->title }}</h2>--}}
        {{--                                <h3 class="text-lg md:text-lg lg:text-xl text-gray-700 text-center">{{ $item->{$subtitleName} }}</h3>--}}
        {{--                            </div>--}}
        {{--                            <div class="w-full md:hidden shadow-lg">--}}
        {{--                                <x-lazy-loading-wrapper :lqip="$item->lowQualityImagePlaceholder($thumbnailRole, 'mobile')">--}}
        {{--                                    <img src="{{ $item->image($thumbnailRole, 'mobile') }}"--}}
        {{--                                         alt="{{ $item->imageAltText($thumbnailRole) }}"--}}
        {{--                                         style="aspect-ratio: 1/1;"--}}
        {{--                                         loading="lazy"--}}
        {{--                                    >--}}
        {{--                                </x-lazy-loading-wrapper>--}}
        {{--                            </div>--}}
        {{--                            <div class="hidden md:block shadow-lg">--}}
        {{--                                <x-lazy-loading-wrapper :lqip="$item->lowQualityImagePlaceholder($thumbnailRole)">--}}
        {{--                                    <img src="{{ $item->image($thumbnailRole) }}"--}}
        {{--                                         alt="{{ $item->imageAltText($thumbnailRole) }}"--}}
        {{--                                         style="aspect-ratio: 4/5;"--}}
        {{--                                         loading="lazy"--}}
        {{--                                    >--}}
        {{--                                </x-lazy-loading-wrapper>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                    </a>--}}
        {{--                </div>--}}
        {{--            <div class="bg-red-400 h-32"></div>--}}
        {{--            <div class="bg-green-400 h-48"></div>--}}
        {{--            <div class="bg-blue-400 h-64"></div>--}}
        {{--        @endforeach--}}
        {{--        </div>--}}
        {{--        <!-- Column 1 -->--}}


        {{--        --}}
        {{--        <!-- Column 2 -->--}}
        {{--        <div class="w-full sm:w-1/3 flex flex-col space-y-4">--}}
        {{--            <div class="bg-yellow-400 h-48"></div>--}}
        {{--            <div class="bg-purple-400 h-32"></div>--}}
        {{--            <div class="bg-pink-400 h-64"></div>--}}
        {{--        </div>--}}
        {{--        <!-- Column 3 -->--}}
        {{--        <div class="w-full sm:w-1/3 flex flex-col space-y-4">--}}
        {{--            <div class="bg-indigo-400 h-64"></div>--}}
        {{--            <div class="bg-teal-400 h-32"></div>--}}
        {{--            <div class="bg-orange-400 h-48"></div>--}}
        {{--        </div>--}}
        {{--    @endforeach--}}
    </div>
    <div/>
</div>
