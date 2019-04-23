<?php

//if (isset($_POST['submit'])) {
//    $name = $_POST['name'];
//    $mailFrom = $_POST['mail'];
//    $phone = $_POST['phone'];
//    $subject = 'Vegetarian Visitor Contact Form Message';
//    $message = $_POST['message'];
//
//
////    $mailTo = 'a.weitzel@live.co.uk';
//    $mailTo = 'markytorture@hotmail.com';
//    $headers = "From: {$mailFrom}";
//    $txt = "Name: {$name}\nPhone: {$phone}\n\nMessage:\n\n{$message}";
//
//    // Sleep for modal:
//    sleep(3);
//
//    mail($mailTo, $subject, $txt, $headers);
//    header("Location: ../index.php?mailsend");
//}

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require '../vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);


try {
    //Server settings
    $mail->SMTPDebug = 2;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'cloud715.unlimitedwebhosting.co.uk';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'mark@vegetarianvisitor.co.uk';                     // SMTP username
    $mail->Password   = 'Fuck0fffiona';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 25;                                    // TCP port to connect to

//    echo "<script type='text/javascript'>alert('$mail');</script>";

    //Recipients
    $mail->setFrom($_POST['mail'], $_POST['name']);
    $mail->addAddress('markytorture@hotmail.com', 'Joe User');     // Add a recipient
//    $mail->addAddress('ellen@example.com');               // Name is optional
//    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');

    // Attachments
//    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Vegetarian Visitor Contact Form Message';
    $mail->Body    = $_POST['message'];
//    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    sleep(2);

    $mail->send();
    header("Location: ../index.php?mailsend");

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}