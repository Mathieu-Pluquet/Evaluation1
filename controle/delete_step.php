<?php
include_once '../modele/data.php';
include('header.php');
delete_task($_POST['delete']);
delete_step2($_POST['delete']);
$variable = get_user_id();
include '../vue/index.php';
include('footer.php');
