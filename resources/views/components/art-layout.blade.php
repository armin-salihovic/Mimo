<x-main-layout :meta="$meta">
    <x-scroll-to-top />
    <x-lazy-loading />
    @if(isset($art))
        <x-lightbox-art-active-first :art="$art" :arts="$arts"/>
    @else
        <x-lightbox-art/>
    @endif

    <div class="mx-auto">
        <x-page-title
            title="Art"
            :subtitle="Route::currentRouteName() !== 'art' ? $artLinks[Route::currentRouteName()]['name'] : null"
        />
        <div class="hidden w-full lg:flex justify-center px-4 text-lg md:text-3xl flex gap-4 lg:gap-16 mb-12 lg:mb-24">
            @foreach($artLinks as $route => $value)
                @if($value['show_nav'])
                    <a href="{{ route($route) }}" class="{{ Route::is($route) || Route::is($value['route_detail'])  ? 'underline underline-offset-8' : '' }}">{{ $value['name'] }}</a>
                @endif
            @endforeach
        </div>
        <div class="w-full flex justify-center lg:hidden px-4 text-lg md:text-3xl flex gap-4 lg:gap-16 mb-12 lg:mb-24">
            <a href="{{ route('art') }}" class="{{ Route::currentRouteName() === 'art' ? 'underline underline-offset-8' : '' }}">{{ $artLinks['art']['name'] }}</a>
            <x-art-decade-choose :art-links="$artLinks" :exclude="['art']" default="Decades"/>
        </div>
        {{ $gallery }}
    </div>
</x-main-layout>
