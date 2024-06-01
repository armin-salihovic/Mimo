<x-main-layout :meta="$meta">
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

    @foreach($news as $newsPost)
        <x-news-box :news="$newsPost" />
    @endforeach

</x-main-layout>

