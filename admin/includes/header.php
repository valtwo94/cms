<?php ob_start(); ?>
<?php session_start(); ?>
<?php include 'includes/session_validation.php'; ?>
<?php include '../db/db.php'; ?>
<?php include './functions.php'; ?>
<!DOCTYPE html>
<html lang="ko">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>관리자페이지</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- jQuery -->

    <script src="https://cdn.tiny.cloud/1/wn3do1p4n2w3n1liadfjp5oqf662fk0hvs5uxg4r79qnvm9d/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="js/jquery.js"></script>
</head>

<body>