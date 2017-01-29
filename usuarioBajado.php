<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>Salida</title>
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
            background: #FFF;
            width: 500px;
            height: 250px;
            margin-bottom: 40px;
            font-family: helvetica;
            font-size: 24px;
            color: black;
            text-align: center;
         }

         #imagenConsul
         {
            height: 140px;
            width: 240px;
            float: right;
         }
      </style>
   </head>

   

   <body>
      <div id="header"></div>
      <div id="contenedor" style="min-height: 450px">
         <div id="columna-1000" style="min-height: 450px">
            <div id="mensaje">
               <?php
               echo $mensajeDespedida;
   ?>
               <div>
                  <img id="imagenConsul" src="LOGO2.jpg" alt="Consultoría Orange">
               </div>
            </div>
         </div>
      </div>
      <div id="footer"></div>
   </body>
</html>