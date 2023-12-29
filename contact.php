<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Set your email address where you want to receive messages
    $to = "aladejamiudamilola.com";

    // Set email subject
    $subject = "New Message from Contact Form";

    // Compose email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n\n";
    $email_message .= "Message:\n$message";

    // Set additional headers
    $headers = "From: $email\r\nReply-To: $email\r\n";

    // Send email
    mail($to, $subject, $email_message, $headers);

    // Optionally, you can redirect the user after successful submission
    header("Location: thank-you.html");
    exit();
}
?>
