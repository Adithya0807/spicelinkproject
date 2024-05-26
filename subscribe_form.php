<?php
$to = "SpiceLinkmarketing20@gmail.com"; // replace with your email address
$subject = "Subscribe Form Submission";
$message = "Email: " . $_POST['subscribe-form-5-email'] . "\n";-
// You can add additional headers if needed
$headers = "From: SpiceLinkmarketing20@gmail.com\r\n";

// Send email
mail($to, $subject, $message, $headers);
echo "Subscribe Form submission successful!";
?>