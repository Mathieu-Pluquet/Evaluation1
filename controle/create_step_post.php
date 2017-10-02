<?php
session_start();
$name_step=$_POST['name_step'];
$text_step=$_POST['text_step'];
$idp= $_POST['idp'];
include_once '../modele/data.php';
create_step($name_step, $text_step,$idp);
include'index.php';
?>
