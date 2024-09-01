<x-main-layout :meta="$meta">
    <div class="mx-auto">
        <x-page-title title="Sculpture" />
        <x-3x3-grid-list
            :items="$sculptures"
            route="sculpture.show"
            subtitle-name="year"
            thumbnail-role="cover"
        />
    </div>
</x-main-layout>
