<!doctype html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-178775511-1"></script>
    <script src="{{ asset('js/googletag.js') }}"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="description" content="{{ $meta['description'] }}">
    <meta name="author" content="Armin Salihović">

    <meta property="og:title" content="{{ $meta['title'] }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.mimo.ba" />
    <meta property="og:image" content="{{ $meta['thumbnail'] }}" />
    <meta property="og:description" content="{{ $meta['description'] }}" />

    <title>{{ $meta['title'] }}</title>

    <link rel="icon" href="https://cdn.mimo.ba/img/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    @if($hasGallery ?? true)
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/magnific-popup@1.1.0/dist/magnific-popup.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/justifiedGallery@3.8.1/dist/css/justifiedGallery.min.css">
    @endif

    @stack('meta')
    <link rel="stylesheet" href="{{ asset('css/header1.css') }}">
</head>
<body class="container d-flex flex-column min-vh-100">

<x-header />

<main class="{{ $mainClass ?? '' }}">
    {{ $slot }}
</main>

<x-footer />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

@if($hasGallery ?? true)
    <script src="https://cdn.jsdelivr.net/npm/magnific-popup@1.1.0/dist/jquery.magnific-popup.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/justifiedGallery@3.8.1/dist/js/jquery.justifiedGallery.min.js"></script>
    <script src="{{ asset('js/gallery.js') }}"></script>
@endif

@stack('scripts')
</body>
</html>
