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

        <div class="py-24">
            <div class="mx-auto w-1/3">
                <h1 class="px-4 text-3xl sm:text-4xl lg:text-8xl md:my-24 text-center text-neutral-900 font-bold">{{ $design->title }}</h1>
            </div>
        </div>

        @push('styles')

        @endpush

        <div class="py-12">
            <div class="mx-auto px-6">
                <div id="gallery" class="columns-1 md:columns-2 lg:columns-1">
                    @foreach($design->imagesAsArrays('images') as $image)
                        <a class="gallery-item"
                           href="{{ $image['src'] }}"
                           title="{{ $image['alt'] }}"
                        >
                            <img
                                class="mb-4"
                                alt="{{ $image['alt'] ?? '' }}"
                                loading="lazy"
                                src="{{ $image['src'] }}"
                            />

                        </a>
                    @endforeach
                </div>
                <div class="grid grid-cols-3 gap-x-12 gap-y-24">

{{--                    <div>--}}
{{--                        <img src="{{ $designs[0]->image('thumbnail') }}" alt="">--}}
{{--                        <h2 class="font-bold text-xl mt-4">{{ $designs[0]->title }}</h2>--}}
{{--                        <h3 class="text-xl mt-2">{{ $designs[0]->title }}</h3>--}}
{{--                    </div>--}}
{{--                    <div>--}}
{{--                        <img src="{{ $designs[0]->image('thumbnail') }}" alt="">--}}
{{--                        <h2 class="font-bold text-xl mt-4">{{ $designs[0]->title }}</h2>--}}
{{--                        <h3 class="text-xl mt-2">{{ $designs[0]->title }}</h3>--}}
{{--                    </div>--}}
{{--                    <div>--}}
{{--                        <img src="{{ $designs[0]->image('thumbnail') }}" alt="">--}}
{{--                        <h2 class="font-bold text-xl mt-4">{{ $designs[0]->title }}</h2>--}}
{{--                        <h3 class="text-xl mt-2">{{ $designs[0]->title }}</h3>--}}
{{--                    </div><div>--}}
{{--                        <img src="{{ $designs[0]->image('thumbnail') }}" alt="">--}}
{{--                        <h2 class="font-bold text-xl mt-4">{{ $designs[0]->title }}</h2>--}}
{{--                        <h3 class="text-xl mt-2">{{ $designs[0]->title }}</h3>--}}
{{--                    </div>--}}
{{--                    <div>--}}
{{--                        <img src="{{ $designs[0]->image('thumbnail') }}" alt="">--}}
{{--                        <h2 class="font-bold text-xl mt-4">{{ $designs[0]->title }}</h2>--}}
{{--                        <h3 class="text-xl mt-2">{{ $designs[0]->title }}</h3>--}}
{{--                    </div>--}}
{{--                    <div>--}}
{{--                        <img src="{{ $designs[0]->image('thumbnail') }}" alt="">--}}
{{--                        <h2 class="font-bold text-xl mt-4">{{ $designs[0]->title }}</h2>--}}
{{--                        <h3 class="text-xl mt-2">{{ $designs[0]->title }}</h3>--}}
{{--                    </div>--}}

                </div>
            </div>

{{--            @foreach($designs as $design)--}}
{{--                <div></div>--}}
{{--            @endforeach--}}
        </div>
    </div>
</x-main-layout>

