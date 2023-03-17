<h2>{{ $year }}</h2>

<div class="pb-3 gallery">
    @foreach($gallery as $art)
        <a href="{{ $art['img'] }}" title="{{ $art['title'] }}">
            <img alt="{{ $art['title'] }}" src="{{ $art['thumb'] }}"/>
        </a>
    @endforeach
</div>
