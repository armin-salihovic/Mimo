
<!doctype html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-178775511-1"></script>
    <script src="{{ asset('js/googletag.js') }}"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Architecture | Emir Salihović Mimo</title>

    <meta name="description" content="A selection of architectural designs and concepts by Emir Salihović Mimo.">
    <meta name="author" content="Armin Salihović">

    <meta property="og:title" content="Architecture | Emir Salihović Mimo" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.mimo.ba" />
    <meta property="og:image" content="https://cdn.mimo.ba/img/og-architecture-thumbnail.jpg" />
    <meta property="og:description" content="A selection of architectural designs and concepts by Emir Salihović Mimo." />

    <link rel="icon" href="https://cdn.mimo.ba/img/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/architecture-index.css') }}">

</head>
<body class="container d-flex flex-column min-vh-100">
<x-header />
<main>
    <h1 class="text-center pb-5">Architecture</h1>
    <div class="row">
        <div class="col-lg-3 col-md-6 d-flex justify-content-center">
            <a class="d-flex flex-column align-items-center" href="{{ route('monument-zuc') }}">
                <img src="https://cdn.mimo.ba/img/architecture_thumbnail.jpg" alt="Monument and Memorial Centre, Žuč">
                <p class="pt-3 pb-4 text-center text-dark">Monument and Memorial<br>Centre, Žuč</p>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 d-flex justify-content-center">
            <a href="{{ route('mosque-kakanj') }}">
                <img src="https://cdn.mimo.ba/img/architecture/mosque-kakanj_thumbnail.jpg" alt="Mosque, Kakanj">
                <p class="pt-3 pb-4 text-center text-dark">Mosque, Kakanj</p>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 d-flex justify-content-center">
            <a href="{{ route('mosque-jablanica') }}">
                <img src="https://cdn.mimo.ba/img/architecture/mosque-jablanica_thumbnail.jpg" alt="Mosque, Jablanica">
                <p class="pt-3 pb-4 text-center text-dark">Mosque, Jablanica</p>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 d-flex justify-content-center">
            <a href="{{ route('tunnel-of-hope') }}">
                <img src="https://cdn.mimo.ba/img/architecture/tunnel-of-hope-museum_thumbnail.jpg" alt="Tunnel of Hope – Museum">
                <p class="pt-3 pb-4 text-center text-dark">Tunnel of Hope – Museum</p>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-6 d-flex justify-content-center">
            <a href="{{ route('skender-pasha') }}">
                <img src="https://cdn.mimo.ba/img/architecture/skender-pasha-mosque_thumbnail.jpg" alt="Skender Pasha Mosque">
                <p class="pt-3 pb-4 text-center text-dark">Skender Pasha Mosque</p>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 d-flex justify-content-center">
            <a class="d-flex flex-column align-items-center" href="{{ route('multi-religion-complex') }}">
                <img src="https://cdn.mimo.ba/img/architecture/multi-religious-complex-little-jerusalem_thumbnail.jpg" alt='Multi-Religious Complex: "Little Jerusalem"'>
                <p class="pt-3 pb-4 text-center text-dark">Multi-Religious Complex: "Little<br>Jerusalem"</p>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 d-flex justify-content-center">
            <a href="{{ route('school-sip') }}">
                <img src="https://cdn.mimo.ba/img/architecture/primary-school-sip_thumbnail.jpg" alt="Primary School, Šip">
                <p class="pt-3 pb-4 text-center text-dark">Primary School, Šip</p>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 d-flex justify-content-center">
            <a href="{{ route('yugoslav-pavilion') }}">
                <img src="https://cdn.mimo.ba/img/architecture/yugoslav-pavilion-proposal_thumbnail.jpg" alt="Yugoslav Pavilion proposal">
                <p class="pt-3 pb-4 text-center text-dark">Yugoslav Pavilion proposal</p>
            </a>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col col-lg-3 col-md-6 d-flex justify-content-center">
            <a href="{{ route('selected-arch') }}">
                <img src="https://cdn.mimo.ba/img/architecture/jb-tito-museum-sketch_thumbnail.jpg" alt="Selected Sketches and Models">
                <p class="pt-3 pb-4 text-center text-dark">Selected Sketches and Models</p>
            </a>
        </div>
    </div>
</main>

<x-footer />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>