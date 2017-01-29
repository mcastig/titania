<?php
include("conectarse.php");
Conectarse();

header('refresh:5; url=mensajes.php');
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title></title>
<script src="js/jquery-1.5.1.js" type="text/javascript"></script>
<script src="js/jquery.validate.js" type="text/javascript"></script>


<script type="text/javascript">
   $(function(){
      $("#contMensaje").css("border", "2px solid #FFFF00");
   });
</script>

<script type="text/javascript">

   $(function() {
      $(".contMensaje").hover(
      function(){
         $(this).css("border", "2px solid #c0ff33");
      },
      function(){
         ($(this).css("border", "none"))
      });
   });
</script>

<style type="text/css">

   .contMensaje
   {
      background: #FFF;
      -moz-border-radius: 10px;
      -webkit-border-radius: 10px;
      margin-bottom: 10px;
   }

   .mensaje {
      font-family: Verdana, sans-serif;
      font-size: 13px;
      color: #FF0066;
      font-weight: normal;
   }

   .usuario {
      font-family: Verdana, sans-serif;
      font-size: 14px;
      color: #1A1202;
      font-weight: bold;
   }


   span
   {
      line-height: 1.8em;
   }

</style>




<?php

$pedidoMensajes = mysql_query("SELECT * FROM chatear ORDER by id desc");
while ($arregloMensajes = mysql_fetch_array($pedidoMensajes)) {
   echo "<div class='contMensaje' id='contMensaje'><p class='usuario'>" . $arregloMensajes['alias'] . " : </p>" .
   "<span class='mensaje'>" . $arregloMensajes['mensaje'] . "</span><br></div>";
}
?>
 
