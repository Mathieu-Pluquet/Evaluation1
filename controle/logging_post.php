<?php
// take pseudo,password, name .. from logging.php
 $pseudo=strtolower($_POST['pseudo']);
 $pass=$_POST['password'];
 $password1=$_POST['password1'];
 $name=$_POST['name'];
 $surname=$_POST['surname'];
 $age=$_POST['age'];
 $mail=$_POST['mail'];

 // crypting password
 $password=sha1($pass);
 $password2=sha1($password1);
 include('../modele/data.php');

 // compare connection
 $donnees=compare_pseudo($pseudo);


if (isset($_POST['mail']))
{
    // security
    $_POST['mail'] = htmlspecialchars($_POST['mail']);


   if ($pseudo==$donnees['pseudo'] or !preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['mail']))
    {
      // connection pseudo
      if ($pseudo==$donnees['pseudo'])
      {
        $_SESSION['erreur']["pseudo"]="erreur";
      }
      // connection password
     if ($password!==$password1)
      {
        $_SESSION['erreur']["password"]="erreur";
      }
      // regex for mail
     if (!preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['mail']))
      {
      $_SESSION['erreur']["email"]="erreur";
      }

        include('logging.php');
    }
    else {
      // logging
     send_register($pseudo, $password, $mail, $name, $surname, $age);
     include('connection.php');
    }
  }

   ?>
