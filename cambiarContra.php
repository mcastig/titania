<?php

session_start();

$nombre = $_SESSION["user"];
$password = $_POST["actualContra"];
$newPass = $_POST["nuevaContra"];

include('conectarse.php');
$link = Conectarse();

$consulta = mysql_query("SELECT pass FROM registro WHERE user = '$nombre' ");

while ($arreglo = mysql_fetch_array($consulta)) {
   if ($password == $arreglo["pass"]) {
      mysql_query("UPDATE registro SET pass = '$newPass' WHERE user = '$nombre' ");
      $mensaje2 = "Tu contraseña ha sido cambiada correctamente, inicia sesión para finalizar los cambios. <br><br>
                     <a href='index.php'>Ir a inicio</a> ";
      session_destroy();
      require("cambiosRealizados.php");
      break;
   }

   else{
      $mensaje2 = "La contraseña que proporcionaste no concuerda con tu nombre de usuario, revísala e inténtalo de nuevo. <br><br>
                     <a href='cuenta.php'>Ir a cuenta</a> ";
      require("cambiosRealizados.php");
   }
}
?>
