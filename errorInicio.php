<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <script src="js/jquery-1.5.1.js" type="text/javascript"></script>
      <script src="js/jquery.validate.js" type="text/javascript"></script>
      <link rel="stylesheet" type="text/css" href="index.css">


      <style type="text/css">

         #boxErrorContra
         {
            padding: 20px;
            top: 20px;
            left: 20px;
            border: 10px solid #F1F1F5;
            -moz-border-radius: 7px;
            -webkit-border-radius: 7px;
            position: relative;
            float: left;
            background: #FFFFFF;
            height: 350px;
            width: 470px;
         }

         #errorContra
         {
            padding: 10px;
            float: left;
            position: relative;
            border: 2px solid #FF2623;
            background: #fcdfdd;
            width: 446px;
            height: 125px;
            margin-bottom: 40px;
            font-family: helvetica;
            font-size: 12px;
            color: #333333;
         }

         #errorContra p:first-child
         {
            font-size: 18px;
            font-weight: bold;
            color: #293742;
         }

         #enviarContra
         {
            border: 10px solid #F1F1F5;
            -moz-border-radius: 7px;
            -webkit-border-radius: 7px;
            display: none;
            position: relative;
            float: left;
            left: 55px;
            top: 60px;
            width: 370px;
            height: 140px;
         }

         #enviarContra div
         {
            padding: 10px;
         }

         #boxNoContra
         {
            position: relative;
            float: right;
            top: 20px;
            right: 20px;
            border: 10px solid #F1F1F5;
            -moz-border-radius: 7px;
            -webkit-border-radius: 7px;
         }


         a
         {
            font-family: Verdana;
            color: #282869;
         }

         a:hover
         {
            color: #FF2623;
         }

         .col-370-100
{
   background: #FFFFFF;
   width: 370px;
   height: 100px;
   float: left;
}

      </style>

      <script type="text/javascript">
         $(function() {
            $("#form1").validate(
            {
               rules:
                  {
                  user : "required",
                  pass : "required"
               },
               messages:
                  {
                  user : "Usuario requerido",
                  pass : "Contraseña requerida"
               }
            });
         });
      </script>

      <script type="text/javascript">
         $(function(){
            $('#enviarACorreo').validate(
            {
               rules:
                  {
                  correo :
                     {
                     required : true,
                     email : true
                  }
               },
               messages:
                  {
                  correo :
                     {
                     required : "Correo requerido",
                     email : "Correo inválido"
                  }
               }
            });
         });
      </script>

      <script type="text/javascript">
         $(function(){
            $('#noContra').click(function(){
               $('#enviarContra').toggle('slow');
               $('#correo').focus();
            });
         });
      </script>
   </head>



   <body >

      <div id="header"></div>

      <div id="contenedor">

         <div id="columna-1000">

            <div id="boxErrorContra">

               <form name="form1" action="inicio.php" id="form1" method="post">
                  <div class="col-470"> Inicio de sesión</div>
                  <div class="col-470"> &nbsp; </div>
                  <div id="errorContra">
                     <?php
                        echo $avisoContra;
                     ?>
                  </div>
                  <div class="col-100"> Usuario</div>
                  <div class="col-370"> <input name="user" type="text" id="user" class="campoInsertar"></div>
                  <div class="col-100"> Contraseña</div>
                  <div class="col-370"><input name="pass" type="password" id="pass" class="campoInsertar"></div>
                  <div class="col-100-50"> &nbsp; </div>
                  <div class="col-370-50"><input type="submit" class="botón" id="botónInicio" value="Iniciar sesión"></div>
               </form>
            </div>

            <div class="col-370-100" id="boxNoContra">
               <div align="center" style="font-family: verdana">
                  <p class="importante">¿Problemas para iniciar sesión?</p>
                  <a href="#" id="noContra">¿Has olvidado tu contraseña?</a> <br>
                  <a href="index.php">Ir a registro</a>
               </div>
            </div>

            <div id="enviarContra">
               <form action="enviarContra.php" id="enviarACorreo" method="post">
                  <div>Escribe el correo electrónico relacionado a tu cuenta y te enviaremos tu contraseña en breve.</div>
                  <div><input type="text" id="correo" class="campoInsertar" name="correo"></div>
                  <div><input type="submit" id="enviarCorreo" name="enviarCorreo" class="botón" value="Enviar correo"></div>
               </form>
            </div>
         </div>

      </div>

      <?php
      ?>
   </body>
</html>
