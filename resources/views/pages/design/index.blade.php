<x-main-layout :meta="$meta">
    <div class="mx-auto">
        <x-page-title title="Design" />
        <x-3x3-grid-list
            :items="$designs"
            route="designs.show"
            subtitle-name="year"
            thumbnail-role="cover"
        />
    </div>
</x-main-layout>

