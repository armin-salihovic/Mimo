<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function checkRequiredField($value) {
    return isset($value) && !empty($value);
}

if($_POST['email-message'] == null) {
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
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
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
