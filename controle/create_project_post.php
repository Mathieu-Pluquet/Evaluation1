<?php
session_start();
$name_project=$_POST['name_project'];
$text_project=$_POST['text_project'];
$date_project=$_POST['date_project'];
$ids=$_SESSION['id'];
include_once '../modele/data.php';
create_project($name_project, $text_project, $date_project, $ids);
include'index.php';
?>
