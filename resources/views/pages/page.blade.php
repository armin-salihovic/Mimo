<x-main-layout :meta="$meta">
    <x-lazy-loading />
    <x-scroll-to-top />
    {!! $page->renderBlocks() !!}
</x-main-layout>

