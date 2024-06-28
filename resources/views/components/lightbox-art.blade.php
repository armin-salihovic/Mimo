<div id="lightbox" class="lightbox {{ isset($activeFirst) && $activeFirst ? 'active-first' : '' }}">
    <div class="h-full flex flex-col md:flex-row">
        <div class="hidden md:flex md:w-1/3 relative items-center">
            <div class="absolute z-[200] pt-96 md:pt-0">
                <div class="text-xl md:text-xl flex gap-24 md:mb-0 md:top-[268%]">
                    <div class="flex flex-col">
                        <h3>Year</h3>
                        <h3>Height</h3>
                        <h3>Width</h3>
                        <h3>Status</h3>
                    </div>
                    <div class="flex flex-col">
                        {{ $imageInfo ?? '' }}

                        @if(!isset($imageInfo))
                            <span id="art-year"></span>
                            <span id="art-height"></span>
                            <span id="art-width"></span>
                            <span id="art-status"></span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="h-full w-full md:w-2/3 md:pt-0">
            <div class="lightbox-background"></div>
            <div class="lightbox-header hidden md:flex">
                <h2 class="text-4xl md:text-5xl">MIMO</h2>
                <button type="button" class="lightbox-close lightbox-controls__btn">
                    <img src="{{ asset('assets/img/icon-cross.svg') }}" alt="" />
                </button>
            </div>

            <div class="lightbox-wrapper h-full">
                <div class="md:hidden flex justify-between">
                    <h2 class="text-4xl md:text-5xl">MIMO</h2>
                    <button type="button" class="lightbox-close lightbox-controls__btn">
                        <img src="{{ asset('assets/img/icon-cross.svg') }}" alt="" />
                    </button>
                </div>
                <div class="lightbox-list">
                    {{ $lightboxList ?? '' }}
                </div>
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

    </div>
</div>

@push('scripts')
    <script>
        "use strict";

        // Variables

        const gallery = document.getElementById("gallery");

        const lightbox = document.getElementById("lightbox");
        const lightboxList = document.querySelector(".lightbox-list");
        const lightboxCloseButtons = document.getElementsByClassName("lightbox-close");
        const controlsPrevious = document.querySelector(".lightbox-controls__previous");
        const controlsNext = document.querySelector(".lightbox-controls__next");

        let activeItem = null;
        let currentIndex = null;
        let opened = false;

        const activeFirst = lightbox.classList.contains('active-first');

        const lightboxItems = document.querySelectorAll(".lightbox-item");

        // Logic

        [...gallery.getElementsByClassName('gallery-item')].forEach((child, index) => {

            child.addEventListener("click", function (e) {
                e.preventDefault();
                currentIndex = index;
                showImage(currentIndex);
                lightbox.classList.add("active");
            });

            if(!activeFirst) {
                const figure = createFigure(child);
                const img = createImg(child);
                const titleContainer = createTitleContainer();
                const size = createH3SizeElement(child);
                const year = createH3YearElement(child);
                titleContainer.appendChild(size);
                titleContainer.appendChild(year);
                figure.appendChild(img);
                figure.appendChild(titleContainer);

                lightboxList.appendChild(figure);
            }
        });

        // Controls event listeners

        function closeLightbox(rewrite = true) {
            lightbox.classList.remove("active");
            activeItem.dataset.active = false;
            currentIndex = null;
            if(rewrite) window.history.pushState({}, "Mimo", getBaseUrl());
            opened = false;
            lightbox.classList.remove('active-first');
            scrollUnlock();
            let lastSegment = '';
            if(window.location.pathname.split("/").pop() !== 'art') {
                lastSegment = window.location.pathname.split("/").pop();
            }
            document.title = 'Art ' + lastSegment;
        }

        for (const lightboxCloseBtn of lightboxCloseButtons) {
            lightboxCloseBtn.addEventListener("click", () => {
                closeLightbox();
            });
        }

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

        function showImage(index, rewrite = true) {
            const item = lightboxItems[index];
            item.dataset.active = true;
            load(item);
            preload(index);
            setInfo(item);
            scrollLock();
            activeItem = item;
            if(rewrite) rewriteUrl(item);
            document.title = item.dataset.sn;

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
            figure.dataset.year = child.dataset.year;
            figure.dataset.width = child.dataset.width;
            figure.dataset.height = child.dataset.height;
            figure.dataset.status = child.dataset.status;
            figure.dataset.sn = child.dataset.sn;
            figure.classList.add("lightbox-item");
            return figure;
        }

        function createImg(child) {
            const img = document.createElement("img");
            img.classList.add("lightbox-item-img");
            img.dataset.src = child.href;
            return img;
        }

        function createTitleContainer() {
            const element = document.createElement("div");
            element.classList.add("lightbox-item-title");
            return element;
        }

        function createH3SizeElement(child) {
            const element = document.createElement("h3");
            element.innerHTML = child.dataset.width + 'x' + child.dataset.height + 'cm';
            return element;
        }

        function createH3YearElement(child) {
            const element = document.createElement("h3");
            element.innerHTML = child.dataset.year;
            return element;
        }

        function setTitlePosition() {
            if (activeItem === null) return;

            const containerHeight = activeItem.offsetHeight;
            const [width, height] = getContainedSize(activeItem.getElementsByTagName('img')[0]);
            const titlePx = (containerHeight + height)/2 + 10;
            const title = activeItem.getElementsByClassName('lightbox-item-title')[0];

            title.style.top = titlePx + 'px';
            title.style.opacity = 1;
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
                // console.log("swiped left!");
                if (currentIndex + 1 > lightboxItems.length - 1) return;
                activeItem.dataset.active = false;
                showImage(++currentIndex);
            }
            if (touchendX > touchstartX) {
                // console.log("swiped right!");
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

        function setYear(year) {
            document.getElementById('art-year').innerHTML = year;
        }

        function setHeight(height) {
            document.getElementById('art-height').innerHTML = height.toString().replace(/\.00$/, '') + 'cm';
        }

        function setWidth(width) {
            document.getElementById('art-width').innerHTML = width.toString().replace(/\.00$/, '') + 'cm';
        }

        function setStatus(status) {
            document.getElementById('art-status').innerHTML = status;
        }

        function setInfo(item) {
            setYear(item.dataset.year);
            setWidth(item.dataset.width);
            setHeight(item.dataset.height);
            setStatus(item.dataset.status);
        }

        // code for rewriting the urls

        function getBaseUrl() {
            const url = window.location.toString();
            return url.substring(0, url.lastIndexOf('/'));
        }

        function rewriteUrl(item) {
            let nextUrl = window.location;
            if(!opened) {
                nextUrl += '/' + item.dataset.sn
                opened = true;
            } else {
                nextUrl = getBaseUrl() + '/' + item.dataset.sn;
            }

            window.history.pushState({}, item.dataset.sn, nextUrl);
        }

        addEventListener("popstate", (event) => {
            const parts = window.location.toString().split('/');

            if(parts.length < 6) {
                closeLightbox(false);
                return;
            }

            currentIndex = getIndexOfLightboxItemBySn(parts.pop());

            activeItem.dataset.active = false;
            showImage(currentIndex, false);
            lightbox.classList.add("active");
            opened = true;
        });

        function getIndexOfLightboxItemBySn(sn) {
            for (let i = 0; i < lightboxItems.length; i++) {
                if(lightboxItems[i].dataset.sn === sn) return i;
            }
        }

        function scrollLock() {
            document.body.classList.add('noscroll');
        }

        function scrollUnlock() {
            document.body.classList.remove('noscroll');
        }

        // active first

        function setActiveItemIndex() {
            for (let i = 0; i < lightboxItems.length; i++) {
                if(lightboxItems[i].dataset.active === 'true') {
                    activeItem = lightboxItems[i];
                    currentIndex = i;
                    break;
                }
            }
        }

        function init() {
            setActiveItemIndex();
            const imgElement = activeItem.getElementsByTagName('img')[0];

            if (imgElement.complete) {
                setTitlePosition();
            } else {
                imgElement.onload = () => {
                    setTitlePosition();
                };
            }

            preload(currentIndex);
            scrollLock();
            opened = true;
        }

        if(activeFirst) {
            init();
        }

    </script>
@endpush

@push('styles')
    {{--    <link rel="stylesheet" href="{{ asset('assets/css/lightbox.css') }}" />--}}
    <style>
        .noscroll { overflow: hidden; }

        /* General lighbox styles */

        .lightbox {
            display: none;
            position: fixed;
            flex-direction: column;
            box-sizing: border-box;
            user-select: none;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 200;
            padding: calc(3vw + 20px) 2vw 3vw;
        }

        @-webkit-keyframes lightbox-fade-in {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        @keyframes lightbox-fade-in {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .lightbox.active-first {
            display: flex;
        }

        .lightbox.active {
            display: flex;
            animation-name: lightbox-fade-in;
            animation-duration: 400ms;
            animation-fill-mode: both;
            animation-iteration-count: 1;
        }

        .lightbox-background {
            position: absolute;
            height: 100%;
            width: 100%;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background-color: white;
            opacity: 1;
        }

        .lightbox-wrapper {
            position: relative;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
            flex-shrink: 1;
            width: 100%;
        }

        /* Lightbox list items */

        .lightbox-list {
            position: relative;
            flex-grow: 1;
            flex-shrink: 1;
            z-index: 0;
            box-sizing: border-box;
            margin: 0 calc(3vw + 13px);
            cursor: grab;
        }

        .lightbox-item {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            pointer-events: none;
            opacity: 0;
            margin: 0;
            /* todo: figure out the transition between slides */
            /* transition: opacity 400ms cubic-bezier(0.2, 0.6, 0.3, 1); */
            width:100%; /* check if this is okay */
            background-repeat: no-repeat;
            background-position: 50% 50%;
            background-size: contain;
        }

        .lightbox-item[data-active="true"] {
            opacity: 1;
        }

        .lightbox-item-img {
            height: 100%;
            width: 100%;
            object-position: 50% 50%;
            object-fit: contain;
        }

        /* Lightbox controls */

        .lightbox-controls {
            position: absolute;
            display: flex;
            justify-content: space-between;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            box-sizing: border-box;
            z-index: 200;
        }

        .lightbox-controls__previous,
        .lightbox-controls__next {
            width: 50%;
            display: flex;
            align-items: center;
            z-index: 200;
            pointer-events: auto;
        }

        .lightbox-controls__previous {
            justify-content: flex-start;
        }

        .lightbox-controls__next {
            justify-content: flex-end;
        }

        .lightbox-controls__btn {
            border: 0;
            background-color: transparent;
            cursor: pointer;
        }

        .lightbox-header {
            position: absolute;
            top: 0;
            right: 0;
            left: 0;
            /*display: flex;*/
            justify-content: space-between;
            padding: 1.5vw 1.5vw 0;
            z-index: 200;
        }

        .lightbox-close {
            width: 30px;
        }

        .lightbox-item-title {
            opacity: 0;
            position: absolute;
            font-size: 24px;
            z-index: 200;
            display: none;
            justify-content: space-between;
            width: 100%;
        }

        /* Responsive designs */

        @media (max-width: 767px) {
            .lightbox-item-title {
                display: flex;
            }
        }

        @media (max-width: 575px) {
            .lightbox-controls {
                display: none;
            }
            .lightbox-list {
                margin: 0;
            }

            .lightbox-item[data-active="true"] {
                transition: transform 250ms cubic-bezier(0.2, 0.6, 0.3, 1),
                opacity 250ms cubic-bezier(0.2, 0.6, 0.3, 1);
            }

            .lightbox-header {
                padding: 12.5vw 1.5vw 0;
            }

            .lightbox-item-title {
                font-size: 16px !important;
            }
        }

    </style>
@endpush
