<?php
include("conectarse.php");
Conectarse();

header('refresh:5; url=conectados.php');
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title></title>
<script src="js/jquery-1.5.1.js" type="text/javascript"></script>
<script src="js/jquery.validate.js" type="text/javascript"></script>

<style type="text/css">

   .contUsuario
   {
      background: #FFF;
      -moz-border-radius: 10px;
      -webkit-border-radius: 10px;
      margin-bottom: 10px;
   }

   .usuario {
      font-family: Verdana, sans-serif;
      font-size: 11px;
      color: #FF0066;
      font-weight: bold;
      padding: 5px;
      text-align: center;
   }


   span
   {
      line-height: 1.8em;
   }

   p
   {
      line-height: 0.5em;
   }

</style>


<script type="text/javascript">
   $(function(){
      $('.contUsuario').hover(
         function(){
         $(this).css("border", "2px solid #FF0066");
       //  $("#nombreReal:last-child").css("display", "block");
      },
          function(){
         $(this).css("border", "none");
      //   $("#nombreReal").css("display", "none");
      });
   });

</script>



<?php
$pedidoConectados = mysql_query("SELECT * FROM conectados");
while ($arregloConectados = mysql_fetch_array($pedidoConectados)) {
   echo "<div class='contUsuario'><p class='usuario' style='color: #333'>" . $arregloConectados['user'] ."</p>
                  <p class='usuario' id='nombreReal' style='display:block'>" .$arregloConectados['nombreReal']."</p></div>";
}
?>

