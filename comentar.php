<?php

   session_start();
   include('conectarse.php');
   $link = Conectarse();

   $usuario = $_SESSION["user"];
   $comentario = $_POST["comentario"];

   $consulta = mysql_query(" SELECT * FROM registro where user = '$usuario' ");

   while($arreglo = mysql_fetch_array($consulta)){
      $nombreReal = $arreglo["nombre"] ." ". $arreglo["apellidos"];
   }

   $consulta2 = mysql_query(" INSERT INTO comentarios(userComent, nombreReal, comentario)
                              VALUES('$usuario', '$nombreReal', '$comentario') ");


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
