<?php
session_start();
$name_project=$_POST['name_project'];
$text_project=$_POST['text_project'];
$date_project=$_POST['date_project'];
$ids=6;
include_once '../modele/data.php';
// $donnees=max_id_img();
// if (empty($_POST['nom']) AND empty($_POST['description']) AND empty($_POST['grosse_description'])){
  // header('Location: formulaire.php');
  // echo 'Veuillez remplir tous les champs';
// } else{
create_project($name_project, $text_project, $date_project, $ids);

include'index.php';
    // echo 'ok';
  // }
?>
