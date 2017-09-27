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
     <div class="card">
     <h3 class="card-header"><?php echo $donnees["name_step"];?></h3>
     <div class="card-block">
     <p class="card-text"><?php echo $donnees["text_step"];?></p>
     </div>
     </div>
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
