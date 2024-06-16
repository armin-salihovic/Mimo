<div class="relative inline-block text-left" x-data="{
        open: false,
        toggleOpen() {
            this.open = !this.open;
            if (this.open === true) {
                document.body.classList.add('noscroll');
            } else {
                document.body.classList.remove('noscroll');
            }
            return this.open;
        },
        closeWindow() {
            this.open = false;
            document.body.classList.remove('noscroll');
        }
    }">
    <div>
        <button @click="toggleOpen()" type="button"
                class="inline-flex w-full justify-center items-center gap-x-2 bg-white"
                id="menu-button" aria-expanded="true" aria-haspopup="true">
            <span class="{{ Route::currentRouteName() !== 'art' ? 'underline underline-offset-8' : '' }}">{{ $default ?? 'Options' }}</span>
        </button>
    </div>
    <div
        x-show="open"
        x-transition:enter="transition ease-out duration-100"
        x-transition:enter-start="transform opacity-0 scale-95"
        x-transition:enter-end="transform opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75"
        x-transition:leave-start="transform opacity-100 scale-100"
        x-transition:leave-end="transform opacity-0 scale-95"
        x-cloak
        class="message-box px-5 py-6 sm:px-12 3xl:px-16 4xl:px-24 fixed bottom-0 left-0 mr-auto w-full z-50 bg-neutral-900">
        <div class="flex grid grid-cols-6 gap-4 3xl:gap-5 4xl:gap-8 py-0 lg:py-3 3xl:py-4 4xl:py-6">
            <aside class="md:col-span-2 col-span-6 relative flex justify-end">
                <h4 @click="closeWindow()"
                    class="icon-cross text-white text-lg md:text-xl 3xl:text-3xl 4xl:text-4xl font-bold cursor-pointer">
                    <img src="{{ asset('assets/img/icon-cross.svg') }}" class="h-4 3xl:h-5 4xl:h-8" alt="icon cross">
                </h4>
            </aside>
            <div class="md:col-span-2 col-span-6 py-16 flex justify-center">
                <div class="px-4 {{ isset($subtitle) ? 'md:mt-24 md:mb-11' : 'md:my-24' }}">
                    <h1 class="text-3xl sm:text-4xl lg:text-7xl uppercase text-center text-white font-bold tracking-wider">
                        Art Decades</h1>
                </div>
            </div>
            <div class="md:col-span-3 col-span-6 mt-4 md:mt-0">
                <div class="flex flex-col items-center justify-center gap-4">
                    @foreach($artLinks as $route => $name)
                        @if(!in_array($route, $exclude))
                            <a href="{{ route($route) }}" class="text-white block px-4 py-2 {{ Route::currentRouteName() === $route ? 'underline underline-offset-8' : '' }}" role="menuitem"
                               tabindex="-1"
                               id="menu-item-0">{{ $name }}</a>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // function openWindow(open) {
    //     scrollLock();
    // }
    //
    // function closeWindow(open) {
    //     scrollUnlock();
    // }
    //
    // function scrollLock() {
    //     document.body.classList.add('noscroll');
    // }
    //
    // function scrollUnlock() {
    //     document.body.classList.remove('noscroll');
    // }
</script>

<style>
    .icon-cross {
        filter: invert(97%) sepia(0%) saturate(7%) hue-rotate(167deg) brightness(118%) contrast(100%);
        position: absolute;
        top: 6px;
    }

    .message-box {
        height: calc(100% - 76px);
        /*opacity: 0;*/
        /*height: 0;*/
        /*transition: transform 300ms ease, -webkit-transform 300ms ease;*/
        /*transform: translateY(70px);*/
    }

    .message-box.message-box__opened {
        /*opacity: 1;*/
        /*height: unset;*/
        /*transform: none;*/
    }

    .noscroll { overflow: hidden; }
</style>
