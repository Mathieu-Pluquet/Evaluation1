<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <div class="container" id="inscription">
    <h1>Se connecter :</h1>
    <form class="" action="../controle/connection_post.php" method="post">
      <input type="text" name="pseudo" value="" placeholder="pseudo">
      <input type="password" name="password" value="" placeholder="password">
      <p><?php if(isset($_SESSION['erreur']["connexion"])) {
          echo 'erreur de connexion';
        }?></p>
      <input type="submit" name="" value="connexion">
    </form>
  </div>

    <div class="container" id="inscription">
      <h1>Créer un compte :</h1>
      <form class="" action="../controle/logging.php" method="post">
        <input type="submit" name="" value="inscription">    </div>
      </form>
  </body>
</html>
