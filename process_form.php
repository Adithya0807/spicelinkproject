<?php
$to = "SpiceLinkmarketing20@gmail.com"; // replace with your email address
$subject = "Form Submission";
$message = "First Name: " . $_POST['contact-first-name'] . "\n";
$message = "Last Name: " . $_POST['contact-last-name'] . "\n";
$message .= "Email: " . $_POST['contact-email'] . "\n";
$message .= "Message: " . $_POST['contact-message'] . "\n";

// You can add additional headers if needed
$headers = "From: SpiceLinkmarketing20@gmail.com\r\n";

// Send email
mail($to, $subject, $message, $headers);
echo "Form submission successful!";
?>
