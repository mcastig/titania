<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>Chat</title>
      <script src="js/jquery-1.5.1.js" type="text/javascript"></script>
      <script src="js/jquery.validate.js" type="text/javascript"></script>
      <link rel="stylesheet" type="text/css" href="index.css">

     



      <style type="text/css">

         #boxChat
         {
            position: relative;
            top: 20px;
            margin: 0 auto;
            width: 800px;
            height: 500px;
            border: 1px solid #E7E7E7;
         }

         #boxMensajes
         {
            width: 460px;
            height: 460px;
         }

         #boxConectados
         {
            position: relative;
            width: 320px;
            height: 190px;
            top: 20px;
            left: 10px;
         }

         iframe
         {
            height: 100%;
            width: 100%;
            background: #E9F5FE;
            border: 0px;
            overflow: auto;
         }

         #boxForm
         {
            position: relative;
            top: 10px;
            left: 10px;
            background: #E9F5FE;
            width: 300px;
            min-height: 10px;
            padding: 10px;
         }

          #boxCambios
         {
            position: relative;
            background: #E9F5FE;
            width: 300px;
            top: 70px;
            left: 10px;
            height: 80px;
            padding: 10px;
         }

         .campoInsertar2
         {
            width: 300px;
            background: #FFF;
            border-top: 2px solid #e0e4cc;
            border-left: 2px solid #e0e4cc;
            height: 25px;
         }

          input
         {
            background: transparent;
            border: 0px;
         }

         .botónChat
         {
            color: #FFF;
            font-family: helvetica;
            font-size: 18px;
            cursor: pointer;
            -moz-box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
            -webkit-box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
            -moz-border-radius: 7px;
            -webkit-border-radius: 7px;
            padding: 7px 3px;
            position: relative;
            top: 10px;
            left: 60px;
            width: 200px;
            height: 40px;
            margin-bottom: 10px;
            background: #272727;
         }

         .botónChat:hover
         {
            background: #FF0066;
         }

         .botónChat:active
         {
            margin-left: 3px;
         }


         #columna1
         {
            width: 340px;
            height: 460px;
            float: left;
         }

         #columna2
         {
            width: 460px;
            height: 460px;
            float: left;
         }

      </style>


   </head>

   <?php
   session_start();
   include("verifica.php");
   include("iniciarSesChat.php");

   iniciarSesChat();
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

      <div id="contenedor">
         <div id="columna-1000">




            <div id="boxChat">

               <div id="blackHeader">Chat</div>

               <div id="columna1">
                  <div id="boxForm">
                     <form id="formulario" name="formulario" method="post" action="ejecucion.php">
                        <div><input name="mensaje" type="text" id="mensaje" maxlength="250" class="campoInsertar2"></div>
                        <div><input type="submit" name="Submit" class="botónChat" value="Enviar"></div>
                     </form>
                  </div>

                  <div id="boxConectados">
                     <div id="blackHeader">Usuarios conectados</div>
                     <iframe src="conectados.php" scrolling="no"></iframe>
                  </div>
                  
                  <div id="boxCambios">           
                     <a id="cerrarSesChat" href="cerrarSesChat.php">Cerrar Sesión</a>
                  </div>

               </div>

               

               <div id="columna2">
                  <div id="boxMensajes">
                     <iframe src="mensajes.php"></iframe>
                  </div>
               </div>


            </div>

         </div>
      </div>
      <div id="footer"></div>
   </body>
</html>



