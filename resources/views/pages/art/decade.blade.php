@php
    $seen = [];
    $filteredArtsByYears = [];
    foreach($arts as $item) {
        if (!array_key_exists($item->year, $filteredArtsByYears)) {
            $filteredArtsByYears[$item->year] = [];
        }

        $filteredArtsByYears[$item->year][] = $item;
    }
    krsort($filteredArtsByYears);
@endphp
<x-art-layout :arts="$arts" :art="$art ?? null" :art-links="$artLinks" :meta="$meta">
    <x-slot name="gallery">
        <div id="gallery">
            @foreach($filteredArtsByYears as $year => $filteredArtsByYear)
                <div class="flex flex-col mb-24 px-6">
                    <x-gallery-title :title="$year"/>
                    <x-3x3-grid-masonry-art :arts="$filteredArtsByYear" />
                </div>
            @endforeach
        </div>
    </x-slot>
</x-art-layout>
