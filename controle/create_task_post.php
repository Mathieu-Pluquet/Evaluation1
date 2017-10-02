<?php
session_start();
$name_task=$_POST['name_task'];
$date_task=$_POST['date_task'];
$idp= $_POST['idp'];
include_once '../modele/data.php';
create_task($name_task, $date_task,$idp);
include'index.php';

?>
