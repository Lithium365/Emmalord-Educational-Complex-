<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

// Include Composer's autoloader
require 'vendor/autoload.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // ... (your existing code to retrieve form data)

    // Create a message
    $message = "New Complaint:\n\n";
    $message .= "Parent Name: $parent_name\n";
    $message .= "Email: $email\n";
    $message .= "Phone Number: $phone\n";
    $message .= "Complaint:\n$complaint";

    // Initialize PHPMailer
    $mail = new PHPMailer(true);

    try {
        // SMTP settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.elasticemail.com'; // Set your SMTP host
        $mail->SMTPAuth   = true;
        $mail->Username   = 'Brempongkumi18@gmail.com'; // Set your email address
        $mail->Password   = '1AF0CF247685002C4C3622E314A7A65947CE'; // Set your email password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Use STARTTLS (can be ENCRYPTION_SMTPS for SSL)
        $mail->Port       = 2525; // Set your SMTP port

        // Sender and recipient
        $mail->setFrom('Brempongkumi18@gmail.com', 'ELWIN KUMI OBREMPONG');
        $mail->addAddress('brempongkumi1@gmail.com', 'JOSEPH MANU');

        // Email content
        $mail->isHTML(true);
        $mail->Subject = 'complaint';
        $mail->Body    = $message;

        // Send email
        $mail->send();

        // Redirect to a thank you page or back to the form
        header("Location: thank_you.html");
        exit();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    // Redirect to the form if accessed directly without submission
    header("Location: complains.html");
    exit();
}
?>
