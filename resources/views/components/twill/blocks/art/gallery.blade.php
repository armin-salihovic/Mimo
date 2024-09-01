<div>
{{--    @dd($block)--}}
    <h2>{{ $block->input('title') }}</h2>
    <div id="gallery" class="columns-1 md:columns-2 lg:columns-4">
        @foreach($block->images('images', 'free') as $img)
            <a href="{{ $img }}">
                <img class="mb-4" src="{{ $img }}"/>
            </a>
        @endforeach
    </div>
</div>
