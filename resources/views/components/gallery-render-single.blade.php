@if(isset($title))
    <h2 class="pb-3">{{ $title }}</h2>
@endif

<div class="pb-5 gallery">
    @foreach($gallery as $art)
        <a href="{{ $art['img'] }}" title="{{ $art['title'] }}">
            <img alt="{{ $art['title'] }}" src="{{ $art['thumb'] }}"/>
        </a>
    @endforeach
</div>
