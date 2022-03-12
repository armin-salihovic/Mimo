<?php include('check-state.php') ?>
<?php
$pages = 4;
$page = 1;
$nextPageEnabled = true;
$previousPageEnabled = true;

if(isset($_GET['page'])) {
    $page = (int)$_GET['page'];
}

if($page > 1 && $page < $pages) {
    $nextPage = $page + 1;
    $previousPage = $page - 1;
} elseif($page === $pages) {
    $nextPageEnabled = false;
} elseif($page === 1) {
    $previousPageEnabled = false;
}

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-178775511-1"></script>
    <script src="js/googletag.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="description" content="A variety of sculptures and three-dimensional works designed by Emir Salihović Mimo.">
    <meta name="author" content="Armin Salihović">

    <meta property="og:title" content="Sculpture | Emir Salihović Mimo" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.mimo.ba" />
    <meta property="og:image" content="https://cdn.mimo.ba/img/og-sculpture-thumbnail.jpg" />
    <meta property="og:description" content="A variety of sculptures and three-dimensional works designed by Emir Salihović Mimo." />

    <title>Sculpture | Emir Salihović Mimo</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="icon" href="https://cdn.mimo.ba/img/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/magnific-popup@1.1.0/dist/magnific-popup.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/justifiedGallery@3.8.1/dist/css/justifiedGallery.min.css">
    <link rel="stylesheet" href="css/sculpture.css">
    <style>
        .pagination .pagination-link {
            padding: 1rem 1rem;
            margin: 0 0.3rem;
        }
    </style>
</head>
<body class="container d-flex flex-column min-vh-100">
<header>
    <nav class="navbar px-0 navbar-expand-sm center">
        <a class="navbar-brand" href="index.php"><span class="navbar-text text-dark">MIMO</span></a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#this-collapse">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="this-collapse">
            <ul class="navbar-nav align-items-center">
                <li class="nav-item">
                    <a class="nav-link text-dark" href="architecture/index.php">Architecture</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="art">Art</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="design">Design</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger" href="#">Sculpture</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="contact">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<main>
    <h1 class="text-dark text-center pb-5">Sculpture</h1>
    <?php if($page === 1 || $page === null): ?>
        <?php include('partials/_sculpture-page-1.php') ?>
    <?php elseif($page === 2): ?>
        <?php include('partials/_sculpture-page-2.php') ?>
    <?php elseif($page === 3): ?>
        <?php include('partials/_sculpture-page-3.php') ?>
    <?php elseif($page === 4): ?>
        <?php include('partials/_sculpture-page-4.php') ?>
    <?php endif; ?>
    <div class="d-flex justify-content-center py-3 mb-2 pagination">
        <div>
            <?php if($previousPageEnabled): ?>
            <a href="sculpture.php?page=<?= $page - 1 ?>" class="text-dark pagination-link" rel="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
            <?php else: ?>
            <i class="fa fa-angle-left pagination-link" aria-hidden="true"></i>
            <?php endif ?>
            <?php for($i = 1; $i <= $pages; $i++): ?>
                <?php if($i === $page): ?>
                    <span class="text-danger pagination-link" style="cursor:default;"><?= $i ?></span>
                <?php else: ?>
                    <a class="text-dark pagination-link" href="sculpture.php?page=<?= $i ?>"><?= $i ?></a>
                <?php endif ?>
            <?php endfor; ?>
            <?php if($nextPageEnabled): ?>
            <a href="sculpture.php?page=<?= $page + 1 ?>" class="text-dark pagination-link" rel="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <?php else: ?>
            <i class="fa fa-angle-right pagination-link" aria-hidden="true"></i>
            <?php endif ?>
        </div>
    </div>
</main>
<footer class="mt-auto d-flex justify-content-center"><p>&copy; 2020-2022 Emir Salihovic Mimo</p></footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/magnific-popup@1.1.0/dist/jquery.magnific-popup.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/justifiedGallery@3.8.1/dist/js/jquery.justifiedGallery.min.js"></script>
<script src="js/gallery.js"></script>
</body>
</html>