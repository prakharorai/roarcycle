<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $to = "prakharorai@gmail.com"; 
    $subject = "New Contact Form Submission";
    $message = "Name: $name\nEmail: $email";
    mail($to, $subject, $message);
}
?>
