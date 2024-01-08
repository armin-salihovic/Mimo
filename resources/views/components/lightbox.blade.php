<div id="lightbox" class="lightbox">
    <div class="lightbox-background"></div>
    <div class="lightbox-header">
        <button type="button" class="lightbox-close lightbox-controls__btn">
            <img src="{{ asset('assets/img/icon-cross.svg') }}" alt="" />
        </button>
    </div>

    <div class="lightbox-wrapper">
        <div class="lightbox-list"></div>
        <div class="lightbox-controls">
            <div class="lightbox-controls__previous">
                <button
                    type="button"
                    class="lightbox-previous lightbox-controls__btn"
                >
                    <img src="{{ asset('assets/img/icon-left.svg') }}" alt="" />
                </button>
            </div>
            <div class="lightbox-controls__next">
                <button type="button" class="lightbox-next lightbox-controls__btn">
                    <img src="{{ asset('assets/img/icon-right.svg') }}" alt="" />
                </button>
            </div>
        </div>
    </div>
</div>

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/lightbox.css') }}" />
@endpush

@push('scripts')
{{--    <script defer src="{{ asset('assets/js/lightbox.js') }}"></script>--}}
<script>
    "use strict";
    const gallery = document.getElementById("gallery");

    const lightbox = document.getElementById("lightbox");
    const lightboxList = document.querySelector(".lightbox-list");
    const lightboxCloseBtn = document.querySelector(".lightbox-close");
    const controlsPrevious = document.querySelector(".lightbox-controls__previous");
    const controlsNext = document.querySelector(".lightbox-controls__next");

    let activeItem = null;
    let currentIndex = null;

    [...gallery.getElementsByClassName('gallery-item')].forEach((child, index) => {

        child.addEventListener("click", function (e) {
            e.preventDefault();
            currentIndex = index;
            showImage(currentIndex);
            lightbox.classList.add("active");
        });

        const figure = createFigure(child);
        const img = createImg(child);
        figure.appendChild(img);
        lightboxList.appendChild(figure);
    });

    const lightboxItems = document.querySelectorAll(".lightbox-item");

    // Controls event listeners

    lightboxCloseBtn.addEventListener("click", () => {
        lightbox.classList.remove("active");
        activeItem.dataset.active = false;
        currentIndex = null;
    });

    controlsPrevious.addEventListener("click", () => {
        if (currentIndex - 1 < 0) return;
        activeItem.dataset.active = false;
        showImage(--currentIndex);
    });

    controlsNext.addEventListener("click", () => {
        if (currentIndex + 1 > lightboxItems.length - 1) return;
        activeItem.dataset.active = false;
        showImage(++currentIndex);
    });

    // Functions

    function showImage(index) {
        const item = lightboxItems[index];
        item.dataset.active = true;
        load(item);
        preload(index);
        activeItem = item;
    }

    // creates a figure which wraps the image
    function createFigure(child) {
        const figure = document.createElement("figure");
        figure.dataset.active = false;
        figure.dataset.url = child.href;
        figure.classList.add("lightbox-item");
        return figure;
    }

    function createImg(child) {
        const img = document.createElement("img");
        img.classList.add("lightbox-item-img");
        img.dataset.src = child.href;
        return img;
    }

    function load(item) {
        if (item === null) return;

        // load image
        if (item.firstChild.dataset.loaded !== true) {
            item.firstChild.src = item.firstChild.dataset.src;
            item.firstChild.dataset.loaded = true;
        }
    }

    // loads the previous and the next image
    // todo: see checks can be simplified
    // todo: add preloading range as an option
    function preload(index) {
        const next =
            index + 1 > lightboxItems.length - 1 ? null : lightboxItems[index + 1];
        const prev = index - 1 < 0 ? null : lightboxItems[index - 1];

        load(next);
        load(prev);
    }

    // todos:
    // - associate images with ID's and open image on refresh link on that ID
    // -- after exiting scroll down to where that image is
    // - add transitions between slides

    // detect swiping thanks to https://stackoverflow.com/a/56663695/7731542
    let touchstartX = 0;
    let touchendX = 0;

    function checkDirection() {
        if (currentIndex === null) return;

        if (touchendX < touchstartX) {
            console.log("swiped left!");
            if (currentIndex + 1 > lightboxItems.length - 1) return;
            activeItem.dataset.active = false;
            showImage(++currentIndex);
        }
        if (touchendX > touchstartX) {
            console.log("swiped right!");
            if (currentIndex - 1 < 0) return;
            activeItem.dataset.active = false;
            showImage(--currentIndex);
        }
    }

    document.addEventListener("touchstart", (e) => {
        touchstartX = e.changedTouches[0].screenX;
    });

    document.addEventListener("touchend", (e) => {
        touchendX = e.changedTouches[0].screenX;
        checkDirection();
    });

</script>
@endpush
