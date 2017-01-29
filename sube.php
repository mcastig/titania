<?php

   session_start();
   include("conectarse.php");
   Conectarse();

   $usuarioArchivo = $_SESSION["user"];


   define("MAX_TAM", 1000000);

   $destino = 'C:/wamp/www/PruebasPHP/archivos/';

   $ext_permitidas = array('.jpg','.gif','.doc','.docx','.pdf','.zip','.rar','.mp4','.ppt','.pptx','.txt');
   $archivo = utf8_decode($_FILES['archivo_usuario']['name']);
   $extension = substr($archivo, strpos($archivo, '.'), strlen($archivo)-1);

   if(!in_array($extension,$ext_permitidas))
   {
      $mensajeSubir = "¡ERROR! El archivo tiene una extensión no permitida: $extension <br><br><br>
                        <a href='subirArchivos.php'>Volver a Subir Archivos</a>";
      require("archivoSubido.php");
      exit;
   }

   $tam = filesize($_FILES['archivo_usuario']['tmp_name']);
   if($tam > MAX_TAM)
   {
      $mensajeSubir = "¡ERROR!  El archivo es demasiado grande: $tam <br><br><br>
                       <a href='subirArchivos.php'>Volver a Subir Archivos</a>";
      require("archivoSubido.php");
      exit;
   }

   if(move_uploaded_file($_FILES['archivo_usuario']['tmp_name'], $destino.$archivo))
   {
      $nombreArchivo = utf8_encode($archivo);
      mysql_query("INSERT INTO archivos(usuarioArchivo, nombreArchivo) VALUES('$usuarioArchivo', '$nombreArchivo')");
      $mensajeSubir = "El archivo '" .utf8_encode($archivo). "' ha sido correctamente almacenado.<br><br><br>
                       <a href='subirArchivos.php'>Haz click aquí para subir otro archivo</a><br>
                       <a href='bajarArchivos.php'>Haz click aquí para visualizar los archivos subidos.</a>";
      require("archivoSubido.php");
      exit;
   }
   else
   {
      $mensajeSubir =  "Ha habido un error al subir el archivo, por favor inténtelo más tarde.";
      require("archivoSubido.php");
      exit;
   }



?>