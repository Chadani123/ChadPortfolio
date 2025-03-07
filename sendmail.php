<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Set the recipient email address
    $to = 'acharyachadani00@gmail.com';

    // Build the email content
    $email_subject = "New message from your website: $subject";
    $email_body = "You have received a new message from your website contact form.\n\n".
                  "Here are the details:\nName: $name\nEmail: $email\n\nMessage:\n$message";

    // Set additional headers
    $headers = "From: noreply@yourdomain.com\r\n" .
               "Reply-To: $email\r\n";

    // Send the email
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "There was an error sending your message.";
    }
} else {
    echo "Invalid request.";
}
?>
