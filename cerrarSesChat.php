<?php

session_start();

include("conectarse.php");
Conectarse();

$usuario = $_SESSION["user"];
mysql_query("DELETE FROM conectados WHERE user = '$usuario'");

if($_SESSION["autentificado"] == 'SU')
{
   header("Location: bienvenidaProfe.php");
}

else if($_SESSION["autentificado"] == 1)
{
   header("Location: bienvenida.php");
}

else if(!$_SESSION["autenficidado"])
{
   header("Location: errorVerif.php");
}


?>
