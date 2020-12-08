<?php

function checkRequiredField($value) {
    return isset($value) && !empty($value);
}

$to      = 'info@mimo.ba';
$subject = 'First email from Mimo!';
$message = 'Hey just checking in !';
$headers = 'From: armin.salihovic@live.com' . "\r\n" .
    'Reply-To: armin.salihovic@live.com' . "\r\n";

mail($to, $subject, $message, $headers);

echo "sent!";

//if($_POST['email-message'] == null) {
//    if(checkRequiredField($_POST['name']) && checkRequiredField($_POST['email']) && checkRequiredField($_POST['subject']) && checkRequiredField($_POST['message'])) {
//        $email_to = "info@mimo.ba";
//        $name = $_POST['name'];
//        $email_from = $_POST['email'];
//        $subject = $_POST['subject'];
//        $message = $_POST['message'];
//
//        //$header = "From: {$name} <{$email_from}>";
//        $header = "From: {$email_from}";
//
//        mail($email_to, $subject, $message, $header);
//    }
//}

