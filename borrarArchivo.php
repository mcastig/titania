<?php

include('conectarse.php');
   Conectarse();

$idArchivo = $_POST["idArchivo"];
$archivo = $_POST["archivo"];
$destino = 'C:/wamp/www/PruebasPHP/archivos/';

mysql_query("DELETE FROM archivos where idArchivo = $idArchivo");
if(unlink($destino.utf8_decode($archivo)))
   {
      echo "El archivo se ha borrado con éxito.";
   }
else
   {
      echo "Hubo un error al borrar el archivo, inténtalo nuevamente más tarde.";
   }


?>
