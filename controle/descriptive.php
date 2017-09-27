<?php
include'../modele/data.php';
include 'header.php';
$variable = get_img_articles_id($_POST['test']);
include '../vue/descriptif.php';
include 'footer.php';
