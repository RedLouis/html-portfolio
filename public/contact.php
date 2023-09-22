<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Create the email message
    $to = "ljwvanbommel@email.com"; // Replace with your email address
    $headers = "From: $email";
    $message_body = "Name: $name\n";
    $message_body .= "Email: $email\n";
    $message_body .= "Phone Number: $number\n";
    $message_body .= "Subject: $subject\n";
    $message_body .= "Message:\n$message";

    // Send the email
    if (mail($to, "Contact Form Submission", $message_body, $headers)) {
        echo "Your message has been sent successfully!";
    } else {
        echo "Oops! Something went wrong and we couldn't send your message.";
    }
}
?>
