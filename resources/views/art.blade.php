<!doctype html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-178775511-1"></script>
    <script src="{{ asset('js/googletag.js') }}"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="description" content="A selection of abstract paintings by Emir Salihović Mimo, hand-picked by the artist himself.">
    <meta name="author" content="Armin Salihović">

    <meta property="og:title" content="Art | Emir Salihović Mimo" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.mimo.ba" />
    <meta property="og:image" content="https://cdn.mimo.ba/img/og-art-thumbnail.jpg" />
    <meta property="og:description" content="A selection of abstract paintings by Emir Salihović Mimo, hand-picked by the artist himself." />

    <title>Art | Emir Salihović Mimo</title>

    <link rel="icon" href="https://cdn.mimo.ba/img/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/magnific-popup@1.1.0/dist/magnific-popup.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/justifiedGallery@3.8.1/dist/css/justifiedGallery.min.css">
    <link rel="stylesheet" href="{{ asset('css/header1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/art1.css') }}">
</head>
<body class="container">

<x-header />

<main class="d-flex flex-column align-items-center">
    <x-title>Art</x-title>

    <x-art2020 />

    <x-art2010 />

    <x-art2000 />

    <x-art1990 />

    <x-art1980 />
</main>

<x-footer />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/magnific-popup@1.1.0/dist/jquery.magnific-popup.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/justifiedGallery@3.8.1/dist/js/jquery.justifiedGallery.min.js"></script>
<script src="{{ asset('js/gallery.js') }}"></script>
</body>
</html>
