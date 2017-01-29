<?php

$nombre = $_SESSION["user"];

include('conectarse.php');
$link = Conectarse();

$consulta = mysql_query("SELECT * FROM registro WHERE user = '$nombre' ");

while ($arreglo = mysql_fetch_array($consulta)) {
   $nombreReal = $arreglo["nombre"] . " " . $arreglo["apellidos"];
   $nombreUsuario = $arreglo["user"];
   $mail = $arreglo["mail"];
   $carrera = $arreglo["carrera"];
   $grupo = $arreglo["grupo"];
   $boleta = $arreglo["boleta"];
}
?>
