<?php

   session_start();
   include("conectarse.php");
   
   $mensaje = $_POST['mensaje'];
   $alias = $_SESSION["user"];
   $ip = $_SERVER['REMOTE_ADDR'];  
   if ($alias != "" and $mensaje != "") {
      Conectarse();
      mysql_query("INSERT INTO chatear(alias,mensaje,ip) VALUES('$alias','$mensaje','$ip')");
      $conteo = mysql_query("SELECT COUNT(*) FROM chatear GROUP BY id");
      $primero = mysql_query("SELECT MIN(id) FROM chatear");
      $repri = mysql_result($primero, 0);
      $registros = mysql_num_rows($conteo);
      if ($registros > 15) {
         mysql_query("DELETE FROM chatear WHERE id=$repri");
      }
   }

  /* echo <<<EOT
<script type='text/javascript'>
history.back(-1);
</script>
EOT;*/  //SIRVE PERO CARGA LENTO LA PÁGINA
   if($_SESSION["autentificado"] == 'SU')
   {
      header("Location: chatProfe.php");
   }

   else if($_SESSION["autentificado"] == 1)
   {
      header("Location: chat.php");
   }

   else if(!$_SESSION["autenficidado"])
   {
      header("Location: errorVerif.php");
   }

?> 
