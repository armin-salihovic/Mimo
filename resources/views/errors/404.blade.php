<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">

    <link rel="icon" href="{{ asset('img/favicon.png') }}">
    <title>Page not found | Emir Salihović Mimo</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/404.css') }}">
</head>
<body>
<main>
    <div class="mx-auto container flex items-center flex-col">
        <img
            class="px-80"
            src="{{ asset('img/sketch-1991.jpg') }}"
            loading="lazy"
            alt="Sketch, 1991."
        >
        <h1 class="text-center text-dark uppercase text-2xl tracking-widest">Error 404</h1>
        <h2 class="text-center text-base mb-12">We are sorry, but the page you are looking for does not exist.</h2>
        <p class="text-center mb-4">Here are a few links that may be helpful: </p>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('architecture') }}">Architecture</a>
        <a href="{{ route('art') }}">Art</a>
        <a href="{{ route('designs') }}">Design</a>
        <a href="{{ route('sculpture') }}">Sculpture</a>
        <a href="{{ route('about') }}">About</a>
        <a href="{{ route('contact') }}">Contact</a>
        <a href="{{ route('news') }}">News</a>
    </div>
</main>
</body>
</html>
