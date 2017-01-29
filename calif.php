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
            width: 500px;
            min-height: 100px;
            margin-bottom: 50px;
            border: 1px solid #E7E7E7;

         }

         .contFila
         {
            min-height:70px;
            border-bottom: 1px solid #FF0066;
            text-align: center;

         }


         .col-100-70
         {
            background: transparent;
            color: #333333;
            width: 100px;
            min-height: 70px;
            
            float: left;
         }

         span
         {
            position: relative;
            top: 25px;
         }



      </style>

   </head>

   <?php
   session_start();
   include("verifica.php");
   include("muestraCalif.php");
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
            <div id='boxCalif'>
               <div id="blackHeader">Calificaciones</div>
               <div class="contFila">
                  <div class="col-100-70">Materia</div>
                  <div class='col-100-70'>Primero</div>
                  <div class='col-100-70'>Segundo</div>
                  <div class='col-100-70'>Tercero</div>
                  <div class='col-100-70'>Promedio</div>
               </div>
               <div class="contFila">
                  <div class="col-100-70">
                     <?php
                        echo $materia;
                     ?>
                  </div>
                  <div class="col-100-70">
                     <span>
                        <?php
                           if($primerDepto == -1)
                           {
                              echo " ";
                           }
                           else
                              echo $primerDepto;
                        ?>
                     </span>
                  </div>
                  <div class="col-100-70">
                     <span>
                        <?php
                        if ($segundoDepto == -1) {
                           echo " ";
                        }
                        else
                           echo $segundoDepto;
                        ?>
                     </span>
                  </div>
                  <div class="col-100-70">
                     <span>
                        <?php
                        if ($tercerDepto == -1) {
                           echo " ";
                        }
                        else
                           echo $tercerDepto;
                        ?>
                     </span>
                  </div>
                  <div class="col-100-70">
                     <span>
                        <?php
                           echo $promedio;
                        ?>
                     </span>
                  </div>

               </div>
               
               

            </div>
         </div>
      </div>
      <div id="footer"></div>
   </body>
</html>
