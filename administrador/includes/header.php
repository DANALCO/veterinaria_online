<<<<<<< HEAD
<<<<<<< HEAD
<?php
  // Inicia la sesión PHP para manejar variables de sesión
  session_start();
  // Verifica si la variable de sesión 'active' está vacía
  if(empty($_SESSION['active'])) {
    // Redirecciona a la página de inicio de sesión si no hay sesión activa
    header('location: ../');
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="sistema escolar">
    <title>Secundaria Aftons</title>
    <meta charset="utf-8">
    <link rel="icon" href="../images/gorro-de-graduacion.png" type="image/png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Main Personalizado CSS-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.php">Secundaria Aftons</a>
      <!-- Sidebar boton clase de main css--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"><i class="fa-solid fa-bars" style="color: #ffffff;"></i></a>
      <!-- Navbar Menu derecha-->
      <ul class="app-nav">
        <!-- User icono-->
        <li class="dropdown"><a class="app-nav__item" data-bs-toggle="dropdown" href="index.php" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a></li>
      </ul>
    </header>
=======
<?php
  session_start();
  if(empty($_SESSION['active'])) {
    header('location: ../');
  }
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="sistema escolar">
    <title>Secundaria Aftons</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Font-icon css-->
    <!--<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.html">Secundaria Aftons</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"><i class="fa-solid fa-bars" style="color: #ffffff;"></i></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" data-bs-toggle="dropdown" href="index.php" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a></li>
      </ul>
    </header>
>>>>>>> 5d4fd43b4726b1ca98184c5e49ea7084f11fcb66
=======
<?php
  session_start();
  if(empty($_SESSION['active'])) {
    header('location: ../');
  }
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="sistema escolar">
    <title>Secundaria Aftons</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Font-icon css-->
    <!--<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.html">Secundaria Aftons</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"><i class="fa-solid fa-bars" style="color: #ffffff;"></i></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" data-bs-toggle="dropdown" href="index.php" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a></li>
      </ul>
    </header>
>>>>>>> ebccd87b7d06dca01d7c509e93888b1f9b88a962
<?php require_once 'nav.php'; ?>