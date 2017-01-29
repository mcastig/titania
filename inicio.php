<?php

session_start();

include('conectarse.php');
$link = Conectarse();

$nombre = $_POST["user"];
$password = $_POST["pass"];

$consulta = mysql_query("SELECT user, pass FROM registro") or die("Error en los datos");
$flag = 1;                    //introducida 8/may/2011, presentaba error al no haber ningún usuario registrado.

$avisoContra = 'Hubo algún error en el inicio de sesión, intenta de nuevo.';

while ($arreglo = mysql_fetch_array($consulta)) {
   $flag = 0;

   if($arreglo["user"] == "Profesor"){
     if ($password == $arreglo["pass"]) {
         $_SESSION["autentificado"] = "SU";
         $_SESSION["user"] = $_POST["user"];
         $_SESSION["pass"] = $_POST["pass"];
         header("Location: bienvenidaProfe.php");
         break;
      }
   }

   if ($nombre == $arreglo["user"]) {
      if ($password == $arreglo["pass"]) {
         $_SESSION["autentificado"] = "1";
         $_SESSION["user"] = $_POST["user"];
         $_SESSION["pass"] = $_POST["pass"];
         header("Location: bienvenida.php");
         break;
      } else {
         $avisoContra = '<p>Introduce nuevamente tu contraseña</p>
                         <p>La contraseña introducida no es válida.
                            Por favor, asegúrate de que el bloqueo de mayúsculas no está activado e inténtalo de nuevo. </p>';
         require("errorInicio.php");
         break;
      }
   }

   else if ($nombre != $arreglo["user"]) {
      $flag = 1;
   }
}

if ($flag == 1) {
   $avisoContra = '<p> Nombre de usuario incorrecto </p>
                   <p> El nombre de usuario introducido no fue encontrado en nuestra base de datos, revísalo e inténtalo de nuevo. </p>';
   require("errorInicio.php");
}
?>
