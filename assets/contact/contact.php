<?php
   require 'vendor/autoload.php';
   use PHPMailer\PHPMailer\PHPMailer;

   $mail = new PHPMailer;
   $mail->isSMTP();
   $mail->SMTPDebug = 2;
   $mail->Host = 'smtp.gmail.com';
   $mail->Port = 587;
   $mail->SMTPAuth = true;
   $mail->Username = 'hafizasadrafique@gmail.com';
   $mail->Password = 'wkvaysiiydxdtdvs';
   extract($_POST);
   $mail->setFrom('hafizasadrafique@gmail.com', "");
    $mail->addAddress('adam.dipinto@gmail.com', 'Ghostbloom');
   $mail->isHTML(true);   
   $mail->Body = "<h2> Contact Form </h2> <b>Email: </b>" .$email . "<br><b>Subject: </b>" . $subject . "<br><b>Message: </b>" . $message;
   if (!$mail->send()) {
       echo 'Mailer Error: ' . $mail->ErrorInfo;
   } else {
        ob_end_clean();
       echo 'The email massage was sent.';
   }
   
?>