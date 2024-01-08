<div class="px-6">
    <div class="max-w-5xl m-auto flex gap-6 border-b pb-9 mb-9">
        <figure class="w-2/4 sm:w-1/4">
            <a href="{{ route('news.show', $news->slug) }}">
                <img src="{{ $news->image('cover') }}" alt="{{ $news->imageAltText('cover') }}">
            </a>
        </figure>
        <div class="w-2/4 sm:w-3/4">
            <a href="{{ route('news.show', $news->slug) }}">
                <h2 class="text-base sm:text-2xl md:text-3xl leading-4 mb-3">{{ $news->title }}</h2>
            </a>
            <p class="text-sm md:text-base text-neutral-500 mb-3 hidden sm:block">{{ $news->description }}</p>
            <time class="font-mono uppercase text-xs md:text-sm text-red-500 font-bold">{{ $news->getDate() }}</time>
        </div>
    </div>
</div>
