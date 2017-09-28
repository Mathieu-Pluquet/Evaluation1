<?php
    if(isset($_SESSION['pseudo'])){
      echo '<form action="../controle/create_project.php" method="POST">';
      echo '<input type="submit" value="Publier un article">';
      echo '</form>';
        echo 'Bonjour '.$_SESSION['pseudo'];
    }

?>
 <div class="container">
   <div class="row d-flex justify-content-around">
     <!-- test -->
<?php
//  $reponse = $bdd->query('SELECT * FROM image i INNER JOIN articles a ON a.id_img = i.id');
 foreach ($variable as $donnees) {
?>
       <form class="card my-4" action="../controle/descriptive.php" style="width: 20rem;" method="post">

                 <div class="card">
           <h3 class="card-header"><?php echo $donnees["name_project"];?></h3>
           <div class="card-block">
             <p class="card-text"><?php echo $donnees["text_project"];?></p>
             <input type="hidden" name="test" value="<?php echo $donnees["id"];?>">
             <input type="submit" class="btn btn-custom" value="Voir plus"></input>
           </div>
         </div>
        </form>


<?php
 }
?>
</div>
</div>

    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='https://www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X','auto');ga('send','pageview');
    </script>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
