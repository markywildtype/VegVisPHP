<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['mail'];
    $phone = $_POST['phone'];
    $subject = 'Vegetarian Visitor Contact Form Message';
    $message = $_POST['message'];


//    $mailTo = 'a.weitzel@live.co.uk';
    $mailTo = 'markytorture@hotmail.com';
    $headers = "From: {$mailFrom}";
    $txt = "Name: {$name}\nPhone: {$phone}\n\nMessage:\n\n{$message}";

    // Sleep for modal:
    sleep(3);

    mail($mailTo, $subject, $txt, $headers);
    header("Location: ../index.php?mailsend");
}

