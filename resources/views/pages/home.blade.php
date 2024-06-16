@php
    $links = [
        [
            'name' => 'Architecture',
            'route' => 'architecture'
        ],
        [
            'name' => 'Art',
            'route' => 'art'
        ],
        [
            'name' => 'Design',
            'route' => 'designs'
        ],
        [
            'name' => 'Sculpture',
            'route' => 'sculpture'
        ],
        [
            'name' => 'About',
            'route' => 'about'
        ],
        [
            'name' => 'Contact',
            'route' => 'contact'
        ],
        [
            'name' => 'News',
            'route' => 'news'
        ],
    ];
@endphp

<x-main-layout :show-header="false" :meta="$meta">
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

            @media (max-width: 1023px) {
                .slideshow-container {
                    overflow: unset;
                }

                .mySlides {
                    max-height: unset;
                    max-width: unset;
                    height: unset;
                }
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

    @push('styles')
        <style>
            @media (min-width: 1024px) {
                .boop {
                    align-items: unset;
                }
            }
        </style>
    @endpush

    <div class="flex items-start py-4 lg:py-0 lg:items-center justify-evenly min-h-screen relative">
        <div class="container mx-auto">
            <div class="boop flex flex-col items-center lg:flex-row lg:justify-center w-full">
                <div class="w-full px-4 lg:px-0 lg:w-auto lg:mr-44 xl:mr-56">
                    <h1 class="h-full uppercase flex justify-between lg:flex-col lg:items-center text-3xl">
                        <span>M</span>
                        <span>i</span>
                        <span>m</span>
                        <span>o</span>
                    </h1>
                </div>
                <div class="w-full my-4 lg:my-0 lg:w-1/4">
                    <nav class="h-full flex flex-col justify-between lg:items-start items-center">
                        @foreach($links as $link)
                            <a class="nav-link p-3 mb-2 lg:p-2 lg:mb-8 lg:first:pt-0 lg:last:pb-0 lg:last:mb-0" href="{{ route($link['route']) }}">{{ $link['name'] }}</a>
                        @endforeach
                    </nav>
                </div>
                <div class="w-full lg:w-1/2">
                        <div class="slideshow-container">
                            @foreach($featuredImages as $art)

                            @php
                                $img = $art['block']->image('home_featured_image');
                                switch ($art['content']['featured_image_type']) {
                                    case "Architecture":
                                        $route = route('architecture');
                                        break;
                                    case "Sculpture":
                                        $route = route('sculpture');
                                        break;
                                    case "Design":
                                        $route = route('designs');
                                        break;
                                    case "Art":
                                        $route = route('art');
                                        break;
                                    default:
                                        $route = route('art');
                                }
                            @endphp
                                <a href="{{ $route }}">
                                    <div class="mySlides">
                                        <img data-type="{{ $art['content']['featured_image_type'] }}"
                                             src="{{ $img . '&width=768' }}"
                                             alt="Slide {{ $art['block']->imageAltText('home_featured_image') }}"
                                             srcset=""
                                        >
                                        <div class="slideshow-overlay">{{ $art['content']['featured_image_type'] }}</div>
                                    </div>
                                </a>
                            @endforeach
                            <!-- Add more images as needed -->
                        </div>
                </div>
            </div>
        </div>
    </div>

</x-main-layout>
