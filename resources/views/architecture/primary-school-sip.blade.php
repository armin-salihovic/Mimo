
<!doctype html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-178775511-1"></script>
    <script src="{{ asset('js/googletag.js') }}"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="author" content="Armin Salihović">

    <meta property="og:title" content='Primary School, Šip | Emir Salihović Mimo' />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.mimo.ba" />
    <meta property="og:image" content="https://cdn.mimo.ba/img/og-architecture-primary-school-sip-thumbnail.jpg" />
    <meta property="og:description" content="An unrealised project conceptualised in a modernistic style for a post-war neighbourhood on the periphery of Sarajevo." />


    <title>Primary School, Šip | Emir Salihović Mimo</title>
    <link rel="stylesheet" href="{{ asset('css/header1.css') }}">
    <link rel="icon" href="https://cdn.mimo.ba/img/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/magnific-popup@1.1.0/dist/magnific-popup.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/justifiedGallery@3.8.1/dist/css/justifiedGallery.min.css">

    <link rel="stylesheet" href="{{ asset('css/architecture.css') }} ">
</head>
<body class="container d-flex flex-column min-vh-100">
<x-header />
<main>
    <h1 class="text-dark mb-0">Primary School, Šip</h1>
    <p class="city">Sarajevo</p>
    <div class="row">
        <div class="col-lg-7 col-md-7 description">
            <p>An unrealised project conceptualised in a modernistic style for a post-war neighbourhood on the periphery of Sarajevo.</p>
            <p>Co-author - Prof. Dr Hamdija Salihović</p>
        </div>
        <div class="col-lg-5 col-md-5 d-flex info">
            <div>
                <h2>Status</h2>
                <p>Not realised</p>
                <h2>Dates</h2>
                <p>2005</p>
                <h2>Address</h2>
                <p>Sarajevo, Bosnia and Herzegovina</p>
            </div>
        </div>
    </div>


    <div class="pb-3 gallery">
        <a href="https://cdn.mimo.ba/img/architecture/primary-school-sip/1.jpg">
            <img src="https://cdn.mimo.ba/img/architecture/primary-school-sip/thumbnails/1_thumbnail.jpg"/>
        </a>
        <a href="https://cdn.mimo.ba/img/architecture/primary-school-sip/2.jpg">
            <img src="https://cdn.mimo.ba/img/architecture/primary-school-sip/thumbnails/2_thumbnail.jpg"/>
        </a>
        <a href="https://cdn.mimo.ba/img/architecture/primary-school-sip/3.jpg">
            <img src="https://cdn.mimo.ba/img/architecture/primary-school-sip/thumbnails/3_thumbnail.jpg"/>
        </a>
        <a href="https://cdn.mimo.ba/img/architecture/primary-school-sip/4.jpg">
            <img src="https://cdn.mimo.ba/img/architecture/primary-school-sip/thumbnails/4_thumbnail.jpg"/>
        </a>
        <a href="https://cdn.mimo.ba/img/architecture/primary-school-sip/5.jpg">
            <img src="https://cdn.mimo.ba/img/architecture/primary-school-sip/thumbnails/5_thumbnail.jpg"/>
        </a>
        <a href="https://cdn.mimo.ba/img/architecture/primary-school-sip/6.jpg">
            <img src="https://cdn.mimo.ba/img/architecture/primary-school-sip/thumbnails/6_thumbnail.jpg"/>
        </a>
    </div>

    <a class="float-right pb-3" href="{{ route('architecture') }}"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> return</a>
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
