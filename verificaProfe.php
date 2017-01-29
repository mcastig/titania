<?php
if($_SESSION["autentificado"] != "SU")
{
   header("Location: errorVerif.php");
   exit();
}
?>

