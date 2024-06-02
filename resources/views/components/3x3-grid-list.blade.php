<div class="py-24 px-4 sm:px-6">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-12 gap-y-24">
        @foreach($items as $item)
            <div class="pb-16 md:pb-8">
                <a href="{{ route($route, $item->slug) }}">
                    <div class="flex flex-col-reverse gap-14">
                        <div class="w-full">
                            <h2 class="text-lg font-bold md:text-lg lg:text-xl hover:underline text-center">{{ $item->title }}</h2>
                            <h3 class="text-lg md:text-lg lg:text-xl text-gray-700 text-center">{{ $item->{$subtitleName} }}</h3>
                        </div>
                        <div class="w-full md:hidden shadow-lg">
                            <img src="{{ $item->image($thumbnailRole, 'mobile') }}"
                                 alt="{{ $item->imageAltText($thumbnailRole) }}">
                        </div>
                        <div class="hidden md:block shadow-lg">
                            <img src="{{ $item->image($thumbnailRole) }}" alt="{{ $item->imageAltText($thumbnailRole) }}">
                        </div>
                    </div>
                </a>

            </div>
        @endforeach
    </div>
</div>
