<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>Cuenta</title>
      <script src="js/jquery-1.5.1.js" type="text/javascript"></script>
      <script src="js/jquery.validate.js" type="text/javascript"></script>
      <link rel="stylesheet" type="text/css" href="index.css">

      <style type="text/css">

         #informaciónCuenta
         {
            position: relative;
            background: #FFF;
            top: 20px;
            left: 20px;
            width: 470px;
            border: 1px solid #E7E7E7;
            margin-bottom: 40px;
            float: left;
         }

         #modificaciónCuenta
         {
            position: relative;
            background: #FFF;
            min-height: 100px;
            top: 20px;
            left: 30px;
            float: left;
            width: 470px;
            margin-bottom: 40px;
            border: 1px solid #E7E7E7;
         }

         #cambiarContra
         {
            padding: 10px;
            border: 10px solid #F1F1F5;
            -moz-border-radius: 7px;
            -webkit-border-radius: 7px;
            position: relative;
            top: 20px;
            left: 40px;
            background: #FFFFFF;
            height: 250px;
            width: 370px;
            display: none;
            margin-bottom: 40px;
         }

         #cambiarContra div:first-child
         {
            border-bottom: 1px solid #466162;
         }

         .pseudoLink
         {
            cursor: pointer;
            font-family: Verdana;
            color: #FF2623;
            text-decoration: none;
         }
         .pseudoLink a
         {
            text-decoration: none;
            color: #FF2623;
         }

         .pseudoLink a:hover
         {
            color : #466162
         }

         .pseudoLink p:hover
         {
            color: #466162;
         }

         #cambiarCorreo
         {
            padding: 10px;
            border: 10px solid #F1F1F5;
            -moz-border-radius: 7px;
            -webkit-border-radius: 7px;
            position: relative;
            top: 20px;
            left: 40px;
            background: #FFFFFF;
            height: 200px;
            width: 370px;
            display: none;
            margin-bottom: 40px;
         }


         #cambiarCorreo div:first-child
         {
            border-bottom: 1px solid #466162;
         }


      </style>

      <script type="text/javascript">
         $(function(){
            $('#form3').validate(
            {
               rules:
                  {
                  actualContra : "required",
                  nuevaContra : "required",
                  compruebaContra : {
                     equalTo : "#nuevaContra"
                  }
               },

               messages:
                  {
                  actualContra : "Contraseña requerida",
                  nuevaContra : "Contraseña requerida",
                  compruebaContra : "Revisa la contraseña"
               }
            });
         });
      </script>

      <script type="text/javascript">
         $(function(){
            $('#form4').validate(
            {
               rules:
                  {
                  actualCorreo : "required",
                  nuevoCorreo : "required"
               },

               messages:
                  {
                  actualCorreo : "Correo requerido",
                  nuevoCorreo : "Correo requerido"
               }
            });
         });
      </script>

      <script type="text/javascript">
         $(function(){
            $('#mostrarCambiarContra').click(function(){
               $('#cambiarContra').toggle("slow");
            });
         });
      </script>

      <script type="text/javascript">
         $(function(){
            $('#mostrarCambiarCorreo').click(function(){
               $('#cambiarCorreo').toggle("slow");
            });
         });
      </script>

   </head>

   <?php
   session_start();
   include("verificaProfe.php");
   include("info.php");
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

            <div id="informaciónCuenta">
               <div id="blackHeader">Información de la Cuenta</div><br>
               <div class="col-200">Nombre real</div>
               <div class="col-200">
                  <?php
                  echo $nombreReal;
                  ?>
               </div>
               <div class="col-200">Nombre de usuario</div>
               <div class="col-200">
                  <?php
                  echo $nombreUsuario;
                  ?>
               </div>
               <div class="col-200">Correo electrónico</div>
               <div class="col-200">
                  <?php
                  echo $mail;
                  ?>
               </div>

            </div>




            <div id="modificaciónCuenta">
               <div id="blackHeader">Modificación de la Cuenta</div><br>

               <div id="mostrarCambiarContra" class="pseudoLink"><p> Cambiar Contraseña</p> </div>
               <div id="cambiarContra">
                  <form name="form3" action="cambiarContra.php" id="form3" method="post">
                     <div class="col-370-reg">Cambiar contraseña</div>
                     <div class="col-370-reg">&nbsp;</div>
                     <div class="col-200">Contraseña actual</div>
                     <div class="col-370"><input name="actualContra" type="password" id="actualContra" class="campoInsertar"></div>
                     <div class="col-200">Nueva contraseña</div>
                     <div class="col-370"><input name="nuevaContra" type="password" id="nuevaContra" class="campoInsertar"></div>
                     <div class="col-200">Confirma tu nueva contraseña </div>
                     <div class="col-370"><input name="compruebaContra" type="password" id="compruebaContra" class="campoInsertar"></div>
                     <div class="col-370-50"><input type="submit" class="botón" value="Cambiar contraseña"></div>
                  </form>
               </div>


               <div id="mostrarCambiarCorreo" class="pseudoLink"> <p>Cambiar Correo</p></div>
               <div id="cambiarCorreo">
                  <form name="form4" action="cambiarCorreo.php" id="form4" method="post">
                     <div class="col-370-reg">Cambiar correo</div>
                     <div class="col-370-reg">&nbsp;</div>
                     <div class="col-200">Correo actual</div>
                     <div class="col-370"><input name="actualCorreo" type="text" id="actualCorreo" class="campoInsertar"></div>
                     <div class="col-200">Nuevo correo</div>
                     <div class="col-370"><input name="nuevoCorreo" type="text" id="nuevoCorreo" class="campoInsertar"></div>
                     <div class="col-370-50"><input type="submit" class="botón" value="Cambiar correo"></div>
                  </form>
               </div>
               <div class="pseudoLink"><a href="darBaja.php">Dar de baja cuenta</a></div>

            </div>
         </div>
      </div>
      <div id="footer"></div>


   </body>
</html>
