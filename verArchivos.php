<?php

function verArchivos() {

   include('conectarse.php');
   Conectarse();
   $directorio = opendir("archivos/");

   while ($archivo = readdir($directorio)) {
      $nombreArch = utf8_encode(ucwords($archivo));
      $nombreArch = str_replace("..", "Atras", $nombreArch);

   if ($nombreArch != "Atras" AND $nombreArch != ".") {

      $consultaArchivos = mysql_query("SELECT idArchivo, usuarioArchivo FROM archivos WHERE nombreArchivo = '$nombreArch'");

      while($arregloArchivos = mysql_fetch_array($consultaArchivos))
         {
            $usuarioArchivo = $arregloArchivos["usuarioArchivo"];
            $idArchivo = $arregloArchivos["idArchivo"];
         }

      echo "<div class='contArchivo'>
               <div class='linkArchivo'>
               
                  <a href='archivos/".utf8_encode($archivo)."'>
                     <img class='carpeta' src='carpeta.png' alt='$nombreArch'>
                  </a>
               <div class='infoArchivo'>
                  <form action='borrarArchivo.php' method='post'>
                     <p><span class='info'>Nombre del archivo:   </span><span>".utf8_encode($archivo)."</span></p>
                     <p><span class='info'>Subido por:    </span><span>".$usuarioArchivo."</span>";

      if($_SESSION["autentificado"] == "SU" AND $_SESSION["user"] != $usuarioArchivo)
      {
      echo          "<span><input type='submit' class='botónBorrar' style='background: #F06' value='Borrar'>";
      }

      if($_SESSION["user"] == $usuarioArchivo)
      {
      echo          "<span><input type='submit' class='botónBorrar' value='Borrar'>";
      }

      

      echo          "<input type='hidden' name='idArchivo' value='$idArchivo'>
                     <input type='hidden' name='archivo' value='".utf8_encode($archivo)."'></span></p>
                  </form>
         
               </div>
               </div>
            </div>";
                    
                  }
   }
   closedir($directorio);
}

?>