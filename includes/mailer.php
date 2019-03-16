<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['email'])) {
  $honeypot = $_POST['company'];
  
  /* Exception class. */
  require 'PHPMailer/src/Exception.php';
  
  /* The main PHPMailer class. */
  require 'PHPMailer/src/PHPMailer.php';
  
  /* SMTP class, needed if you want to use SMTP. */
  require 'PHPMailer/src/SMTP.php';
  
  $mail = new PHPMailer(TRUE);

  /* Open the try/catch block. */
  try {
    /* Set the mail sender. */
    $mail->setFrom('contact@dslinehan.com', 'Princess of the Bottom of the World Multimedia Companion');

    /* Add a recipient. */
    $mail->addAddress('contact@dslinehan.com', 'Dan Linehan');

    /* Set the subject. */
    $mail->Subject = 'New Website Comment Submitted';
    $mail->isHTML(TRUE);
    /* Set the mail message body. */
    $mail->Body = '<h1>Comment details below.</h1><p><b>Name:</b>'.$_POST['name'].'</p><p><b>Email:</b>'.$_POST['email'].'</p><p><b>Message:</b>'.$_POST['message'].'</p>';

    /* Finally send the mail. */
    if( $honeypot > 1 ){
      return;
    }else{
      $mail->send();
    }
  }
  catch (Exception $e)
  {
    /* PHPMailer exception. */
    echo $e->errorMessage();
  }
  catch (Exception $e)
  {
    /* PHP exception (note the backslash to select the global namespace Exception class). */
    echo $e->getMessage();
  }
}
?>