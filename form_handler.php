<?php

// configuration
$from = "feedback@" . $_SERVER['SERVER_NAME'];
$to = "magictouch2219@gmail.com";
$subject = "Feedback from " . $_POST['name'] . ' on your website';

// data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// generate content
$content = "Name: $name sent feedback on your website\n";
$content .= "Email: $email\n";
$content .= "Message: $message\n";

// send mail
$success = mail($to, $subject, $content, "From: $from");

// output
if ($success) {
    echo "Thank you for your feedback.";
} else {
    echo "Error sending feedback.";
}
