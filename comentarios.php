<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title></title>
      <script src="js/jquery-1.5.1.js" type="text/javascript"></script>
      <script src="js/jquery.validate.js" type="text/javascript"></script>
      <link rel="stylesheet" type="text/css" href="index.css">
      <link rel="stylesheet" type="text/css" href="estiloComentarios.css">

      <script  type="text/javascript">
         $(function(){
            $("#comentarios").validate(
            {
               rules:
                  {
                  comentario :
                     {
                     required: true,
                     maxlength : 400
                  }
               },
               messages:
                  {
                  comentario :
                     {
                     required: "Introduce un comentario.",
                     maxlength : "Has pasado el límite de 400 caracteres."
                  }
               }
            });
         });
      </script>


   </head>

   <?php
   session_start();
   include("verifica.php");
   include("muestraComentarios.php");
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
            <div id="boxAreaComentarios">
               <div id="blackHeader" style="margin-bottom: 10px">Comentarios</div>

               <?php
               muestraComentarios();
               ?>

            </div>

            <div id="boxComentarios">
               <div id="blackHeader" style="margin-bottom: 20px">Manda tu comentario</div>

               <form id="comentarios" name="comentarios" action="comentar.php" method="post">

                  <div id="contenedorTextArea">
                     <textarea class="campoInsertar3" rows="20" cols="80" id="comentario" name="comentario"></textarea>
                  </div>
                  <div id="contenedorBotón">
                     <input type="submit" class="botónComentar" value="Comentar">
                  </div>

               </form>
            </div>


         </div>
      </div>
      <div id="footer"></div>

   </body>
</html>
