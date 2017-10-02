<?php
include_once '../modele/data.php';
include('header.php');
send_end_task($_POST['endtask']);
$variable = get_user_id();
include '../vue/index.php';
include('footer.php');
