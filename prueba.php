<?php
   require 'vendor/autoload.php';
   use PHPMailer\PHPMailer\PHPMailer;
   $mail = new PHPMailer;
   $mail->isSMTP();
   $mail->SMTPDebug = 2;
   $mail->Host = 'smtp.hostinger.com';
   $mail->Port = 587;
   $mail->SMTPAuth = true;
   $mail->Username = 'noreply@gpcpuebla.com';
   $mail->Password = 'Noreply@2023_';
   $mail->setFrom('noreply@gpcpuebla.com', 'No responder');
   $mail->addReplyTo('sistemas@gpcpuebla.com', 'Sistemas');
   $mail->addAddress('sistemas@gpcpuebla.com', 'Sistemas');
   $mail->Subject = 'Nuevo cliente te ha contactado desde gpcpuebla.com';
   //$mail->msgHTML(file_get_contents('message.html'), __DIR__);
   $correo = 'Mi nombre es <strong>'.$name.'</strong>\nMi correo: <strong>'.$mail.'</strong>'.'\nMi número:<strong>'.$phone.'\nMensaje: <strong>'.$message.'</strong>';
   $mail->Body = $correo ;
   //$mail->addAttachment('attachment.txt');
   if (!$mail->send()) {
       echo 'Mailer Error: ' . $mail->ErrorInfo;
   } else {
       echo 'The email message was sent.';
   }
?>