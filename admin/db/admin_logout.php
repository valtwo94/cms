<?php session_start(); ?>
<?php

$_SESSION['user_name'] = null;
$_SESSION['user_email'] = null;
$_SESSION['user_password'] = null;
$_SESSION['user_role'] = null;

header("Location: /cms/index.php");
