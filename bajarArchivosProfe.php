<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title></title>
      <script src="js/jquery-1.5.1.js" type="text/javascript"></script>
      <script src="js/jquery.validate.js" type="text/javascript"></script>
      <link rel="stylesheet" type="text/css" href="index.css">
      <link rel="stylesheet" type="text/css" href="estiloArchivos.css">




   </head>

   <?php
   session_start();
   include 'verificaProfe.php';
   include 'verArchivos.php';
   ?>

   <body>
      <div id="header">
         <div id="links">
            <ul>
               <li><a href="bienvenidaProfe.php">Inicio</a></li>
               <li>
                  <a href="#">Información</a>
                  <ul>
                     <li><a href="bajarArchivosProfe.php">Bajar información</a></li>
                     <li><a href="subirArchivosProfe.php">Subir información</a></li>
                  </ul>
               </li>
               <li><a href="comentariosProfe.php">Comentarios</a></li>
               <li><a href="califProfe.php">Subir Calificaciones</a></li>
               <li><a href="cuentaProfe.php">Cuenta</a></li>
               <li><a href="chatProfe.php">Chat</a></li>
               <li><a href="salir.php">Cerrar Sesión</a></li>
            </ul>
         </div>
      </div>

      <div id="contenedor" style="min-height: 450px">
         <div id="columna-1000" style="min-height: 450px">

            <div id="boxArchivos">
               <div id="blackHeader">Archivos</div>
               <div id="instrucciones">
                  <p>Para bajar o consultar un archivo haz click sobre el ícono en forma de carpeta correspondiente.</p>
               </div>
                  <?php
                     verArchivos();
                  ?>
            </div>


         </div>
      </div>
      <div id="footer"></div>
   </body>
</html>


