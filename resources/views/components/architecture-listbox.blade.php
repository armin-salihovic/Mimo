<div class="pb-16 md:pb-8">
    <a href="{{ route('architecture.show', $item->slug) }}">
        <div class="flex flex-col-reverse gap-14">
            <div class="w-full">
                <h2 class="text-lg font-bold md:text-lg lg:text-xl hover:underline text-center">{{ $item->title }}</h2>
                <h3 class="text-lg md:text-lg lg:text-xl text-gray-700 text-center">{{ $item->location }}</h3>
            </div>
            <div class="w-full md:hidden shadow-lg">
                <img src="{{ $item->image('cover', 'mobile') }}" alt="{{ $item->imageAltText('cover') }}">
            </div>
            <div class="hidden md:block shadow-lg">
                <img src="{{ $item->image('cover') }}" alt="{{ $item->imageAltText('cover') }}">
            </div>
        </div>
    </a>
</div>

