<?php
include_once '../modele/data.php';
include('header.php');
// delete_task();
delete_step3($_POST['test']);
delete_project($_POST['test']);
$variable = get_user_id();
include '../vue/index.php';
include('footer.php');
