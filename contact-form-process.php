<?php
if($_POST["eessage"]) {
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $headers = 'From: info@website.com' . "\r\n" .
           'Reply-To: ' . $_POST['email']. "\r\n" .
           'X-Mailer: PHP/' . phpversion();
    mail("mansour.elaine.1@gmail.com", $subject, $message $headers);
    die('Thank you for your email');
}