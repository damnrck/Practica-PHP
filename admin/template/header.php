<!doctype html>
<html lang="en">
  <head>
    <title>Dashboard</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <?php $url="http://".$_SERVER['HTTP_HOST']."/practica-php"?>

      <nav class="navbar navbar-expand navbar-light bg-light">
          <div class="nav navbar-nav">
              <a class="nav-item nav-link active" href="<?php echo $url;?>/admin/dashboard.php">Backend</a>
              <a class="nav-item nav-link" href="<?php echo $url;?>/admin/dashboard.php">Home</a>
              <a class="nav-item nav-link" href="<?php echo $url;?>/admin/sections/services.php">Services</a>
              <a class="nav-item nav-link" href="<?php echo $url;?>">View site</a>
              <a class="nav-item nav-link" href="<?php echo $url;?>/admin/sections/logout.php">Logout</a>
          </div>
      </nav>
      <div class="container">
          <br>
          <div class="row">
          <div class="col-md-12">