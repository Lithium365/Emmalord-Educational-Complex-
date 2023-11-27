<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["lname"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "brempongkumi1@gmail.com";
    $subject = "New Form Submission";
    $headers = "From: $email";

    $mailBody = "Name: $name\n";
    $mailBody .= "Email: $email\n";
    $mailBody .= "Message:\n$message";

    // Send the email
    mail($to, $subject, $mailBody, $headers);

    // Redirect to a thank-you page or display a success message
    header("Location: thank-you.html");
    exit();
}
?>
