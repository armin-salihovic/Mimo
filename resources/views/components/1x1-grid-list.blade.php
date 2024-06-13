<x-lightbox />
<x-lazy-loading />

@foreach($items as $item)
<div class="py-24 px-4 sm:px-6">
    <div>
        <div class="pb-8 md:hidden">
            <div
                class="blur-div"
                style="background-image: url({{ $item->lowQualityImagePlaceholder($thumbnailRole, 'mobile') }})"
            >
                <img
                    src="{{ $item->image($thumbnailRole, 'mobile') }}"
                    alt="{{ $item->imageAltText($thumbnailRole) }}"
                    style="aspect-ratio: 1/1;"
                    loading="lazy"
                >
            </div>
        </div>

        <div class="pb-16 hidden md:block">
            <div
                class="blur-div"
                style="background-image: url({{ $item->lowQualityImagePlaceholder($thumbnailRole, 'index') }})"
            >
                <img
                    src="{{ $item->image($thumbnailRole, 'index') }}"
                    alt="{{ $item->imageAltText($thumbnailRole) }}"
                    style="aspect-ratio: 21/9;"
                    loading="lazy"
                >
            </div>
        </div>

        <div class="flex justify-center md:justify-between md:items-center">
            <div class="text-center md:text-start">
                <h2 class="text-2xl md:text-3xl lg:text-5xl md:pb-4 font-bold">{{ $item->title }}</h2>
                <div class="text-xl md:text-2xl lg:text-3xl">{{ $item->{$subtitleName} }}</div>
            </div>
            <a href="{{ route($route, $item->slug) }}" class="hidden md:block bg-neutral-900 hover:bg-neutral-700 text-white font-bold py-8 px-16">See Sculpture</a>
        </div>
    </div>
</div>
@endforeach


