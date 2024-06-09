<x-main-layout :meta="$meta">
    <x-lazy-loading />
    @push('styles')
        <style>
            .title {
                font-family: 'Montserrat', sans-serif;
                letter-spacing: 3px;
            }
            .news-title, .news-description {
                font-family: adobe-garamond-pro, serif;
            }
        </style>
    @endpush

        <x-page-title title="News" />

        <div class="py-24 px-4 sm:px-6">
            @foreach($news as $newsPost)
                <x-news-box :news="$newsPost" />
            @endforeach
        </div>

</x-main-layout>

