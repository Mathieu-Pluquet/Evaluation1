<?php
ob_start();
if(!isset($_SESSION))
   {
       session_start();
   }
include '../vue/header.php';
?>
