<?php

function get_user_id(){
include('bdd.php');
   $reponse = $bdd->query('SELECT * FROM user u INNER JOIN project p ON p.id_user = u.id');
   return $reponse->fetchAll();
}

function get_project_id($vartest){
include('bdd.php');
  $reponse = $bdd->prepare('SELECT * FROM project p INNER JOIN step s ON s.id_project = p.id and p.id = ?');
  $reponse->execute(array($vartest));
  return $reponse->fetchAll();
}

function get_step_id($vartest){
include('bdd.php');
  $reponse = $bdd->prepare('SELECT * FROM step s INNER JOIN task t ON t.id_step = s.id');
  $reponse->execute(array($vartest));
  return $reponse->fetchAll();
}

function send_register($pseudo, $password, $mail, $name, $surname, $age){
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

function compare_wordpass($password, $pseudo){
include('bdd.php');
$req=$bdd->prepare('SELECT * FROM user WHERE password=:password and pseudo=:pseudo');
$req->execute(array(
  'password'=>$password,
  'pseudo'=>$pseudo
));
return $req->fetch();
}

function compare_pseudo($pseudo){
include('bdd.php');
$req=$bdd->prepare('SELECT * FROM user WHERE  pseudo=:pseudo');
$req->execute(array(
  'pseudo'=>$pseudo
));
return $req->fetch();
}


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

function create_task($name, $date, $idp){
include('bdd.php');
  $req =$bdd->prepare("INSERT INTO task (id_step,name_task,date_task) VALUES (:id_step,:name_task,:date_task)");
  $req->execute(array(
    'name_task'=> $name,
    'date_task'=>$date,
    'id_step'=>$idp));
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


function delete_step2($idp){
include('bdd.php');
  $req =$bdd->prepare("DELETE FROM step WHERE id= ?");
  $req->execute(array(
    $idp
    ));
}


function delete_step3($idp){
include('bdd.php');
  $req =$bdd->prepare("DELETE project, step, task FROM project LEFT JOIN  step ON step.id_project = project.id LEFT JOIN task  ON task.id_step = step.id WHERE step.id_project= 5");
  $req->execute(array(
    $idp
    ));
}

function delete_task($idp){
include('bdd.php');
  $req =$bdd->prepare("DELETE FROM task WHERE id_step= ?");
  $req->execute(array(
    $idp
    ));
}


function delete_task2($idp){
include('bdd.php');
  $req =$bdd->prepare("DELETE FROM task WHERE id= ?");
  $req->execute(array(
    $idp
    ));
}

?>
