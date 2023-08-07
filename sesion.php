<?php 
session_start();
error_reporting(0);
$varsession = $_SESSION['usuario'];
$sessionID = $_SESSION['id'];
if ($varsession == null || $varsession == '') {
   header("Location:index.php");
   die();
}; 
 ?>