<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function checkRequiredField($value) {
    return isset($value) && !empty($value);
}

$success = false;

if(isset($_POST['email-message'])) {
    if(checkRequiredField($_POST['name']) && checkRequiredField($_POST['email']) && checkRequiredField($_POST['subject']) && checkRequiredField($_POST['message'])) {
        $name = $_POST['name'];
        $from = $_POST['email'];
        $subject = $_POST['subject'];
        $message = nl2br($_POST['message']);

        require 'src/Exception.php';
        require 'src/PHPMailer.php';
        require 'src/SMTP.php';
        include 'smtp-credentials.php';

        $mail = new PHPMailer(true);

        try {
            //Server settings
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            $mail->Host       = SMTP_HOST;
            $mail->SMTPAuth   = true;
            $mail->Username   = SMTP_USERNAME;
            $mail->Password   = SMTP_PASSWORD;
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;
            $mail->CharSet = 'UTF-8';
            $mail->Encoding = 'base64';

            //Recipients
            $mail->setFrom(SMTP_USERNAME, $name);
            $mail->addAddress("info@mimo.ba", "Emir Salihovic Mimo");

            $mail->addReplyTo($from, $name);
            $mail->addBCC("armin.salihovic@live.com");

            // Content
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = $message;

            $mail->send();
            //echo 'Message has been sent';
            $success = true;
        } catch (Exception $e) {
            //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}

// In case I forget
// create a new file smtp-credentials.php and add
//      define('SMTP_HOST', '');
//      define('SMTP_USERNAME', '');
//      define('SMTP_PASSWORD', '');

// In case there is a problem with PHP mailer visit:
// https://github.com/PHPMailer/PHPMailer
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-178775511-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-178775511-1');
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="description" content="Follow Emir Salihović Mimo on Facebook and Instagram. Email at info@mimo.ba.">
    <meta name="author" content="Armin Salihović">

    <meta property="og:title" content="Contact | Emir Salihović Mimo" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.mimo.ba" />
    <meta property="og:image" content="https://cdn.mimo.ba/img/og-contact-thumbnail.jpg" />
    <meta property="og:description" content="Follow Emir Salihović Mimo on Facebook and Instagram. Email at info@mimo.ba." />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">

    <link rel="icon" href="https://cdn.mimo.ba/img/favicon.png">
    <title>Contact | Emir Salihović Mimo</title>

    <style>
        body {
            font-family: 'Montserrat', sans-serif !important;
        }
        img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            object-position: 50% 50%;
        }
        h1 {
            font-family: 'Montserrat', sans-serif;
            text-transform: uppercase;
            letter-spacing: 0.2em;
            font-size: 2em;
        }

        textarea {
            resize: none;
            white-space: pre-wrap;
            overflow-wrap: break-word;
        }

        .fa-facebook-official, .fa-envelope {
            font-size: 36px;
        }

        .instagram {
            display: inline-block;
            width: 36px;
            height: 36px;
            text-align: center;
            border-radius: 8px;
            color: #fff;
            font-size: 30px;
            line-height: 36px;
            vertical-align: middle;
            background: #d6249f;
            background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%,#d6249f 60%,#285AEB 90%);
            box-shadow: 0px 3px 10px rgba(0,0,0,.25);
        }

        main {
            font-family: "Open Sans",sans-serif;
        }

        /*button {
            padding: 0.5rem 0.75rem;
            background: #343a40;
            color: white;
            border: none;
        }*/

    </style>
</head>
<body class="container d-flex flex-column min-vh-100">
<header>
    <nav class="navbar px-0 navbar-expand-sm center">
        <a class="navbar-brand" href="index.html"><span class="navbar-text text-dark">MIMO</span></a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#this-collapse">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="this-collapse">

            <ul class="navbar-nav align-items-center">
                <li class="nav-item">
                    <a class="nav-link text-dark" href="architecture/index.html">Architecture</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="art">Art</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="design">Design</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="sculpture">Sculpture</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<main>
    <h1 class="text-dark text-center pb-5">Contact</h1>
    <div class="row">
        <div class="col-12 col-lg-5 d-flex align-items-center justify-content-around flex-column flex-sm-row flex-lg-column">
            <a href="https://www.facebook.com/mimo.1960" target="_blank" class="text-center mb-4 mb-lg-0"><i class="fa fa-facebook-official" aria-hidden="true"></i><br><span class="text-dark">Facebook</span></a>
            <a href="https://www.instagram.com/mimoarchitect/" target="_blank" class="text-center mb-4 mb-lg-0"><i class="instagram fa fa-instagram mb-1"></i><br><span class="text-dark m-3">Instagram</span></a>
            <a href = "mailto: info@mimo.ba" class="text-center mb-4 mb-lg-0"><i class="fa fa-envelope text-dark" aria-hidden="true"></i><br><span class="text-dark">info@mimo.ba</span></a>
        </div>
        <div class="col-12 col-lg-7">
            <form method="post">
                <div class="form-row">
                    <div class="form-group col-12 col-md-6">
                        <label for="name">Full name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group col-12 col-md-6">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" class="form-control" id="subject" name="subject" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" class="form-control" id="message" rows="4" required></textarea>
                </div>
                <div class="form-group d-none">
                    <label for="email-message">Message</label>
                    <input type="text" class="form-control"  id="email-message" name="email-message">
                </div>
                <div class="row">
                    <div class="col-12 col-lg-6 d-flex justify-content-center justify-content-lg-start pb-3">
                        <button type="submit" class="btn btn-primary text-center">Send message</button>
                    </div>
                    <div class="col-12 col-lg-6 d-flex justify-content-center justify-content-lg-end">
                        <?php
                            if($success) echo '<p class="text-success"><i class="fa fa-check" aria-hidden="true"></i> Your message has been sent!</p>';
                        ?>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="pt-5 pb-3">
        <img class="position-relative" src="https://cdn.mimo.ba/img/atelier.jpg" alt="atelier">
    </div>
</main>

<footer class="mt-auto d-flex justify-content-center"><p>&copy; 2020-2021 Emir Salihovic Mimo</p></footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>