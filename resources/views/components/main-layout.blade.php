<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-178775511-1"></script>
    <script src="{{ asset('js/googletag.js') }}"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="author" content="Armin Salihović">

    <meta property="og:title" content="{{ $title }} | Emir Salihović Mimo" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.mimo.ba" />
    {{ $meta }}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
    <link rel="stylesheet" href="https://use.typekit.net/ywf6bom.css">

    <link rel="icon" href="https://cdn.mimo.ba/img/favicon.png">
    <title>{{ $title }} | Emir Salihović Mimo</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        nav, .logo {
            font-family: 'Montserrat', sans-serif;
        }
        [x-cloak] { display: none !important; }
    </style>
    @stack('styles')

</head>
<body class="">
<x-header-tw />
<main>
    {{ $slot }}
</main>
@stack('scripts')
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>
</html>
