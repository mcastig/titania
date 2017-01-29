<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title></title>
      <script src="js/jquery-1.5.1.js" type="text/javascript"></script>
      <script src="js/jquery.validate.js" type="text/javascript"></script>
      <link rel="stylesheet" type="text/css" href="index.css">


   </head>

   <?php
   session_start();
   include("verifica.php");
   ?>

   <body>
      <div id="header">
         <div id="links">
            <ul>
               <li><a href="bienvenida.php">Inicio</a></li>
               <li>
                  <a href="#">Información</a>
                  <ul>
                     <li><a href="bajarArchivos.php">Bajar información</a></li>
                     <li><a href="subirArchivos.php">Subir información</a></li>
                  </ul>
               </li>
               <li><a href="comentarios.php">Comentarios</a></li>
               <li><a href="calif.php">Calificaciones</a></li>
               <li><a href="cuenta.php">Cuenta</a></li>
               <li><a href="chat.php">Chat</a></li>
               <li><a href="salir.php">Cerrar Sesión</a></li>      
            </ul>
         </div>
      </div>

      <div id="contenedor" style="min-height: 450px">
         <div id="columna-1000" style="min-height: 450px"> <h2 class="importante" align="center">¡Bienvenido
               <?php
               echo $_SESSION["user"];
               ?>!</h2>


         </div>
      </div>
      <div id="footer"></div>
   </body>
</html>
