<div class="pb-10 md:pb-8">
    <a href="{{ route('news.show', $news->slug) }}">
        <div class="flex flex-row gap-4">
            <div class="w-1/4 md:w-2/5 lg:mr-16">
                <div  class="md:hidden">
                    <x-lazy-loading-wrapper :lqip="$news->lowQualityImagePlaceholder('cover', 'mobile')">
                        <img
                            src="{{ $news->image('cover', 'mobile') }}"
                            alt="{{ $news->imageAltText('cover') }}"
                            loading="lazy"
                            style="aspect-ratio: 1/1;"
                        >
                    </x-lazy-loading-wrapper>
                </div>
                <div class="hidden md:block">
                    <x-lazy-loading-wrapper :lqip="$news->lowQualityImagePlaceholder('cover')">
                        <img
                            src="{{ $news->image('cover') }}"
                            alt="{{ $news->imageAltText('cover') }}"
                            loading="lazy"
                            style="aspect-ratio: 16/9;"
                        >
                    </x-lazy-loading-wrapper>
                </div>
            </div>
            <div class="w-3/4 md:w-3/5">
                <div class="flex flex-col justify-between h-full">
                    <div>
                        <h2 class="text-xl md:text-2xl lg:text-3xl md:pb-8">{{ $news->title }}</h2>
                        <h3 class="text-lg md:text-xl lg:text-2xl text-gray-700 hidden sm:block">{{ $news->description }}</h3>
                    </div>
                    <time class="font-mono uppercase text-xs md:text-sm text-gray-700 font-bold">{{ $news->getDate() }}</time>
                </div>

            </div>
        </div>
    </a>
</div>
