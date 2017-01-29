<?php

function muestraComentarios() {
   include("conectarse.php");
   Conectarse();

   $contador = 1;


   $consultaComentarios = mysql_query("SELECT * FROM comentarios ORDER BY idComent ASC");
   while ($arregloComentarios = mysql_fetch_array($consultaComentarios)) {

      echo "<form name='form_".$arregloComentarios["idComent"]. "'
                                 id='form_".$arregloComentarios["idComent"]." ' action='borrarComentario.php' method='post'>
            <input type='hidden' name='borrarComentID'
                                 id='borrarComentID' value='".$arregloComentarios["idComent"]."'>
            <div class='contComentario'>
               <div class='infoComentario'> 
                  <span class='número'> #".$contador." </span>";

        if($_SESSION["user"] == $arregloComentarios["userComent"]){ //si el usuario es el mismo el que se está listando su comentario, éste puede borrar su comentario
               echo "<input type='submit' class='botónBorrarComent' value='Borrar'></input>";
            }
      echo    "</div>
               <div class='infoUsuario'>
                  <span style='font-weight: bolder'>
                     ".$arregloComentarios['userComent']."
                  </span>
                  <span style='font-size: 11px'>(
                     ".$arregloComentarios['nombreReal']." )
                  </span>
               </div>
               <div class='comentario'>
                  <p>".$arregloComentarios['comentario']. "</p>
               </div>
            </div>
            </form>";

      $contador = $contador + 1;
   }
}
 //agregar un utf8_encode(); si presenta problemas con el servidor, en localhost se presentan bien sin esa función las variables nombreReal, etc..
?>
