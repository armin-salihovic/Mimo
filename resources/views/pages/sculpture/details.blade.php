<x-main-layout :meta="$meta">
    <x-lightbox/>
    <x-lazy-loading />
    <x-scroll-to-top />
    <div class="mx-auto">
        <x-page-title :title="$sculpture->title"/>
        <div class="py-24 px-4 sm:px-6">
            <div id="gallery" class="grid grid-cols-1 lg:grid-cols-3 gap-4">
                @foreach($sculpture->imagesAsArrays('images') as $image)
                    <x-lazy-loading-wrapper :lqip="$image['lqip']">
                        <a class="gallery-item"
                           href="{{ $image['src'] }}"
                           title="{{ $image['alt'] }}"
                           data-lqip="{{ $image['lqip'] }}"
                           data-aspect-ratio="{{ $image['width'] . '/' .  $image['height'] }}"
                        >
                            <x-image-art class=""
                                         :alt="$image['alt']"
                                         :img="$image['src']"
                                         aspect-ratio="16/9"
                            />
                        </a>
                    </x-lazy-loading-wrapper>
                @endforeach
            </div>
        </div>
    </div>
</x-main-layout>

