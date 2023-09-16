<?php
if(isset($_POST['name']) && isset($_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

$subject = "Contact Form Submission";
$content="From: $name";
$recipient = "prakharorai@gmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
echo "Email sent!"; }
?>
