<?php
session_start();
session_destroy();
session_unset(); /*efface toute les variables pour liberer de la place*/
header("location:index.php");
?>