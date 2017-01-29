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
         }
      </style>

   </head>
   <body>
      <div id="header"></div>
      <div id="contenedor">
         <div id="columna-1000">
            <div id="mensaje">
               <p class="importante" align="center" style="color: black">
                  <?php
                  echo $mensaje2;
                  ?>
               </p>
            </div>
         </div>

      </div>

      <?php
               // put your code here
      ?>
   </body>
</html>
