<?php
if(isset($_SESSION['pseudo'])){
  ?>
<form action="../controle/create_step.php" method="POST">
  <input type="hidden" name="idp" value="<?php echo $_POST['test'] ?>">
  <input type="submit" value="Add a step">
</form>
<?php
}
// $vartest= $_POST["test"];
// include('bdd.php');

// $reponse = $bdd->prepare('SELECT * FROM image i INNER JOIN articles a ON a.id_img = i.id and a.id = ?');
// $reponse->execute(array($vartest));

// include('bdd.php');
echo 'Bonjour '.$_SESSION['pseudo'];
?>

<form class="" action="../controle/index.php" method="post">
  <input type="submit" name="" value="retour">
</form>


<?php
foreach ($variable as $donnees) {
?>
<section>
 <div class="container">
   <div class="row">
     <div class="card">
     <h3 class="card-header"><?php echo $donnees["name_step"];?></h3>
     <div class="card-block">
       <ul>
            <li class="card-text"><?php echo $donnees["text_step"];?></li>
       </ul>
     </div>
     <form class="" action="../controle/create_task.php" method="post">
       <input type="hidden" name="test" value="<?php echo $donnees["id"];?>">
       <input type="submit" name="task" value="add task">
     </form>
     
     <form class="bdelete" action="../controle/delete_project.php" method="post">
       <input type="hidden" name="test" value="<?php echo $donnees["id"];?>">
       <input type="submit" name="delete" value="delete">
     </form>

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
