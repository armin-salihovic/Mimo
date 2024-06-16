<x-main-layout :meta="$meta">
    <div class="mx-auto">
        <x-page-title title="Design" />
        <x-3x3-grid-list
            :items="$designs"
            route="designs.show"
            subtitle-name="title"
            thumbnail-role="thumbnail"
        />
    </div>
</x-main-layout>

