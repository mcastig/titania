<?php
   function Conectarse()
   {
      $db_host = "localhost";
      $db_user = "root";
      $db_name = "aveldanio";
      $db_pass = "root";

      $link = mysql_connect($db_host,$db_user,$db_pass) or die("No se pudo conectar a la base de datos");

      mysql_select_db($db_name,$link) or die("Error al seleccionar la base de datos");

      return $link;
   }
?>
