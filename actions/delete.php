<?php
include '../classes/User.php';
session_start();

$user_obj = new User;
$user_obj->Delete($_SESSION['id']);
