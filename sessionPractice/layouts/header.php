<!DOCTYPE html>
<html>
<?php 
?>
<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Photosec</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!-- fonts awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>
<?php 
?>
<body>
<div class="hero_area">
    <header class="header_section">
        <nav class="navbar navbar-expand-lg custom_nav-container">
            <div class="custom_menu-btn">
            <button onclick="openNav()">
                <span class="s-1"> </span>
                <span class="s-2"> </span>
                <span class="s-3"> </span>
            </button>
            </div>
            <div id="myNav" class="overlay">
            <div class="menu_btn-style ">
                <button onclick="closeNav()">
                <span class="s-1"> </span>
                <span class="s-2"> </span>
                <span class="s-3"> </span>
                </button>
            </div>
            <div class="overlay-content">
                <a class="active" href="?page=home">
                Home
                </a>
                <a class="" href="?page=about">
                About
                </a>
                <a class="" href="?page=portfolio">
                Portfolio
                </a>
                <a class="" href="?page=team">
                Team
                </a>
            </div>
            </div>
            <a class="navbar-brand" href="?page=home">
            <span>
                 Hello      <i style="color: #94B0DA; text-decoration: none;"> <?php
                  echo $_SESSION["username"] ?></i>
                
            </span>
            </a>
            <a href="./logout.php" class="call_btn">
            Log out
            </a>
        </nav>
    </header>
</div>
