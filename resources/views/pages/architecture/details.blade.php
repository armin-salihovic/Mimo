@push('scripts')
    <script>
        var introContent = document.getElementById('intro-content');
        var archGallery = document.getElementById('arch-gallery');

        function setIntroContentMarginBottom() {
            if (introContent.offsetHeight < window.innerHeight) {
                introContent.style.marginBottom = window.innerHeight - (introContent.offsetHeight + 76) + 'px';
            }
        }

        setIntroContentMarginBottom();

        window.addEventListener("resize", (event) => {
            setIntroContentMarginBottom();
        });
    </script>
@endpush

@push('styles')
    <style>
        .custom-wysiwyg > p {
            margin-bottom: 1rem;
        }
    </style>
@endpush

<x-main-layout :meta="$meta">
    <x-lazy-loading/>
    <x-scroll-to-top/>
    <div class="mx-auto px-4 sm:px-6">
        <div class="">
            <div class="py-32 lg:py-64" id="intro-content">
                <div class="grid grid-cols-1 gap-8 md:grid-cols-2 md:gap-16 lg:gap-24">
                    <div class="">
                        <h1 class="text-2xl sm:text-4xl text-neutral-900 font-bold tracking-wider">
                            {{ $architecture->title }}</h1>
                        <h2 class="text-lg lg:text-xl">{{ $architecture->location }}</h2>
                        <h2 class="lg:text-lg">{{ $architecture->status }}</h2>
                        <h2 class="lg:text-lg">
                            @if($architecture->start_year === $architecture->end_year)
                                <p class="text-lg">{{ $architecture->start_year }} </p>
                            @elseif($architecture->end_year === null || $architecture->end_year === '')
                                <p class="text-lg">{{ $architecture->start_year }} - </p>
                            @else
                                <p class="text-lg">{{ $architecture->start_year }} - {{$architecture->end_year}}</p>
                            @endif
                        </h2>
                    </div>
                    <div class="text-xl leading-7 lg:leading-10 custom-wysiwyg">{!! $architecture->intro !!}</div>
                </div>
            </div>

            @if($architecture->renderBlocks() !== '')
                <div id="gallery">
                    {!! $architecture->renderBlocks() !!}
                </div>
            @endif

            <div id="arch-gallery" class="w-full pb-32 lg:pb-64">
                <div class="mb-4">
                    <div id="gallery" class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        @foreach($architecture->imagesAsArraysWithCrops('images') as $img)
                            <x-lazy-loading-wrapper :lqip="$img['mobile']['lqip']">
                                <a
                                    class="gallery-item h-full"
                                    href="{{ $img['free']['src'] }}"
                                    title="{{$img['mobile']['alt']}}"
                                    data-lqip="{{ $img['free']['lqip'] }}"
                                    data-aspect-ratio="{{ $img['free']['width'] . '/' .  $img['free']['height'] }}"
                                >
                                    <x-image-arch class="h-full" :img="$img['mobile']['src']" :alt="$img['mobile']['alt']" aspect-ratio="1/1"/>
                                </a>
                            </x-lazy-loading-wrapper>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <x-lightbox/>
    </div>
</x-main-layout>
