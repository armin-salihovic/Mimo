<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-178775511-1"></script>
    <script src="{{ asset('js/googletag.js') }}"></script>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="description" content="Follow Emir Salihović Mimo on Facebook and Instagram. Email at info@mimo.ba.">
    <meta name="author" content="Armin Salihović">

    <meta property="og:title" content="Contact | Emir Salihović Mimo"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://www.mimo.ba"/>
    <meta property="og:image" content="https://cdn.mimo.ba/img/og-contact-thumbnail.jpg"/>
    <meta property="og:description"
          content="Follow Emir Salihović Mimo on Facebook and Instagram. Email at info@mimo.ba."/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">

    <link rel="icon" href="https://cdn.mimo.ba/img/favicon.png">
    <title>Contact | Emir Salihović Mimo</title>
    <link rel="stylesheet" href="{{ asset('css/header1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contact3.css') }}">

</head>
<body class="container d-flex flex-column min-vh-100">
<x-header />
<main>
    <x-title>Contact</x-title>

    @if (!$botSuccess)
        <div class="row">
            <div class="col-12 col-lg-5 order-2 order-lg-1"></div>
            <div class="col-12 col-lg-auto order-1 order-lg-2">
                <p class="text-danger text-center text-lg-left"><i class="fa fa-times" aria-hidden="true"></i> Solve the puzzle above
                    to pass the bot check.</p>
            </div>
        </div>
    @endif
    @if ($success)
        <div class="row">
            <div class="col-12 col-lg-5 order-2 order-lg-1"></div>
            <div class="col-12 col-lg-auto order-1 order-lg-2">
                <p class="text-success text-center text-lg-left"><i class="fa fa-check" aria-hidden="true"></i> Your message has been
                    sent!</p>
            </div>
        </div>
    @endif

    <div class="row">
        <div class="col-12 col-lg-5 d-flex align-items-center justify-content-around flex-column flex-sm-row flex-lg-column">
            <a href="https://www.facebook.com/mimo.1960" target="_blank" class="text-center mb-4 mb-lg-0"><i
                        class="fa fa-facebook-official" aria-hidden="true"></i><br><span
                        class="text-dark">Facebook</span></a>
            <a href="https://www.instagram.com/mimoarchitect/" target="_blank" class="text-center mb-4 mb-lg-0"><i
                        class="instagram fa fa-instagram mb-1"></i><br><span class="text-dark m-3">Instagram</span></a>
            <a href="mailto: info@mimo.ba" class="text-center mb-4 mb-lg-0"><i class="fa fa-envelope text-dark"
                                                                               aria-hidden="true"></i><br><span
                        class="text-dark">info@mimo.ba</span></a>
        </div>
        <div class="col-12 col-lg-7">
            <form method="post" action="{{ route('contact.send') }}">
                @csrf
                <div class="form-row">
                    <div class="form-group col-12 col-md-6">
                        <label for="name">Full name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name"
                               value="<?php echo isset($_POST["name"]) ? $_POST["name"] : ''; ?>" required>
                    </div>
                    <div class="form-group col-12 col-md-6">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email"
                               value="<?php echo isset($_POST["email"]) ? $_POST["email"] : ''; ?>" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" class="form-control" id="subject" name="subject"
                           placeholder="Enter the email subject"
                           value="<?php echo isset($_POST["subject"]) ? $_POST["subject"] : ''; ?>" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" class="form-control" id="message" rows="4" placeholder="Enter your message"
                              required><?php echo isset($_POST["message"]) ? $_POST["message"] : ''; ?></textarea>
                </div>
                <div class="form-group d-none">
                    <label for="email-message">Message</label>
                    <input type="text" class="form-control" id="email-message" name="email-message"
                           placeholder="Enter your message">
                </div>
                <div class="row">
                    <div class="col-12 col-lg-5 order-2 order-lg-1 d-flex justify-content-center justify-content-lg-start pb-3">
                        <button type="submit" class="btn btn-primary text-center">Send message</button>
                    </div>
                    <div class="col-12 col-lg-7 order-1 order-lg-2 d-lg-flex justify-content-lg-end">
                            <div class="form-group">
                                <div class="d-lg-flex flex-row align-items-center">
                                    <label for="city" class="my-0 mr-3">
                                        <img src="{{ asset('img/city.png') }}" id="boop" alt="city">
                                    </label>
                                    <input type="text" class="form-control" id='city' name="city" placeholder="Solve puzzle"
                                           required>
                                </div>
                            </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="pt-5 pb-3">
        <img class="position-relative" id="atelier" src="https://cdn.mimo.ba/img/atelier.jpg" alt="atelier">
    </div>
</main>

<x-footer />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
