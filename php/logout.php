<?php
session_start();
session_destroy(); 
header("Location: ../usuario.php"); 
exit();
?>