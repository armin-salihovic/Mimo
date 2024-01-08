<div class="pb-10 md:pb-8">
    <a href="{{ route('architecture.show', $item->slug) }}">
        <div class="flex flex-col-reverse md:flex-row gap-4">
            <div class="w-full md:w-3/5">
                <h2 class="text-xl md:text-2xl lg:text-3xl">{{ $item->title }}</h2>
                <h3 class="text-lg md:text-xl lg:text-2xl text-gray-700">{{ $item->location }}</h3>
            </div>
            <div class="w-full md:w-2/5">
                <img src="{{ $item->image('cover') }}" alt="{{ $item->imageAltText('cover') }}">
            </div>
        </div>
    </a>
</div>

