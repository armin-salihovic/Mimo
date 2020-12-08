<?php

function checkRequiredField($value) {
    return isset($value) && !empty($value);
}

if($_POST['email-message'] == null) {
    if(checkRequiredField($_POST['name']) && checkRequiredField($_POST['email']) && checkRequiredField($_POST['subject']) && checkRequiredField($_POST['message'])) {
        $email_to = "info@mimo.ba";
        $name = $_POST['name'];
        $email_from = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $header = "From: {$name} <{$email_from}>";

        echo $header;
        mail($email_to, $subject, $message);
    }
}

