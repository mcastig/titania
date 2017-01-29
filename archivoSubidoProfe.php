<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title></title>
      <script src="js/jquery-1.5.1.js" type="text/javascript"></script>
      <script src="js/jquery.validate.js" type="text/javascript"></script>
      <link rel="stylesheet" type="text/css" href="index.css">

      <style type="text/css">
         #mensaje
         {
            top: 40px;
            margin: 0 auto;
            padding: 10px;
            position: relative;
            border: 2px solid #FF2623;
            background: #fcdfdd;
            width: 500px;
            height: 125px;
            margin-bottom: 40px;
            font-family: helvetica;
            font-size: 24px;
            color: black;
         }
      </style>

   </head>

   <?php
   include("verificaProfe.php");
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
               <li><a href="califProfe.php">Calificaciones</a></li>
               <li><a href="cuentaProfe.php">Cuenta</a></li>
               <li><a href="chatProfe.php">Chat</a></li>
               <li><a href="salir.php">Cerrar Sesión</a></li>
            </ul>
         </div>
      </div>

      <div id="contenedor" style="min-height: 450px">
         <div id="columna-1000" style="min-height: 450px">
            <div id="mensaje">
               <p class="importante" style="color: #333">
               <?php
               echo $mensajeSubirProfe;
               ?>
               </p>
            </div>

         </div>
      </div>
      <div id="footer"></div>
   </body>
</html>
