<?php
include_once '../modele/data.php';
include('header.php');

// $_POST['deletask'] = id_step from descriptive.php 
delete_task2($_POST['deletask']);
$variable = get_user_id();
include '../vue/index.php';
include('footer.php');
