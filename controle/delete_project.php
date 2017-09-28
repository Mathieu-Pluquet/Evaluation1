<?php
include_once '../modele/data.php';
include('header.php');
delete_step($_POST['test']);
delete_project($_POST['test']);
$variable = get_img_articles();
include '../vue/index.php';
include('footer.php');
