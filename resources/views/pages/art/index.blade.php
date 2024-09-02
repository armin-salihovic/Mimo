<x-art-layout :arts="$arts" :art="$art ?? null" :art-links="$artLinks" :meta="$meta">
    <x-slot name="gallery">
        <div class="flex flex-col">
            <div class="w-full px-6 text-center mb-24">
                <h2 class="text-2xl lg:text-5xl">Selected Works</h2>
            </div>
            <div id="gallery" class="px-4 sm:px-6 mb-4">
                <x-3x3-grid-masonry-art :arts="$arts" />
            </div>
        </div>
    </x-slot>
</x-art-layout>
