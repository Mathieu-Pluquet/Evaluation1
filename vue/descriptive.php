<?php
if(isset($_SESSION['pseudo'])){
  ?>
<form action="../controle/create_step.php" method="POST">
  <input type="hidden" name="idp" value="<?php echo $_POST['test'] ?>">
  <input type="submit" value="Add a step">
</form>
<?php
echo 'Bonjour '.$_SESSION['pseudo'];
}
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
     <h2 class="card-header"><?php echo $donnees["name_step"];?></h2>
     <h3 class="card-header"><?php echo $donnees["text_step"];?></h3>
     <div class="card-block">
       <ul>
         <?php foreach ($variable_task as $donneestask){

            if ($donnees["id"] == $donneestask['id_step'] ){?>
            <li class="card-text">
              <?php
              if(isset($_SESSION['pseudo'])){
                ?>
              <form class="" action="../controle/delete_task.php" method="post">
                <input type="hidden" name="deletask" value="<?php echo $donneestask["id"]?>">
                <input type="submit" name="deletetask" value="delete task">
              </form>

              <form class="" action="../controle/end_task.php" method="post">
                <input type="hidden" name="endtask" value="<?php echo $donneestask["id"]?>">
                <input type="submit" name="end" value="">
              </form>
              <?php } ?>
                    <?php echo $donneestask["name_task"];
              if ($donneestask['end_task'] == 'true'){?>
                <i class="fa fa-check-square-o" aria-hidden="true"></i>
              <?php }
                } ?>
            </li>
          <?php } ?>
       </ul>
     </div>
     <?php
     if(isset($_SESSION['pseudo'])){
       ?>
     <form class="" action="../controle/create_task.php" method="post">
       <input type="hidden" name="test" value="<?php echo $donnees["id"]?>">
       <input type="submit" name="task" value="add task">
     </form>

     <form class="bdelete" action="../controle/delete_step.php" method="post">
       <input type="hidden" name="delete" value="<?php echo $donnees["id"];?>">
       <input type="submit" name="delet" value="delete step">
     </form>
   <?php } ?>
     </div>
  </div>
</div>
</section>

<?php
}
?>

  </body>
</html>
