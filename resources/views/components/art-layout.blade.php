<x-main-layout :meta="$meta">
    @if(isset($art))
        <x-lightbox-art-active-first :art="$art" :arts="$arts"/>
    @else
        <x-lightbox-art/>
    @endif

    <div class="mx-auto">
        <x-page-title title="Art" />
        <div class="w-full flex justify-center">
            <div class="px-4 text-lg md:text-3xl flex gap-4 lg:gap-16 mb-12 lg:mb-24">
                @foreach($artLinks as $link)
                    <a href="{{ $link['route'] }}">{{ $link['name'] }}</a>
                @endforeach
            </div>
        </div>
        {{ $gallery }}
    </div>
</x-main-layout>
