<?php
session_start();

include('conectarse.php');
$link = Conectarse();

$primero = $_POST["primero"];
$segundo = $_POST["segundo"];
$tercero = $_POST["tercero"];
$nombre = $_POST["nombre"];

mysql_query("UPDATE materia SET primero = $primero, segundo = $segundo, tercero = $tercero WHERE userMat = '$nombre' ");

header("Location: califProfe.php");

?>
