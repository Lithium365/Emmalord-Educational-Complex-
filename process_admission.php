<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $studentName = $_POST["student_name"];
    $dateOfBirth = $_POST["date_of_birth"];
    $parentName = $_POST["parent_name"];
    $contactNumber = $_POST["contact_number"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $previousSchool = $_POST["previous_school"];
    $immunizationRecords = isset($_FILES["immunization_records"]) ? $_FILES["immunization_records"] : null;
    $studentName = htmlspecialchars(trim($studentName));
    $message = "New Admission Form Submission:\n\n";
    $message .= "Student's Full Name: $studentName\n";
    $message .= "Date of Birth: $dateOfBirth\n";
    $message .= "Parent/Guardian's Full Name: $parentName\n";
    $message .= "Contact Number: $contactNumber\n";
    $message .= "Email Address: $email\n";
    $message .= "Residential Address:\n$address\n";
    $message .= "Previous School (if applicable): $previousSchool\n";
    $file = fopen("complaints.txt.txt", "a"); 
    fwrite($file, $message . "\n\n");
    fclose($file);
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.elasticmail.com'; 
        $mail->SMTPAuth   = true;
        $mail->Username   = 'Brempongkumi1@gmail.com'; 
        $mail->Password   = '889A19AF4007EB84C23B0EE726C763DB62B1';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 2525;     
        $mail->setFrom('Brempongkumi1@gmail.com', 'ELWIN KUMI OBREMPONG');
        $mail->addAddress('Brempongkumi18@gmail.com', 'ODURO KWAME');    
        if ($immunizationRecords) {
            $mail->addAttachment($immunizationRecords['tmp_name'], $immunizationRecords['name']);
        }
        $mail->isHTML(false);
        $mail->Subject = ' Form Submission';
        $mail->Body    = $message;
        $mail->send();
        header("Location: thank_you.html");
        exit();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    header("Location: ADMISSIONS.HTML");
    exit();
}
?>
