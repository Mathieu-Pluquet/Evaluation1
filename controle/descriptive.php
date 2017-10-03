<?php
include'../modele/data.php';
include 'header.php';
// $_POST['test'] = id_project from index.php 
$variable = get_project_id($_POST['test']);
$variable_task = get_step_id($_POST['test']);
include '../vue/descriptive.php';
include 'footer.php';
