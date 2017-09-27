<?php
 // envoie le message a la bdd
 $pseudo=strtolower($_POST['pseudo']);
 $pass=$_POST['password'];
 $password1=$_POST['password1'];
 $name=$_POST['name'];
 $surname=$_POST['surname'];
 $age=$_POST['age'];
 $mail=$_POST['mail'];
 $password=sha1($pass);
 $password2=sha1($password1);
 include('../modele/data.php');
 $donnees=comparaison_pseudo($pseudo);

if (isset($_POST['mail']))
{
    $_POST['mail'] = htmlspecialchars($_POST['mail']); // On rend inoffensives les balises HTML que le visiteur a pu rentrer

   if ($pseudo==$donnees['pseudo'] or !preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['mail']))
    {
      if ($pseudo==$donnees['pseudo'])
      {
        $_SESSION['erreur']["pseudo"]="erreur";
      }

     if ($password!==$password1)
      {
        $_SESSION['erreur']["password"]="erreur";
      }

     if (!preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['mail']))
      {
      $_SESSION['erreur']["email"]="erreur";
      }

        include('logging.php');
    }
    else {
     envoie_enregistrement($pseudo, $password, $mail, $name, $surname, $age);
     include('connection.php');
    }
  }

   ?>
