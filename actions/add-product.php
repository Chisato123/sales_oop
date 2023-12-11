<?php
include '../classes/User.php';
$user = new User;

$user->addProducts($_POST);
