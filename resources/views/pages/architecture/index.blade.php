<x-main-layout :meta="$meta">
    <div class="mx-auto">
        <x-page-title title="Architecture" />
        <x-3x3-grid-list
            :items="$architectures"
            route="architecture.show"
            subtitle-name="location"
            thumbnail-role="cover"
        />
    </div>
</x-main-layout>
