<?php
include'../modele/data.php';
include 'header.php';
$variable = get_img_articles_id($_POST['test']);
include '../vue/descriptive.php';
include 'footer.php';
