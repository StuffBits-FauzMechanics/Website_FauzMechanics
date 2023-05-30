<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Fetch form values
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Set recipient email address
  $to = 'sagar.gadhave@stuffbits.in';

  // Set email subject
  $subject = 'Contact Form Submission';

  // Construct email body
  $body = "Name: " . $name . "\n";
  $body .= "Email: " . $email . "\n";
  $body .= "Message: " . $message;

  // Set additional headers
  $headers = 'From: ' . $email . "\r\n";
  $headers .= 'Reply-To: ' . $email . "\r\n";

  // Send email
  if (mail($to, $subject, $body, $headers)) {
    echo "Email sent successfully!";
  } else {
    echo "Failed to send email. Please try again later.";
  }
}
?>
