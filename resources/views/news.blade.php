<x-main-layout title="News">
    <x-slot name="meta">
        <meta property="og:image" content="https://cdn.mimo.ba/img/og-about-thumbnail.jpg" />
        <meta property="og:description" content="" />
        <meta name="description" content="">

        <style>
            .title {
                font-family: 'Montserrat', sans-serif;
                letter-spacing: 3px;
            }
            .news-title, .news-description {
                font-family: adobe-garamond-pro, serif;
            }
        </style>
    </x-slot>

    <h1 class="max-w-7xl mx-auto uppercase text-3xl title pb-10 mb-10 text-center mt-10">Latest News</h1>

    @foreach($news as $newsPost)
        <x-news-box :news="$newsPost" />
    @endforeach

</x-main-layout>

