@php
    $meta = [
       "title" => "Emir Salihović Mimo",
       "description" => "Emir Salihović Mimo is an architect, painter, sculptor, and designer. He teaches at the Academy of Fine Arts in Sarajevo.",
       "thumbnail" => "https://cdn.mimo.ba/img/og-thumbnail.jpg",
    ];

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
            'route' => 'design'
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
            @media (min-width: 1024px) {
                .boop {
                    align-items: unset;
                }
            }
        </style>
    @endpush

    @push('scripts')
        <script>
            const links = document.querySelectorAll('nav a');
            for(const link of links) {
                link.addEventListener("mouseover", (event) => { showImage(link) });
            }

            // console.log(links);

            // links.forEach((link) => link.addEventListener('mouseover', showImage(link)));

            // const currentImage = document.getElementById('current-img');
            // const transitionImage = document.getElementById('transition-img');
            const architectureImg = document.getElementById('architecture-img');
            const artImg = document.getElementById('art-img');
            const designImg = document.getElementById('design-img');
            const sculptureImg = document.getElementById('sculpture-img');
            const imgContainer = document.getElementById('img-container');

            // console.log(imgContainer.children);

            function swapElements(arr, i1, i2) {
                if(i1 === i2) return arr;
                console.log(arr[i1])
                console.log(arr[i2])
                const temp = arr[i1];
                arr[i1] = null;
                // arr[i2] = temp;
                console.log(arr[i1])
                console.log(arr[i2])
                console.log(arr);
            }

            function findItemIndexOfCollection(collection, item) {
                for (let i = 0; i < collection.length; i++) {
                    if(collection[i] === item) {
                        return i;
                    }
                }
            }
            let currentImg = architectureImg;

            console.log();

            function showImage(link) {
                // if(currentImage.src === link.innerHTML) return;
                //
                // currentImage.alt = link.innerHTML;
                // currentImage.classList.replace('opacity-100', 'opacity-0');
                // transitionImage.src = currentImage.src;

                switch (link.innerHTML) {
                    case "Architecture":
                        architectureImg.classList.add('z-10');
                        currentImg = architectureImg;
                        // swapElements(imgContainer.children, 0, findItemIndexOfCollection(imgContainer.children, architectureImg));
                        // currentImage.src = "https://cdn.mimo.ba/img/architecture_thumbnail.jpg"
                        break;
                    case "Art":
                        artImg.classList.add('z-10');
                        currentImg = artImg;
                        break;
                    case "Design":
                        architectureImg.classList.add('z-10');
                        currentImg = architectureImg;
                        break;
                    case "Sculpture":
                        // currentImage.src = "https://cdn.mimo.ba/img/sculpture_thumbnail.jpg";
                        break;
                    default:
                        // currentImage.src = "https://cdn.mimo.ba/img/architecture_thumbnail.jpg";
                        break;
                }

                // setTimeout(() => {
                //     console.log("Delayed for 1 second.");
                //     currentImage.classList.replace('opacity-0', 'opacity-100');
                //
                // }, 3000);

            }
        </script>
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
                            <a class="nav-link p-3 mb-2 lg:p-0 lg:mb-0" href="{{ route($link['route']) }}">{{ $link['name'] }}</a>
                        @endforeach
                    </nav>
                </div>
                <div class="w-full lg:w-1/2">
                    <div class="relative" id="img-container">
{{--                        <img id="current-img" class="absolute max-w-full transition-all delay-150 ease-in-out opacity-100 z-10" src="https://cdn.mimo.ba/img/art_thumbnail.jpg" alt="Architecture">--}}
{{--                        <img id="transition-img" class="max-w-full transition-all delay-150 ease-in-out" src="https://cdn.mimo.ba/img/architecture_thumbnail.jpg" alt="Architecture" />--}}
                        <img id="architecture-img" class=" absolute max-w-full" src="https://cdn.mimo.ba/img/architecture_thumbnail.jpg" alt="Architecture">
                        <img loading="lazy" id="art-img" class="absolute max-w-full" src="https://cdn.mimo.ba/img/art_thumbnail.jpg" alt="Art">
                        <img loading="lazy" id="design-img" class="absolute max-w-full" src="https://cdn.mimo.ba/img/design_thumbnail.jpg" alt="Architecture">
                        <img loading="lazy" id="sculpture-img" class="absolute max-w-full" src="https://cdn.mimo.ba/img/sculpture_thumbnail.jpg" alt="Architecture">
                    </div>


                </div>
            </div>
        </div>
    </div>

{{--    <x-footer />--}}
</x-main-layout>
