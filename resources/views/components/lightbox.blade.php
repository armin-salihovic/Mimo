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
        const imgContainer = createImgContainer();
        const img = createImg(child);
        const title = createH3TitleElement(child);

        figure.appendChild(imgContainer);
        imgContainer.appendChild(img);
        imgContainer.appendChild(title);

        lightboxList.appendChild(figure);
    });

    function createImgContainer() {
        const element = document.createElement("div");
        element.classList.add("lightbox-item-container");
        return element;
    }
    function createH3TitleElement(child) {
        const element = document.createElement("h3");
        element.classList.add("lightbox-item-title");
        element.innerHTML = child.title;
        return element;
    }

    function setTitlePosition() {
        if (activeItem === null) return;

        const containerHeight = activeItem.querySelectorAll('.lightbox-item-container')[0].offsetHeight;
        const [width, height] = getContainedSize(activeItem.getElementsByTagName('img')[0]);

        const titlePx = (containerHeight + height)/2 + 10;
        const title = activeItem.getElementsByTagName('h3')[0];

        title.style.top = titlePx + 'px';
    }

    function getContainedSize(img) {
        const ratio = img.naturalWidth/img.naturalHeight
        let width = img.height*ratio
        let height = img.height
        if (width > img.width) {
            width = img.width
            height = img.width/ratio
        }
        return [width, height]
    }


    const lightboxItems = document.querySelectorAll(".lightbox-item");

    // Controls event listeners

    lightboxCloseBtn.addEventListener("click", () => {
        lightbox.classList.remove("active");
        activeItem.dataset.active = false;
        currentIndex = null;
        scrollUnlock();
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
        scrollLock();
        activeItem = item;

        const imgElement = item.getElementsByTagName('img')[0];
        imgElement.onload = () => {
            setTitlePosition();
        };
    }

    onresize = () => {
        setTitlePosition();
    };

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

        const imgElement = item.getElementsByTagName('img')[0];

        // load image
        if (imgElement.dataset.loaded !== true) {
            imgElement.src = imgElement.dataset.src;
            imgElement.dataset.loaded = true;
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

    function scrollLock() {
        document.body.classList.add('noscroll');
    }

    function scrollUnlock() {
        document.body.classList.remove('noscroll');
    }

</script>
@endpush
