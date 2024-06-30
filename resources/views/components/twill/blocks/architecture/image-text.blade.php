<div class="pb-16 lg:pb-32">
    <div class="grid grid-cols-1 gap-8 md:grid-cols-2 md:gap-16 lg:gap-24">
        <div class="">
            <h2 class="text-2xl sm:text-4xl text-neutral-900 font-bold tracking-wider">{{ $block->translatedInput('title') }}</h2>
            <h3 class="text-lg lg:text-xl">{{ $block->translatedInput('location') }}</h3>
            <h3 class="lg:text-lg">{{ $block->translatedInput('status') }}</h3>
            <h3 class="lg:text-lg">
                @if($block->input('start_year') !== null || $block->input('start_year') !== '')
                    <p class="text-lg">{{ $block->input('start_year') }}</p>
                @endif
                @if($block->input('end_year') === null || $block->input('end_year') === '')
                    <p class="text-lg"> - {{$block->input('end_year')}}</p>
                @endif
            </h3>
        </div>
        <div class="text-xl leading-7 lg:leading-10 custom-wysiwyg">{!! $block->translatedInput('text') !!}</div>
    </div>
</div>

@php
    $nOfImages = count($block->imagesAsArraysWithCrops('blockImages'));
@endphp

<div class="w-full pb-32 lg:pb-64">
    <div class="mb-4">
        <div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                @foreach($block->imagesAsArraysWithCrops('blockImages') as $img)
                    @if (!$loop->last || $nOfImages % 2 === 0)
                        <x-lazy-loading-wrapper>
                            <a class="gallery-item h-full" href="{{ $img['free']['src'] }}"
                               title="{{$img['mobile']['alt']}}">
                                <x-image-arch class="h-full" :img="$img['mobile']['src']" :alt="$img['mobile']['alt']"
                                              aspect-ratio="1/1"/>
                            </a>
                        </x-lazy-loading-wrapper>
                    @endif
                @endforeach
            </div>
            @if($nOfImages % 2 !== 0)
                @php
                    $imgsArray = $block->imagesAsArraysWithCrops('blockImages');
                    $img = array_pop($imgsArray);
                    $hasFrame = $block->medias->last()->getMetadata('frame');

                    $heightTooSmall = $img['free']['height'] < 776;
                    $sizeClass = $heightTooSmall ? 'w-full' : 'h-full';
                    $centerClass = $heightTooSmall ? 'items-center' : 'justify-center';
                    $divStyle = ($heightTooSmall ? 'padding: 3.77% 0;' : 'height: 776px;') . ' background-color: #e6e6e6;';
                @endphp

                @if($hasFrame)
                    <div class="hidden lg:flex {{ $centerClass }} mt-8" style="{{ $divStyle }}">
                        <x-lazy-loading-wrapper class="{{$sizeClass}}">
                            <a class="gallery-item {{$sizeClass}}" href="{{ $img['free']['src'] }}"
                               title="{{$img['free']['alt']}}">
                                <x-image-arch class="{{$sizeClass}}"
                                              :img="$img['free']['src']"
                                              :alt="$img['free']['alt']"

                                />
                            </a>
                        </x-lazy-loading-wrapper>
                    </div>
                    <x-lazy-loading-wrapper class="w-full lg:hidden">
                        <a class="gallery-item w-full" href="{{ $img['free']['src'] }}"
                           title="{{$img['free']['alt']}}">
                            <x-image-arch class="w-full"
                                          :img="$img['free']['src']"
                                          :alt="$img['free']['alt']"

                            />
                        </a>
                    </x-lazy-loading-wrapper>

                @else
                    <x-lazy-loading-wrapper class="w-full mt-8">
                        <a class="gallery-item h-full w-full" href="{{ $img['free']['src'] }}"
                           title="{{$img['free']['alt']}}">
                            <x-image-arch class="hidden lg:block h-full w-full" :img="$img['default']['src']"
                                          :alt="$img['default']['alt']" aspect-ratio="239/100"/>
                            <x-image-arch class="lg:hidden w-full"
                                          :img="$img['mobile']['src']"
                                          :alt="$img['mobile']['alt']"
                            />
                        </a>
                    </x-lazy-loading-wrapper>
                @endif
            @endif
        </div>
    </div>
</div>
