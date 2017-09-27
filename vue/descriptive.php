<?php
// include('header.php');
?>
<?php
// $vartest= $_POST["test"];
?>
<?php
// include('bdd.php');

// $reponse = $bdd->prepare('SELECT * FROM image i INNER JOIN articles a ON a.id_img = i.id and a.id = ?');
// $reponse->execute(array($vartest));
foreach ($variable as $donnees) {
?>
<section>
 <div class="container">
   <div class="row">
    <article class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
      <img class="img img-thumbnail" src="../img/<?php echo $donnees["nom_img"]; ?>">
    <form class="" action="../controle/index.php" method="post">
      <input type="submit" name="" value="Retour" class="btn btn-custom">
    </form>
   </article>
   <article class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
      <h2><?php echo $donnees["nom"]?></h2>
      <p><?php echo $donnees["grosse_description"]?></p>
    </article>
  </div>
</div>
</section>
<?php
}
?>

<?php
// include('footer.php');
?>
  </body>
</html>
