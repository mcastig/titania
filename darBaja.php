<?php

session_start();

include("conectarse.php");
Conectarse();

$usuario = $_SESSION["user"];

mysql_query("DELETE FROM archivos WHERE usuarioArchivo = '$usuario'");
mysql_query("DELETE FROM chatear WHERE alias = '$usuario'");
mysql_query("DELETE FROM comentarios WHERE userComent = '$usuario'");
mysql_query("DELETE FROM conectados WHERE user = '$usuario'");
mysql_query("DELETE FROM materia WHERE userMat = '$usuario'");
mysql_query("DELETE FROM registro WHERE user = '$usuario'");
session_destroy();

$mensajeDespedida = "<p class='importante'>Adiós $usuario, has sido dado de baja exitosamente.</p>
                     <p class='importante'>Los miembros de la consultoría ORANGE te despiden agradeciendo tu preferencia.</p>";

require('usuarioBajado.php');
?>