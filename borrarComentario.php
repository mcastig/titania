<?php

session_start();

include("conectarse.php");
Conectarse();

$id = $_POST["borrarComentID"];

mysql_query("DELETE FROM comentarios WHERE idComent = $id");

if($_SESSION["autentificado"] == 'SU')
{
   header("Location: comentariosProfe.php");
}

else if($_SESSION["autentificado"] == 1)
{
   header("Location: comentarios.php");
}

else if(!$_SESSION["autenficidado"])
{
   header("Location: errorVerif.php");
}

?>
