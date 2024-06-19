<x-main-layout :meta="$meta">
    <x-lazy-loading />
    <x-scroll-to-top />
    @push('styles')
        <style>
            .title {
                font-weight: 400;
                font-style: normal;
                font-size: 46px;
                line-height: 52px;
            }
            @media (max-width: 767px) {
                .title {
                    font-size: 38px;
                    line-height: 44px;
                }
            }
            .paragraph {
                font-weight: 400;
            }
        </style>
    @endpush

    <div class="mt-14 max-w-2xl mx-auto px-6 md:px-0">
        <p class="text-sm uppercase pb-5 font-mono text-red-500">{{ $news->content_kicker }}</p>
        <h1 class=" paragraph mb-3 title">{{ $news->title }}</h1>
        <p class="paragraph md:text-2xl text-xl mb-16">{{ $news->description }}</p>
    </div>

    <div class="max-w-6xl mx-auto">
        <x-lazy-loading-wrapper :lqip="$news->lowQualityImagePlaceholder('cover')">
            <img
                src="{{ $news->image('cover') }}"
                alt="{{ $news->imageAltText('cover') }}"
                loading="lazy"
                style="aspect-ratio: {{ $news->getAspectRatioFormatted('cover') }};"
            >
        </x-lazy-loading-wrapper>
        <figcaption class="text-xs text-neutral-500 font-mono mt-2 px-6 lg:px-0">Getty; The Atlantic</figcaption>
    </div>

    <div class="mt-14 uppercase font-mono px-6 md:px-0 text-sm max-w-2xl mx-auto mb-9">
        <div class="border-b pb-9 flex justify-between">
            <time>{{ $news->getDate() }}</time>
            <x-share-dropdown></x-share-dropdown>
        </div>
    </div>

    <div class="mt-14"></div>

    {!! $news->renderBlocks() !!}
</x-main-layout>
