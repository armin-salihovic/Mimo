@php
    $meta = [
       "title" => "",
       "description" => "",
       "thumbnail" => "",
    ];
@endphp

<x-main-layout :meta="$meta">
    {!! $item->renderBlocks() !!}
</x-main-layout>

