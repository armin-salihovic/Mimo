@php
    $meta = [
        'title' => $design->title,
        'description' => $design->description,
        'thumbnail' => $design->image('thumbnail')
    ];
@endphp

<x-main-layout :meta="$meta">
    <x-lightbox />
    <div class="mx-auto">
        <x-page-title :title="$design->title"/>
        <div class="px-4 sm:px-6">
            <div id="gallery" class="columns-1 md:columns-2 lg:columns-3">
                @foreach($design->imagesAsArrays('images') as $image)
                    <a class="gallery-item"
                       href="{{ $image['src'] }}"
                       title="{{ $image['alt'] }}"
                    >
                        <x-image-art class="mb-4"
                                     :alt="$image['alt']"
                                     :img="$image['src']"
                        />
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</x-main-layout>

