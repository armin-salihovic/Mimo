@php
    $meta = [
       "title" => "Monument and Memorial Centre, Žuč | Emir Salihović Mimo",
       "description" => "A monument and museum commemorating the fallen soldiers and fighters of the Battles of Žuč.",
       "thumbnail" => "https://cdn.mimo.ba/img/og-architecture-zuc-thumbnail.jpg",
    ];
@endphp

<x-main-layout :meta="$meta">
    <div class="container mx-auto lg:flex">
        <div class="w-full lg:w-1/4">
            <div class="flex justify-between px-4">
                <h1 class="text-3xl my-12 sm:text-4xl lg:text-5xl md:my-24 uppercase">Art</h1>
                <div class="my-12">
{{--                    <x-tw-dropdown :art-links="$artLinks" />--}}
{{--                    <div class="px-4 flex-col text-xl lg:text-3xl flex md:hidden">--}}
{{--                        @foreach($artLinks as $link)--}}
{{--                            <a class="mb-10" href="{{ $link['route'] }}">{{ $link['name'] }}</a>--}}
{{--                        @endforeach--}}
{{--                    </div>--}}
                </div>
            </div>

            <div class="px-4 lg:flex-col text-xl lg:text-3xl flex gap-5">
                @foreach($artLinks as $link)
                    <a class="mb-10" href="{{ $link['route'] }}">{{ $link['name'] }}</a>
                @endforeach
            </div>

            <x-lightbox />

        </div>
        <div class="w-full lg:w-3/4">
            <div class="px-4 lg:pr-6 lg:pl-10 mb-4 h-full">

{{--                    <div class="slideshow-container md:hidden">--}}
{{--                        @foreach($arts as $index => $art)--}}
{{--                            <div class="mySlides">--}}
{{--                                <img src="{{ $art->image('image', 'featured') }}" alt="Slide {{ $index + 1 }}">--}}
{{--                                <div class="slideshow-overlay">Some text {{ $loop->iteration }}</div>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}
{{--                        <!-- Add more images as needed -->--}}
{{--                    </div>--}}

                <h2 class="text-2xl lg:text-5xl mb-6 lg:my-24">Selected Paintings</h2>
                <div id="gallery" class="columns-1 md:columns-2 lg:columns-3">
                    {{--                    <img class="mb-4" src="{{$architecture->image('images')}}" alt="">--}}
                    @foreach($arts as $art)
                        <a href="{{ $art->image('image', 'free') }}">
                            <img class="mb-4" src="{{ $art->image('image', 'free') }}" />
                        </a>
                    @endforeach
                    {{--                        <a href="https://source.unsplash.com/random/1"><img class="mb-4" src="https://source.unsplash.com/random/1" /></a>--}}
                    {{--                        <a href="https://source.unsplash.com/random/2"><img class="mb-4" src="https://source.unsplash.com/random/2" /></a>--}}
                    {{--                        <a href="https://source.unsplash.com/random/3"><img class="mb-4" src="https://source.unsplash.com/random/3" /></a>--}}
                    {{--                        <a href="https://source.unsplash.com/random/4"><img class="mb-4" src="https://source.unsplash.com/random/4" /></a>--}}
                    {{--                        <a href="https://source.unsplash.com/random/5"><img class="mb-4" src="https://source.unsplash.com/random/5" /></a>--}}
                    {{--                        <a href="https://source.unsplash.com/random/6"><img class="mb-4" src="https://source.unsplash.com/random/6" /></a>--}}
                    {{--                        <a href="https://source.unsplash.com/random/7"><img class="mb-4" src="https://source.unsplash.com/random/7" /></a>--}}
                </div>
            </div>
        </div>
    </div>

    @push('meta')
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
        <link rel="stylesheet" href="{{ asset('css/architecture.css') }} ">
    @endpush

    @push('styles')
        <style>
            .slideshow-container {
                position: relative;
                height: 100%;
                overflow: hidden;
            }

            .mySlides {
                position: absolute;
                opacity: 0;
                transition: opacity 2s ease-in-out;
                left: 50%;
                transform: translateX(-50%);
                max-width: 100%; /* Ensure each image doesn't exceed the container width */
                max-height: 100%; /* Ensure each image doesn't exceed the container height */
                width: 100%;
                height: 100%; /* Set the height to 100% to fill up the parent container */
            }

            .mySlides img {
                width: 100%;
                height: 100%;
                object-fit: cover; /* Preserve aspect ratio; cover the entire container */
                display: block;
                margin: 0 auto; /* Center the image horizontally */
            }

            .mySlides.active {
                opacity: 1;
            }

            .slideshow-overlay {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
                background: rgba(0, 0, 0, 0.5); /* Adjust the overlay color and opacity */
                color: white; /* Text color on the overlay */
                font-size: 24px; /* Adjust the text size */
                text-align: center;
                opacity: 0;
                transition: opacity 0.5s ease-in-out;
                z-index: 10;
            }

            .slideshow-container:hover .slideshow-overlay {
                opacity: 1;
            }
        </style>
    @endpush

    @push('scripts')
        <script>
            let slideIndex = 0;
            let slideshowPaused = false;

            function showSlides() {
                if (!slideshowPaused) {
                    let slides = document.getElementsByClassName("mySlides");

                    for (let i = 0; i < slides.length; i++) {
                        slides[i].classList.remove("active");
                    }

                    slideIndex++;

                    if (slideIndex > slides.length) {
                        slideIndex = 1;
                    }

                    slides[slideIndex - 1].classList.add("active");
                }

                setTimeout(showSlides, 3000); // Change slide every 3 seconds
            }

            // Initial call to start the slideshow
            showSlides();

            let allSlides = document.querySelectorAll('.slideshow-container');

            allSlides.forEach(function(slide) {
                slide.addEventListener('mouseenter', function () {
                    slideshowPaused = true;
                });

                slide.addEventListener('mouseleave', function () {
                    slideshowPaused = false;
                });
            });
        </script>
    @endpush
</x-main-layout>
