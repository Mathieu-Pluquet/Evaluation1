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
  $reponse = $bdd->prepare('SELECT * FROM project p INNER JOIN step s ON s.id_project = p.id and p.id = ?');
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

// function envoie_article($infos){
// include('bdd.php');
//   $req = $bdd->prepare('INSERT INTO project SET name_project=?, text_project=?, date_project=? ');
//   $req->execute([$infos['name_project'],$infos['text_project'], $infos['date_project']]);
// }

function create_project($name, $text, $date, $ids){
include('bdd.php');
  $req =$bdd->prepare("INSERT INTO project (id_user,name_project,text_project, date_project) VALUES (:id_user,:name_project,:text_project, :date_project)");
  $req->execute(array(
    'name_project'=> $name,
    'text_project'=>$text,
    'date_project'=>$date,
    'id_user'=>$ids));
}

function create_step($name, $text, $idp){
include('bdd.php');
  $req =$bdd->prepare("INSERT INTO step (id_project,name_step,text_step) VALUES (:id_project,:name_step,:text_step)");
  $req->execute(array(
    'name_step'=> $name,
    'text_step'=>$text,
    'id_project'=>$idp));
}

function delete_project($idp){
include('bdd.php');
  $req =$bdd->prepare("DELETE FROM project WHERE id= ?");
  $req->execute(array(
    $idp
    ));
}

function delete_step($idp){
include('bdd.php');
  $req =$bdd->prepare("DELETE FROM step WHERE id_project= ?");
  $req->execute(array(
    $idp
    ));
}




?>
