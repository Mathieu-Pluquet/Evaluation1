<?php
session_start();
ob_start();
include('../modele/data.php');
$pseudo=strtolower($_POST['pseudo']);
$pass=$_POST['password'];
$password=sha1($pass);
$donnees=compare_wordpass($password,$pseudo);
if ($password ==$donnees['password'] and $pseudo==$donnees['pseudo']){
  $_SESSION['pseudo']=$pseudo;
  $_SESSION['id']=$donnees['id'];
  include'index.php';
}
else{
 $_SESSION['erreur']["connexion"]="erreur";
 include'connection.php';
};
ob_end_flush();
