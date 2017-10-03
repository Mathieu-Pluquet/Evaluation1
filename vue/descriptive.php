<?php
if(isset($_SESSION['pseudo'])){
  ?>
<form action="../controle/create_step.php" method="POST">
  <input type="hidden" name="idp" value="<?php echo $_POST['test'] ?>">
  <input type="submit" value="Add a step">
</form>
<?php
}
?>

<form class="" action="../controle/index.php" method="post">
  <input type="submit" name="" value="retour">
</form>

<section>
 <div class="container">
   <div class="row d-flex justify-content-around">
<?php
foreach ($variable as $donnees) {
?>

     <div class="card" style="width: 20rem;">
     <h2 class="card-header">Titre: <?php echo $donnees["name_step"];?></h2>
     <h4 class="card-header"><?php echo $donnees["text_step"];?></h4>
     <div class="card-block" >
       <ul>
         <?php foreach ($variable_task as $donneestask){

            if ($donnees["id"] == $donneestask['id_step'] ){?>
            <li class="card-text">
              <?php echo $donneestask["name_task"];?><br>
              <?php echo $donneestask["date_task"];?>
              <?php
              if(isset($_SESSION['pseudo'])){
                ?>
                <div class="flex">
              <form class="" action="../controle/delete_task.php" method="post">
                <input type="hidden" name="deletask" value="<?php echo $donneestask["id"]?>">
                <button type="submit" name="deletetask" value=""><i class="fa fa-trash-o" aria-hidden="true"></i></button>
              </form>

              <form class="" action="../controle/end_task.php" method="post">
                <input type="hidden" name="endtask" value="<?php echo $donneestask["id"]?>">
                <button type="submit" name="end" value=""><i class="fa fa-check-square-o" aria-hidden="true"></i></button>
              </form>
                </div>
              <?php }
                    if ($donneestask['end_task'] == 'true'){?>
                <i class="fa fa-check-square-o" aria-hidden="true"></i>
              <?php }
                } ?>
            </li>
          <?php } ?>
       </ul>

     <?php
     if(isset($_SESSION['pseudo'])){
       ?>
     <form class="" action="../controle/create_task.php" method="post">
       <input type="hidden" name="test" value="<?php echo $donnees["id"]?>">
       <button type="submit" name="task" value="add task">Add task  <i class="fa fa-plus" aria-hidden="true"></i></button>
     </form>

     <form class="bdelete" action="../controle/delete_step.php" method="post">
       <input type="hidden" name="delete" value="<?php echo $donnees["id"];?>">
       <button type="submit" name="delet" value="delete step">Delete Step <i class="fa fa-trash-o" aria-hidden="true"></i></button>
     </form>
   <?php } ?>
   </div>
     </div>

<?php
}
?>
</div>
</div>
</section>
  </body>
</html>
