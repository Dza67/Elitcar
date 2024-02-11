<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Elitcar">
    <base href="http://localhost/ElitCar/" target="_blank">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script defer src="js/main.js"></script>
    <title>ElitCar</title>
</head>
<body>

<?php
    session_start(); 
?>

<nav class="navbar navbar-expand-lg bg-body-light">
  <div class="container-fluid ">
    <a class="navbar-brand" target="_self" href="view/home" style="font-size: 250%; margin-top: 2px;"> Elit<span class="sub-navbar-brand">car</span> </a> 
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <?php if( !isset($_SESSION['name']) ){?>
          <li class="nav-item">
            <a class="nav-link" target="_self" href="view/login">Crée un compte</a>
          </li>
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle"  href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Connexion
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" target="_self"  href="view/particular/login_particular">Particulier</a></li>
                <li><a class="dropdown-item" target="_self"  href="view/professional/login_professional">Professionel</a></li>
              </ul>
          </li>
        <?php }else { ?>
          <li class="nav-item">
              <a class="nav-link" target="_self" href="controller/admin/logout">Déconnexions</a>
          </li>
        <?php } ?>
        <li class="nav-item">
          <a class="nav-link" href="view/professional/create_professional">Agences</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="view/read_car.php">FAQ ?</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

