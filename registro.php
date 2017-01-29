<?php

include('conectarse.php');
$link = Conectarse();


   
   $nombre = $_POST["nombre"];
   $apellidos = $_POST["apellidos"];
   $user = $_POST["regUser"];
   $pass = $_POST["regPass"];
   $mail = $_POST["correo"];
   $carrera = $_POST["carrera"];
   $grupo = $_POST["grupo"];
   $boleta = $_POST["boleta"];
   $semestre = $_POST["semestre"];
   $materia = $_POST["materia"];
   $valorDefaultCalif = -1;


   $consulta = mysql_query("SELECT nombre, user, boleta, mail FROM registro") or die("Error en los datos");
   $flag = 1;

   while ($arreglo = mysql_fetch_array($consulta)) {
      $flag = 0;
      if ($user == $arreglo["user"]) {
         $aviso = 'El nombre de usuario introducido ya existe, por favor selecciona otro';
         require('errorRegistro.php');
         break;
      }
      if ($boleta == $arreglo["boleta"]) {
         $aviso = 'El número de boleta que proporcionaste ya está registrado.';
         require('errorRegistro.php');
         break;
      }
      if ($mail == $arreglo["mail"]) {
         $aviso = 'La cuenta de correo proporcionada ya ha sido activada.';
         require('errorRegistro.php');
         break;
      } else if (($user != $arreglo["user"]) && ($boleta != $arreglo["boleta"]))
         $flag = 1;
   }

   if ($flag == 1) {
      $sql = "INSERT INTO registro VALUES(
                     '$nombre', '$apellidos', '$user', '$pass', '$mail',
                     '$carrera', '$grupo', '$boleta', '$semestre', '$materia')";

      

      $sql1 = "INSERT INTO materia (userMat, materiaMat, primero, segundo, tercero, nombreRealMat) VALUES(
                     '$user', '$materia', '$valorDefaultCalif', '$valorDefaultCalif', '$valorDefaultCalif', '$nombre ' ' $apellidos')";

      
      
      if (!mysql_query($sql, $link) OR !mysql_query($sql1, $link))
         die('Error: ' . mysql_error());
      require("registrado.php");
   }

  

?>
