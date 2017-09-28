<?php
session_start();
$name_step=$_POST['name_step'];
$text_step=$_POST['text_step'];
$idp= $_POST['idp'];
var_dump($_POST['idp']);
include_once '../modele/data.php';
// $donnees=max_id_img();
// if (empty($_POST['nom']) AND empty($_POST['description']) AND empty($_POST['grosse_description'])){
  // header('Location: formulaire.php');
  // echo 'Veuillez remplir tous les champs';
// } else{
create_step($name_step, $text_step,$idp);

include'index.php';
    // echo 'ok';
  // }
?>
