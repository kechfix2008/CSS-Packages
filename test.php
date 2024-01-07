<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form input values
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Set the recipient email address
    $to = 'techfix180@gmail.com'; // Replace with your own email address
    
    // Set the email subject
    $subject = 'Contact Form Submission';
    
    // Set the email headers
    $headers = "From: $name <$email>" . "\r\n";
    $headers .= "Reply-To: $email" . "\r\n";
    
    // Build the email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message";
    
    // Send the email
    $success = mail($to, $subject, $email_content, $headers);
    
    // Check if the email was sent successfully
    if ($success) {
        echo 'Email sent successfully.';
    } else {
        echo 'An error occurred while sending the email.';
    }
} else {
    echo 'Invalid request.';
}
?>