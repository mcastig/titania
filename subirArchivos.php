<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title></title>
      <script src="js/jquery-1.5.1.js" type="text/javascript"></script>
      <script src="js/jquery.validate.js" type="text/javascript"></script>
      <link rel="stylesheet" type="text/css" href="index.css">

      <style type="text/css">

         #boxSubir
         {
            min-height: 200px;
            width: 500px;
            position: relative;
            margin: 0 auto;
            top: 50px;
         }


         #subir
         {
            height: 130px;
            width: 500px;
            background: #E9F5FE;
            -moz-border-radius: 15px;
            -webkit-border-radius: 15px;
            position: relative;
            top: 20px;
         }

         #subir p
         {
            color: #F06;
            line-height: 1.5em;
            margin-bottom: 15px;
            position: relative;
            top: 10px;
            padding: 0 15px;
            font-size: 13px;
            font-weight: bold;
         }


         #file
         {
            position: relative;
            left: 13px;
            top: 10px;
            margin-bottom: 10px;
            border: 0px;
         }

         form input
         {
            border: 0px;
         }

         .botónEnviar
         {
            color: #FFF;
            font-family: helvetica;
            font-size: 15px;
            cursor: pointer;
            -moz-box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
            -webkit-box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
            -moz-border-radius: 7px;
            -webkit-border-radius: 7px;
            padding: 7px 3px;
            position: relative;
            top: 10px;
            left: 13px;
            margin-bottom: 20px;
            width: 65px;
            height: 33px;
            background: #272727;
         }

         .botónEnviar:hover
         {
            background: #333;
         }

         .botónEnviar:active
         {
            margin-left: 3px;
         }

          .campoInsertar2
         {
            background: #FFF;
            border-top: 2px solid #e0e4cc;
            border-left: 2px solid #e0e4cc;
            height: 25px;
         }

         label.error
         {
            top: 15px;
            color: #F06;
            background: #FFF;
            left: -32px;
            padding: 9px;
            border: 1px solid #F06;
         }


      </style>


      <script type="text/javascript">
         $(function(){
            $("#subirArch").validate({
               rules:
                  {
                     archivo_usuario : "required"
                  },
               messages:
                  {
                     archivo_usuario : "Elige un archivo."
                  }
            });
         });
      </script>


   </head>

   <?php
   session_start();
   include 'verifica.php';
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
         <div id="columna-1000" style="min-height: 450px">
            <div id="boxSubir">
               <div id="blackHeader">Subir archivos</div>
               

               <div id="subir">
                  <p>Elige el archivo a subir</p>

                  <form action="sube.php" method="post" enctype="multipart/form-data" name="subirArch" id="subirArch">

                     <input type="file" size="50" name="archivo_usuario" id="file" class="campoInsertar2" value=" "><br>
                     <input type="submit" class="botónEnviar" value="Enviar">

                  </form>
               </div>
            </div>
         </div>
      </div>
      <div id="footer"></div>
   </body>
</html>
