<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<header class="container-fluid bg-dark">
<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Мастер</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Главная</a>
        </li>
        <?php
          if(isset($_SESSION['user_id'])) {
        ?>
        <li class="nav-item">
          <a class="nav-link" href="account.php">Личный кабинет</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Выйти</a>
        </li>
        <?php
          if($_SESSION['role'] ==1) {
        ?>
        <li class="nav-item">
          <a class="nav-link" href="admin.php">Админпанель</a>
        </li>
        <?php
          } } else { 
        ?>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="modal" data-bs-target="#reg" href="reg.php">Регистрация</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="modal" data-bs-target="#auth" href="auth1.php">Войти</a>
        </li>
        <?php
          }
        ?>
      </ul>
    </div>
  </div>
</nav>
</header>