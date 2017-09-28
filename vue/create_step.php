<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title></title>
  </head>
  <body>
    <?php
    // include('header.php');
    $idp= $_POST['idp'];
     ?>
<?php
// include('bdd.php');
echo 'Bonjour '.$_SESSION['pseudo'];
?>
<form class="" action="../controle/index.php" method="post">
  <input type="submit" name="" value="retour">
</form>

<div class="container">
<h1 class="text-center">Add a step</h1>

<form enctype="multipart/form-data" class="" action="../controle/create_step_post.php" method="post">
<input type="text" name="name_step" value="" placeholder="nom" required="required"><br>
<input type="text" name="text_step" value="" placeholder="courte description" required="required"><br>
<input type="hidden" name="idp" value="<?php echo $_POST['idp'] ?>">
<input type="submit" name="publier" value="publier">
</form>
</div>




<?php
// include('footer.php');
 ?>
</body>
</html>
