<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>Error en Registro</title>
      <script src="js/jquery-1.5.1.js" type="text/javascript"></script>
      <script src="js/jquery.validate.js" type="text/javascript"></script>
      <link rel="stylesheet" type="text/css" href="index.css">

      <style type="text/css">

         #boxErrorRegistro
         {
            margin: 0 auto;
            border: 10px solid #F1F1F5;
            -moz-border-radius: 7px;
            -webkit-border-radius: 7px;
            padding: 10px;
            position: relative;
            top: 20px;
            background: #FFFFFF;
            width: 570px;
            height: 540px;
            display: block;
         }

         #errorRegistro
         {
            padding: 10px;
            float: left;
            position: relative;
            border: 2px solid #FF2623;
            background: #fcdfdd;
            width: 546px;
            height: 45px;
            margin-bottom: 40px;
            font-family: helvetica;
            font-size: 12px;
            color: #333333;
         }

      </style> 


      <script type="text/javascript">
         $(function(){
            $(function(){
            $('#form2').validate(
            {
               rules:
                  {
                  nombre : "required",
                  apellidos : "required",
                  regUser : "required",
                  regPass : "required",
                  compruebaPass:
                     {
                     equalTo: "#regPass"
                  },
                  correo :
                     {
                     required: true,
                     email: true
                  },
                  carrera : "required",
                  grupo :
                     {
                        required : true,
                        maxlength: 4
                     },
                  boleta :
                     {
                     required : true,
                     digits : true,
                     maxlength: 10
                  },
                  semestre : "required",
                  materia : "required"
               },

               messages:
                  {
                  nombre : "Nombre requerido",
                  apellidos : "Apellidos requeridos",
                  regUser : "Usuario requerido",
                  regPass : "Contraseña requerida",
                  compruebaPass: "Revisa la contraseña",
                  correo :
                     {
                     required : "Correo requerido",
                     email : "Correo inválido"
                  },
                  carrera : "Elige tu carrera",
                  grupo :
                     {
                     required : "Grupo requerido",
                     maxlength: "Sólo introduce 4 dígitos"
                     },
                  boleta :
                     {
                     required : "Boleta requerida",
                     digits : "Escribe sólo números",
                     maxlength : "Sólo introduce 10 dígitos"
                  },
                  semestre : "Semestre requerido",
                  materia : "Materia requerida"
               }
            });
         });
      </script>

   </head>

   <body>

      <div id="header"></div>

      <div id="contenedor">
         <div id="columna-1000">

            <div id="boxErrorRegistro">
               <form name="form2" action="registro.php" id="form2" method="post">
                  <div class="col-470" style="width: 570px">Registro</div>
                  <div class="col-470"> &nbsp;</div>
                  <div id="errorRegistro">
                     <p>
                        <?php
                        echo $aviso;
                        ?>
                     </p>
                  </div>
                  <div class="col-200">Nombre(s)</div>
                  <div class="col-370"><input name="nombre" type="text" id="nombre" class="campoInsertar"></div>
                  <div class="col-200">Apellidos</div>
                  <div class="col-370"><input name="apellidos" type="text" id="apellidos" class="campoInsertar"></div>
                  <div class="col-200">Usuario</div>
                  <div class="col-370"><input name="regUser" type="text" id="regUser" class="campoInsertar"></div>
                  <div class="col-200">Contraseña</div>
                  <div class="col-370"><input name="regPass" type="password" id="regPass" class="campoInsertar"></div>
                  <div class="col-200">Repite tu contraseña</div>
                  <div class="col-370"><input name="compruebaPass" type="password" id="compruebaPass" class="campoInsertar"></div>
                  <div class="col-200">E-mail</div>
                  <div class="col-370"><input name="correo" type="text" id="correo" class="campoInsertar"></div>
                  <div class="col-200">Carrera</div>
                  <div class="col-370">
                     <select name="carrera" id="carrera" class="campoInsertar">
                        <option>Ingeniería en informática</option>
                        <option>Ciencias de la Informática</option>
                        <option>Ingeniería Industrial</option>
                        <option>Administración Industrial</option>
                        <option>Ingeniería en Transporte</option>
                     </select>
                  </div>
                  <div class="col-200">Grupo</div>
                  <div class="col-370"><input name="grupo" type="text" id="grupo" class="campoInsertar"></div>
                  <div class="col-200">Boleta</div>
                  <div class="col-370"><input name="boleta" type="text" id="boleta" class="campoInsertar"></div>
                  <div class="col-200">Semestre</div>
                  <div class="col-370">
                     <select name="semestre" id="semestre" class="campoInsertar">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                     </select>
                  </div>
                  <div class="col-200">Materia</div>
                  <div class="col-370">
                     <select name="materia" id="materia" class="campoInsertar">
                        <option>Análisis y Diseño de Sistemas de Información</option>
                        <option>Matemáticas Discretas</option>
                        <option>Lenguajes de Programación I</option>
                        <option>Dibujo Industrial</option>
                        <option>Aplicaciones Digitales I</option>
                        <option>Sistemas Digitales I</option>
                        <option>Sociedad y Ética Profesional</option>
                        <option>Herramientas Computacionales</option>
                        <option>Investigación Científica y Tecnológica</option>
                        <option>Ingeniería de Software</option>
                        <option>Cálculo Dif. e Int.</option>
                        <option>Lenguajes de Programación II</option>
                        <option>Fundamentos de la Física</option>
                        <option>Física Aplicada</option>
                        <option>Sistemas Digitales II</option>
                        <option>Aplicaciones Digitales II</option>
                        <option>Comunicación Profesional</option>
                        <option>Estructura y Rep. de Datos</option>
                        <option>Administración General</option>
                        <option>Álgebra Líneal</option>
                        <option>Lenguajes de Programación III</option>
                        <option>Teoría de la Computación</option>
                        <option>Arquitectura de Computadoras</option>
                        <option>Algoritmos Computacionales</option>
                        <option>Procesos Químicos Industriales</option>
                        <option>Aplicación de Procesos Químicos Industriales</option>
                        <option>Métodos Numéricos</option>
                        <option>Aplic. de adquisición de Datos</option>
                        <option>Compiladores</option>
                        <option>Sistemas Operativos</option>
                        <option>Economía</option>
                        <option>Bases de Datos</option>
                     </select>
                  </div>
                  <div class="col-200"> &nbsp;</div>
                  <div class="col-370-50"><input type="submit" class="botón" value="Regístrame"></div>
               </form>
            </div>
         </div>
      </div>
      <div id="footer"></div>

   </body>
</html>
