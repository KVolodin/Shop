<!doctype html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="<?php echo URL; ?>/libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo URL; ?>/libs/js/mysql.js"></script>
    <script src="<?php echo URL; ?>/libs/js/ajax_j.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Товары</title>
    <link href="<?php echo URL; ?>/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo URL; ?>/libs/bootstrap/css/navbar.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            </div>
            <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li ><a href="<?php echo URL; ?>categories/index">Добавить категорию</a></li>
                <li ><a href="<?php echo URL; ?>record/index">Добавить данные</a></li>
                <li ><a href="<?php echo URL; ?>tasks/index">Список</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">

            </ul>

            </div><!--/.nav-collapse -->
    </div>
</div>
