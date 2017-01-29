<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title></title>
      <script src="js/jquery-1.5.1.js" type="text/javascript"></script>
      <script src="js/jquery.validate.js" type="text/javascript"></script>
      <link rel="stylesheet" type="text/css" href="index.css">

      <style type="text/css">
         #boxCalif
         {
            position: relative;
            margin: 0 auto;
            top: 20px;
            width: 900px;
            min-height: 200px;
            margin-bottom: 50px;
            border: 1px solid #E7E7E7;

         }

         .contFila
         {
            min-height:70px;
            border-bottom: 1px solid #FF0066;

         }

         .col-300-70
         {
            background: transparent;
            color: #333333;
            width: 300px;
            height: 70px;
            float: left;
         }

         .col-100-70
         {
            background: transparent;
            color: #333333;
            width: 100px;
            min-height: 70px;
            padding-top: 2px;
            float: left;
         }

      </style>

   </head>

   <?php
   session_start();
   include("verificaProfe.php");
   include("subirCalif.php");
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

      <div id="contenedor">
         <div id="columna-1000">
            <div id='boxCalif'>
               <div id="blackHeader">Subir calificaciones</div>
               <div class="contFila">
                  <div class='col-300-70'>Nombre</div>
                  <div class='col-100-70'>Materia</div>
                  <div class='col-100-70'>Primero</div>
                  <div class='col-100-70'>Segundo</div>
                  <div class='col-100-70'>Tercero</div>
                  <div class='col-100-70'>Promedio</div>
                  <div class='col-100-70'>&nbsp;</div>
               </div>
               <?php
                  subirCalif();
               ?>
            </div>
         </div>
      </div>
      <div id="footer"></div>
   </body>
</html>
