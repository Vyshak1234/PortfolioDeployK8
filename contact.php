<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Email settings
    $to = "vyshakprakash123456@gmail.com"; // Enter your email address here
    $subject = "New Contact Form Submission";
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n";
    $body .= "Message:\n$message\n";

    // Send email
    if (mail($to, $subject, $body)) {
        // Email sent successfully
        http_response_code(200); // Set response code to 200 (OK)
        echo "Message sent successfully.";
    } else {
        // Email sending failed
        http_response_code(500); // Set response code to 500 (Internal Server Error)
        echo "Error sending message.";
    }
} else {
    // Invalid request method
    http_response_code(405); // Set response code to 405 (Method Not Allowed)
    echo "Method Not Allowed";
}
?>
