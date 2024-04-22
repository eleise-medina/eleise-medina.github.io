<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Set the recipient email address
    $to = "createasite4you@gmail.com";
    
    // Set the email subject
    $subject = "New message from $name";
    
    // Set the email body
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message";
    
    // Send the email
    mail($to, $subject, $body);
    
    // Redirect to a thank you page or display a success message
    header("Location: index.html");
    exit;
}
?>
