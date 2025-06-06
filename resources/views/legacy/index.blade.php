<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-178775511-1"></script>
    <script src="{{ asset('js/googletag.js') }}"></script>

    <meta charset="UTF-8">
    <title>Emir Salihović Mimo: Architect, Painter, Sculptor, and Designer</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="description" content="Emir Salihović Mimo is an architect, painter, sculptor, and designer. He teaches at the Academy of Fine Arts in Sarajevo.">
    <meta name="author" content="Armin Salihović">

    <meta property="og:title" content="Emir Salihović Mimo" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.mimo.ba" />
    <meta property="og:image" content="https://cdn.mimo.ba/img/og-thumbnail.jpg" />
    <meta property="og:description" content="Emir Salihović Mimo is an architect, painter, sculptor, and designer. He teaches at the Academy of Fine Arts in Sarajevo." />

    <link rel="icon" href="https://cdn.mimo.ba/img/favicon.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/index5.css') }}">

</head>
<body class="position-relative">
<div class="container">
    <div class="row justify-content-between pb-5">
        <div class="col-12 col-md-auto order-first">
            <h1 class="logo h-100 d-flex justify-content-between flex-md-column align-items-md-center">
                <span>M</span>
                <span>i</span>
                <span>m</span>
                <span>o</span>
            </h1>
        </div>
        <div class="col-12 col-md-auto pb-3 pb-md-0">
            <header class="h-100">
                <nav class="h-100 d-flex flex-column justify-content-between align-items-md-start align-items-center">
                    <a href="{{ route('architecture') }}">Architecture</a>
                    <a href="{{ route('art') }}">Art</a>
                    <a href="{{ route('designs') }}">Design</a>
                    <a href="{{ route('sculpture') }}">Sculpture</a>
                    <a href="{{ route('about') }}">About</a>
                    <a href="{{ route('contact') }}">Contact</a>
                </nav>
            </header>
        </div>
        <div class="col-12 col-md-7">
            <div id="demo" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                    <li data-target="#demo" data-slide-to="3"></li>
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://cdn.mimo.ba/img/architecture_thumbnail.jpg" alt="Architecture">
                        <a class="boop" href="{{ route('architecture') }}"></a>
                    </div>
                    <div class="carousel-item">
                        <img src="https://cdn.mimo.ba/img/art_thumbnail.jpg" alt="Art">
                        <a class="boop" href="{{ route('art') }}"></a>
                    </div>
                    <div class="carousel-item">
                        <img src="https://cdn.mimo.ba/img/design_thumbnail.jpg" alt="Design">
                        <a class="boop" href="{{ route('designs') }}"></a>
                    </div>
                    <div class="carousel-item">
                        <img src="https://cdn.mimo.ba/img/sculpture_thumbnail.jpg" alt="Sculpture">
                        <a class="boop" href="{{ route('sculpture') }}"></a>
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
    </div>
</div>
<x-footer />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Person",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Sarajevo, Bosnia and Herzegovina",
                "addressRegion": "BA",
                "postalCode": "71000"
            },
            "email": "info@mimo.ba",
            "image": "https://cdn.mimo.ba/img/mimo-portrait.jpg",
            "jobTitle": "Professor at The Academy of Fine Arts in Sarajevo",
            "name": "Emir Salihović",
            "alumniOf": "Faculty of Architecture | University of Sarajevo",
            "birthPlace": "Sarajevo, BA",
            "birthDate": "1960-11-09",
            "height": "184 cm",
            "gender": "male",
            "nationality": "Bosnian",
            "url": "https://www.mimo.ba",
            "sameAs" : [ "https://www.facebook.com/mimo.1960",
                "https://www.instagram.com/mimoarchitect/"
            ]
        }
    </script>
</body>
</html>
