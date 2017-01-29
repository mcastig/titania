<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>Usuario Registrado</title>
      <script src="js/jquery-1.5.1.js" type="text/javascript"></script>
      <link rel="stylesheet" type="text/css" href="index.css">

      <style type="text/css">

         p
         {
            text-align: center;
         }

         #boxInicioReg
         {
            padding: 10px;
            border: 10px solid #F1F1F5;
            -moz-border-radius: 7px;
            -webkit-border-radius: 7px;
            position: relative;
            top: 100px;
            margin: 0 auto;
            background: #FFFFFF;
            height: 160px;
            width: 470px;
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

   </head>
   <body>
      <div id="header"></div>
      <div id="contenedor" style="min-height: 450px">
         <div id="columna-1000" style="min-height: 450px">
            <p class="importante">¡El usuario ha sido registrado correctamente!</p>
            <p class="importante">Inicia sesión ahora para comenzar a disfrutar de nuestros servicios.</p>



            <div id="boxInicioReg">
               <form name="form1" action="inicio.php" id="form1" method="post">
                  <div class="col-470"> Inicio de sesión</div>
                  <div class="col-470"> &nbsp; </div>
                  <div class="col-100"> Usuario</div>
                  <div class="col-370"> <input name="user" type="text" id="user" class="campoInsertar"></div>
                  <div class="col-100"> Contraseña</div>
                  <div class="col-370"><input name="pass" type="password" id="pass" class="campoInsertar"></div>
                  <div class="col-100-50"> &nbsp; </div>
                  <div class="col-370-50"><input type="submit" class="botón" id="botónInicio" value="Iniciar sesión"></div>
               </form>

            </div>

         </div>

      </div>
      <div id="footer">
         <div></div>
      </div>
   </body>
</html>

