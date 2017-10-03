<?php
session_start();
// take name and date from create_task.php
$name_task=$_POST['name_task'];
$date_task=$_POST['date_task'];

// $idp = id_project from create_step.php
$idp= $_POST['idp'];
include_once '../modele/data.php';

// request for create_task
create_task($name_task, $date_task,$idp);
include'index.php';

?>
