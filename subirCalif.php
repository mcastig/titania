<?php
   include('conectarse.php');
   $link = Conectarse();

   function subirCalif(){
      $consulta = mysql_query("SELECT * FROM materia ORDER BY userMat asc");

      while ($arreglo = mysql_fetch_array($consulta)) {

         $promedio = calculaPromedio($arreglo["primero"], $arreglo["segundo"], $arreglo["tercero"]);

         echo "<div class='contFila'><form name='form_".$arreglo["userMat"]."' id=form_".$arreglo["userMat"]."' action='cambiarCalif.php' method='post'>"  ;
         echo "<input type='hidden' name='nombre' value='".$arreglo["userMat"]."' >";
         echo "<div class='col-300-70'>" .$arreglo["nombreRealMat"]. "</div>";
         echo "<div class='col-100-70'>".$arreglo["materiaMat"]."</div>";
         echo "<div class='col-100-70'><select style='margin-top: 20px' id='primero_".$arreglo["userMat"] ."' name='primero'>
                        <option value='-1'> </option>;
                        <option"; if($arreglo["primero"] == 0){ echo " selected='yes' "; }; echo ">0</option>
                        <option"; if($arreglo["primero"] == 1){ echo " selected='yes' "; }; echo ">1</option>
                        <option"; if($arreglo["primero"] == 2){ echo " selected='yes' "; }; echo ">2</option>
                        <option"; if($arreglo["primero"] == 3){ echo " selected='yes' "; }; echo ">3</option>
                        <option"; if($arreglo["primero"] == 4){ echo " selected='yes' "; }; echo ">4</option>
                        <option"; if($arreglo["primero"] == 5){ echo " selected='yes' "; }; echo ">5</option>
                        <option"; if($arreglo["primero"] == 6){ echo " selected='yes' "; }; echo ">6</option>
                        <option"; if($arreglo["primero"] == 7){ echo " selected='yes' "; }; echo ">7</option>
                        <option"; if($arreglo["primero"] == 8){ echo " selected='yes' "; }; echo ">8</option>
                        <option"; if($arreglo["primero"] == 9){ echo " selected='yes' "; }; echo ">9</option>
                        <option"; if($arreglo["primero"] == 10){ echo " selected='yes' "; }; echo ">10</option>
                     </select> </div>";
         echo "<div class='col-100-70'><select style='margin-top: 20px' id='segundo_".$arreglo["userMat"] ."' name='segundo'>
                        <option value='-1'> </option>;
                        <option"; if($arreglo["segundo"] == 0){ echo " selected='yes' "; }; echo ">0</option>
                        <option"; if($arreglo["segundo"] == 1){ echo " selected='yes' "; }; echo ">1</option>
                        <option"; if($arreglo["segundo"] == 2){ echo " selected='yes' "; }; echo ">2</option>
                        <option"; if($arreglo["segundo"] == 3){ echo " selected='yes' "; }; echo ">3</option>
                        <option"; if($arreglo["segundo"] == 4){ echo " selected='yes' "; }; echo ">4</option>
                        <option"; if($arreglo["segundo"] == 5){ echo " selected='yes' "; }; echo ">5</option>
                        <option"; if($arreglo["segundo"] == 6){ echo " selected='yes' "; }; echo ">6</option>
                        <option"; if($arreglo["segundo"] == 7){ echo " selected='yes' "; }; echo ">7</option>
                        <option"; if($arreglo["segundo"] == 8){ echo " selected='yes' "; }; echo ">8</option>
                        <option"; if($arreglo["segundo"] == 9){ echo " selected='yes' "; }; echo ">9</option>
                        <option"; if($arreglo["segundo"] == 10){ echo " selected='yes' "; }; echo ">10</option>
                     </select> </div>";
         echo "<div class='col-100-70'><select style='margin-top: 20px' id='tercero_".$arreglo["userMat"] ."' name='tercero'>
                        <option value='-1'> </option>;
                        <option"; if($arreglo["tercero"] == 0){ echo " selected='yes' "; }; echo ">0</option>
                        <option"; if($arreglo["tercero"] == 1){ echo " selected='yes' "; }; echo ">1</option>
                        <option"; if($arreglo["tercero"] == 2){ echo " selected='yes' "; }; echo ">2</option>
                        <option"; if($arreglo["tercero"] == 3){ echo " selected='yes' "; }; echo ">3</option>
                        <option"; if($arreglo["tercero"] == 4){ echo " selected='yes' "; }; echo ">4</option>
                        <option"; if($arreglo["tercero"] == 5){ echo " selected='yes' "; }; echo ">5</option>
                        <option"; if($arreglo["tercero"] == 6){ echo " selected='yes' "; }; echo ">6</option>
                        <option"; if($arreglo["tercero"] == 7){ echo " selected='yes' "; }; echo ">7</option>
                        <option"; if($arreglo["tercero"] == 8){ echo " selected='yes' "; }; echo ">8</option>
                        <option"; if($arreglo["tercero"] == 9){ echo " selected='yes' "; }; echo ">9</option>
                        <option"; if($arreglo["tercero"] == 10){ echo " selected='yes' "; }; echo ">10</option>
                     </select> </div>";
         echo "<div class='col-100-70' style='text-align: center'><p style='margin-top: 20px'>".$promedio."</p></div>";
         echo "<div class='col-100-70'><input style='margin-top: 20px' type='submit' value='Guardar' id='guardar_".$arreglo["userMat"]."' name='guardar_".$arreglo["userMat"]."'></div>" ;
         echo "</form></div>";

      }
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
