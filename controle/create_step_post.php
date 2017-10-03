<?php
session_start();
// take name, text and date from create_step.php
$name_step=$_POST['name_step'];
$text_step=$_POST['text_step'];

// $idp = id_project from create_step.php
$idp= $_POST['idp'];
include_once '../modele/data.php';

// request for create_step
create_step($name_step, $text_step,$idp);
include'index.php';
?>
