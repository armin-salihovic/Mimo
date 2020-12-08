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
        $email_from = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        require 'src/Exception.php';
        require 'src/PHPMailer.php';
        require 'src/SMTP.php';
        include 'smtp-credentials.php';

        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = SMTP_HOST;                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = SMTP_USERNAME;                     // SMTP username
            $mail->Password   = SMTP_PASSWORD;                               // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->setFrom($email_from, $name);
            $mail->addAddress('info@mimo.ba', 'Emir Salihovic Mimo');     // Add a recipient
//    $mail->addAddress('ellen@example.com');               // Name is optional
//    $mail->addReplyTo('info@example.com', 'Information');
//    $mail->addCC('cc@example.com');
//    $mail->addBCC('armin.salihovic@live.com');
//
//    // Attachments
//    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $message;
//            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

    }
}

