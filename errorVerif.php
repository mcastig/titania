<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>cambiosRealizados</title>
      <script src="js/jquery-1.5.1.js" type="text/javascript"></script>
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
   <body>
      <div id="header"></div>
      <div id="contenedor" style="min-height: 450px">
         <div id="columna-1000" style="min-height: 450px">
            <div id="mensaje">
               <p class="importante" style="color: black">
                  <?php
                  echo 'Actualmente no puedes acceder a esta página, esto puede ser porque no has iniciado sesión o porque tu nivel de usario no lo permite.';
                  ?>
               </p>
               <p align="center" class="importante"><a href="index.php">Ir a inicio</a></p>
            </div>
         </div>
         
      </div>
      <div id="footer">
         <div></div>
      </div>
   </body>
</html>

