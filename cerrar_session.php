<?php
session_start();

if(!isset($_SESSION['username'])) {
    echo "ACCESO DENEGADO";
  }
  
  session_destroy();
  header("Location:inicio.php");
?>