<?php

session_start();

$nombre = $_SESSION["user"];
$correo = $_POST["actualCorreo"];
$newCorreo = $_POST["nuevoCorreo"];

include('conectarse.php');
$link = Conectarse();

$consulta = mysql_query("SELECT mail FROM registro WHERE user = '$nombre' ");

while ($arreglo = mysql_fetch_array($consulta)) {
   if ($correo == $arreglo["mail"]) {
      mysql_query("UPDATE registro SET mail = '$newCorreo' WHERE user = '$nombre' ");
      $mensaje2 = "Tu correo electrónico ha sido cambiado correctamente, inicia sesión para finalizar los cambios. <br><br>
                     <a href='index.php'>Ir a inicio</a> ";
      session_destroy();
      require("cambiosRealizados.php");
      break;
   }

   else{
      $mensaje2 = "El correo que proporcionaste no concuerda con tu nombre de usuario, revísalo e inténtalo de nuevo. <br><br>
                     <a href='cuenta.php'>Ir a cuenta</a> ";
      require("cambiosRealizados.php");
   }
}
?>