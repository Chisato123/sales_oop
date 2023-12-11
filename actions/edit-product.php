<?php
include '../classes/User.php';
session_start();

$user = new User;
$user->EditProduct($_POST);
