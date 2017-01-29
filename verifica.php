<?php

if($_SESSION["autentificado"] != 1)
{
   header("Location: errorVerif.php");
   exit();
}
?>
