<?php
include('conectarse.php');
$link = Conectarse();

require("class.phpmailer.php");

define('GUSER', 'bushiiko@gmail.com'); // Gmail username
define('GPWD', 'consulOrange'); // Gmail password

$mail = $_POST["correo"];

$flag = 1;

$consulta = mysql_query("SELECT mail, pass FROM registro") or die("Error en los datos");

while ($arreglo = mysql_fetch_array($consulta))
{
   if ($mail == $arreglo["mail"])  //si se encuentra la contraseña, enviarla
   {
      $cuerpo = utf8_decode('Gracias por usar nuestro servicio, tu contraseña es : ' . $arreglo["pass"] . '
                               Ahora puedes acceder a nuestro sitio de nuevo.');
      $de = utf8_decode('Consultoría orange');
      $título = utf8_decode('Tu contraseña perdida');

      if (smtpmailer($mail, 'bushiiko@gmail.com', $de, $título, $cuerpo))
      {
         $mensaje = 'Tu contraseña ha sido enviada';
         require('correoEnviado.php');
         $flag = 0;
         break;
      }
      if (!empty($error))
         echo $error;
   }
}

if($flag == 1)
{
   $mensaje = 'El correo proporcionado no fue encontrado, revísalo porfavor';
   require('correoEnviado.php');
}


function smtpmailer($to, $from, $from_name, $subject, $body)
{
   global $error;
   $mail = new PHPMailer();  // create a new object
   $mail->IsSMTP(); // enable SMTP
   $mail->SMTPDebug = 0;  // debugging: 1 = errors and messages, 2 = messages only
   $mail->SMTPAuth = true;  // authentication enabled
   $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
   $mail->Host = 'smtp.gmail.com';
   $mail->Port = 465;
   $mail->Username = GUSER;
   $mail->Password = GPWD;
   $mail->SetFrom($from, $from_name);
   $mail->Subject = $subject;
   $mail->Body = $body;
   $mail->AddAddress($to);
   if (!$mail->Send())
   {
      $error = 'Error al enviar: ' . $mail->ErrorInfo;
      return false;
   }
   else
   {
      return true;
   }
}
?>
