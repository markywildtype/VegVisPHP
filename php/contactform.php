<?php

if (isset($_POST['submit'])) {  //Checks for the submit button
  $name = $_POST['name']; //Grabs the input with the name 'name' from the form
  $mailFrom = $_POST['mail'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $mailTo = 'markytorture@hotmail.com';
  $headers = "From: {$mailFrom}";

  mail($mailTo, $subject, $message, $headers);
  header("Location: index.php?mailsend");
}
?>
