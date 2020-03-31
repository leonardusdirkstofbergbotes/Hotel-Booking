<?php 
    session_start();
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0; // Enable verbose debug output
    $mail->isSMTP(); // Send using SMTP
    $mail->Host       = 'smtp.mailtrap.io'; // Set the SMTP server to send through
    $mail->SMTPAuth   = true; // Enable SMTP authentication
    $mail->Username   = 'e5aa578e3d8566'; // SMTP username
    $mail->Password   = '94d35a635840a3'; // SMTP password
    $mail->SMTPSecure = 'TLS'; // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 25; // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('hotelMonkey@gmail.com', 'Admin');
    $mail->addAddress($_SESSION['email'], $_SESSION['username']);  // Add a recipient
    $mail->addReplyTo('info@example.com', 'Information');

    // Content
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = 'Booking is successful';
    $mail->Body    = "Thank you ".$_SESSION['username']." ".$_SESSION['surname']." for booking at Hotel Monkey<br>
                     <p> You are visiting from ".$_SESSION['from']." to " .$_SESSION['to']."
                      ";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send(); //If it is successful
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>