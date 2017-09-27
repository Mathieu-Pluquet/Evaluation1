<?php

function get_infos(){
include('bdd.php');
  $reponse = $bdd->query('SELECT * FROM infos');
  return $reponse->fetch();
}

function get_img_articles(){
include('bdd.php');
   $reponse = $bdd->query('SELECT * FROM user u INNER JOIN project p ON p.id_user = u.id');
   return $reponse->fetchAll();
}

function get_img_articles_id($vartest){
include('bdd.php');
  $reponse = $bdd->prepare('SELECT * FROM image i INNER JOIN articles a ON a.id_img = i.id and a.id = ?');
  $reponse->execute(array($vartest));
  return $reponse->fetchAll();
}


function envoie_enregistrement($pseudo, $password, $mail, $name, $surname, $age){
include('bdd.php');
  $req = $bdd->prepare('INSERT INTO user (pseudo, password, mail, name, surname, age) VALUES(:pseudo, :password, :mail, :name, :surname, :age)');
  $req->execute(array(
     'pseudo' => $pseudo,
     'password'=> $password,
     'mail'=> $mail,
     'name'=>$name,
     'surname'=>$surname,
     'age'=>$age
     ));
}

function comparaison_mdp($password, $pseudo){
include('bdd.php');
$req=$bdd->prepare('SELECT * FROM user WHERE password=:password and pseudo=:pseudo');
$req->execute(array(
  'password'=>$password,
  'pseudo'=>$pseudo
));
return $req->fetch();
}

function comparaison_pseudo($pseudo){
include('bdd.php');
$req=$bdd->prepare('SELECT * FROM user WHERE  pseudo=:pseudo');
$req->execute(array(
  'pseudo'=>$pseudo
));
return $req->fetch();
}

function max_id_img(){
include('bdd.php');
  $reponse=$bdd->query('SELECT MAX(id) as img_id FROM image');
  $donnees=$reponse->fetch();
  return $donnees;
}

function envoie_article($donnees, $infos){
include('bdd.php');
  $req = $bdd->prepare('INSERT INTO articles SET id_img=?, nom=?, description=?, grosse_description=? ');
  $req->execute([$donnees['img_id'],$infos['nom'],$infos['description'], $infos['grosse_description']]);
}

function envoie_img($img_nom, $img_taille, $img_type){
include('bdd.php');
  $req =$bdd->prepare("INSERT INTO image (nom_img, poids, type) VALUES (:nom_img, :poids, :type)");
  $req->execute(array(
    'nom_img'=> $img_nom,
    'poids'=>$img_taille,
    'type'=>$img_type ));
}
?>
