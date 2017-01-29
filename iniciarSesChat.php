<?php

function iniciarSesChat() {
   include("conectarse.php");
   Conectarse();
   $usuario = $_SESSION["user"];

   $consulta = mysql_query("SELECT * FROM registro WHERE user = '$usuario'");

   while ($arreglo = mysql_fetch_array($consulta)) {
      $nombreReal = $arreglo["nombre"] . " " . $arreglo["apellidos"];
   }

   mysql_query("INSERT INTO conectados(user, nombreReal) VALUES('$usuario', '$nombreReal')");
}

//echo "<script type='text/javascript'>history.back(-1)</script>";
?>
