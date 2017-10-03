<?php
include_once '../modele/data.php';
include('header.php');

// $_POST['endtask'] = id_step from descriptive.php 
send_end_task($_POST['endtask']);
$variable = get_user_id();
include '../vue/index.php';
include('footer.php');
