<?php
require('conexion.php');
require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;

$name = $_POST['name'];
$mail = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$datetoday = date('Y-m-d');

$sql = "INSERT INTO clientes_potenciales(id, nombre, email, telefono, mensaje, fecha_registro)
         VALUES('0','$name','$mail','$phone','$message','$datetoday')";

$insert = mysqli_query($connection,$sql);
$correo = 'Mi nombre es: '.$name.'| Mi correo: '.$mail.'|  Mi número: '.$phone.'| Mensaje: '.$message;

if($insert){
    mysqli_close($connection);
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->SMTPDebug = 0;
    $mail->Host = 'smtp.hostinger.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->CharSet = "UTF-8";
    $mail->Encoding = "quoted-printable";
    $mail->Username = 'noreply@gpcpuebla.com';
    $mail->Password = 'Noreply@2023_';
    $mail->setFrom('noreply@gpcpuebla.com', '¡Nuevo cliente!');
    //$mail->addReplyTo('sistemas@gpcpuebla.com', 'Sistemas');
    $mail->addAddress('sistemas@gpcpuebla.com', 'Ventas');
    $mail->Subject = 'Nuevo cliente te ha contactado desde gpcpuebla.com';
    //$mail->msgHTML(file_get_contents('message.html'), __DIR__);
    $mail->Body=$correo;
    //$mail->addAttachment('attachment.txt');
    if (!$mail->send()) {
        echo 'Error al enviar: ' . $mail->ErrorInfo;
    } else {
        echo 'Mensaje enviado exitosamente.';
    }
    echo '<script> alert("¡Guardamos tus datos exitosamente!\nUn agente de ventas te contactará"); </script>';
    echo '<script>window.location= "index.html";</script>';
}else{
    echo '<script> alert("Error al guardar tu información")</script>';   
}
?>