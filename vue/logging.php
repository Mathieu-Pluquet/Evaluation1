<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>

<body>
      <div class="container" id="inscription">
        <h1>Inscrivez-vous :</h1>
  <form class="" action="../controle/logging_post.php" method="post">

    <input type="text" name="pseudo" placeholder="pseudo" value=""><br>
    <p><?php if(isset($_SESSION['erreur']["pseudo"])) {
      echo 'Votre pseudo est déjà pris, veuillez en choisir un autre';
    }?></p>

    <input type="text" name="name" placeholder="name" value=""><br>
    <p></p>

    <input type="text" name="surname" placeholder="surname"value=""><br><p></p>

    <input type="text" name="age" placeholder="age"value=""><br><p></p>


    <input type="password" name="password" placeholder="password" value=""><br>
    <p></p>
    <input type="password" name="password1" placeholder="reecrire le password" value=""><br>
    <p><?php if(isset($_SESSION['erreur']["password"])) {
      echo 'Votre mot de passe n\'est pas le meme';
    }?></p>

    <input type="text" name="mail" placeholder="email" value=""><br>
    <p><?php if(isset($_SESSION['erreur']["email"])) {
      echo 'L\'adresse ' . $_POST['mail'] . ' n\'est pas valide, recommencez !';
    }?></p>

    <p><input type="submit" name="" value="S'inscrire"></p>

  </form>
</div>
</body>
</html>
