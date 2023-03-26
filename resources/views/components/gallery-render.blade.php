@php
    $seen = [];

    usort($gallery, function ($a, $b) {
        return $a['year'] < $b['year'];
    });

@endphp

@foreach($gallery as $key => $art)
    @if(!in_array($art['year'], $seen))

        @php
            $seen[] = $art['year'];
        @endphp

        <h2>{{ $art['year'] }}</h2>

        <div class="pb-5 gallery justified-gallery">
        @foreach($gallery as $art2)
            @if($art['year'] === $art2['year'])
                <a href="{{ $art2['img'] }}" title="{{ $art2['title'] }}">
                    <img alt="{{ $art2['title'] }}" src="{{ $art2['thumb'] }}"/>
                </a>
            @endif
        @endforeach
        </div>

    @endif
@endforeach

@push('meta')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/magnific-popup@1.1.0/dist/magnific-popup.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/justifiedGallery@3.8.1/dist/css/justifiedGallery.min.css">
@endpush

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/magnific-popup@1.1.0/dist/jquery.magnific-popup.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/justifiedGallery@3.8.1/dist/js/jquery.justifiedGallery.min.js"></script>
    <script src="{{ asset('js/gallery.js') }}"></script>
@endpush
