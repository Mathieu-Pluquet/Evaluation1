<?php
session_start();
// take name, text and date from create_project.php
$name_project=$_POST['name_project'];
$text_project=$_POST['text_project'];
$date_project=$_POST['date_project'];

// $ids = id_step 
$ids=$_SESSION['id'];
include_once '../modele/data.php';

// request for create_project
create_project($name_project, $text_project, $date_project, $ids);
include'index.php';
?>
