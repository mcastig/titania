<?php

include('conectarse.php');
$link = Conectarse();
$alumno = $_SESSION["user"];

$consulta = mysql_query("SELECT * FROM materia WHERE userMat = '$alumno'");

while ($arreglo = mysql_fetch_array($consulta)) {
   $materia = $arreglo["materiaMat"];
   $primerDepto = $arreglo["primero"];
   $segundoDepto = $arreglo["segundo"];
   $tercerDepto = $arreglo["tercero"];
   $promedio = calculaPromedio($primerDepto, $segundoDepto, $tercerDepto);
}

function calculaPromedio($X, $Y, $Z){
      $promedioCalculado = 0;
      if( $X + $Y + $Z == -3 )
      {
         $promedioCalculado = 0;
         return $promedioCalculado;
      }

      else if( $Y + $Z == -2 )
      {
         $promedioCalculado = $X;
      }

      else if( $Z == -1)
      {
         $promedioCalculado = ( ($X + $Y)/2 );
      }

      else if ( $X != -1 AND $Y != -1 AND $Z != -1)
      {
         $promedioCalculado = ( ($X + $Y + $Z)/3 );
      }

      $promedioFinal = redondearPromedio($promedioCalculado);

      return $promedioFinal;
   }

   function redondearPromedio($A)
   {
      if( $A < 5.9){  //Si el promedio es menor a 5.9 no se redondeará hacia arriba.
         $A = $A - 0.5;
         $A = round($A);
      }

      else if( $A >= 6.1 )
         $A = round($A);

      return $A;
   }

?>


