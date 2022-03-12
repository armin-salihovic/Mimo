<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">

    <link rel="icon" href="https://cdn.mimo.ba/img/favicon.png">
    <title>Page not found | Emir Salihović Mimo</title>

    <link rel="stylesheet" href="{{ asset('css/404.css') }}">
</head>
<body>
<main>
    <div class="container d-flex align-items-center flex-column">
        <img src="https://cdn.mimo.ba/img/architecture/selected-sketches-and-models/Sketch,%201991.jpg" alt="Sketch, 1991.">
        <h1 class="text-dark text-center">Error 404</h1>
        <h2 class="text-center">We are sorry, but the page you are looking for does not exist.</h2>
        <p class="text-center">Here are a few links that may be helpful: </p>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('architecture') }}">Architecture</a>
        <a href="{{ route('art') }}">Art</a>
        <a href="{{ route('design') }}">Design</a>
        <a href="{{ route('sculpture') }}">Sculpture</a>
        <a href="{{ route('about') }}">About</a>
        <a href="{{ route('contact') }}">Contact</a>
    </div>
</main>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
