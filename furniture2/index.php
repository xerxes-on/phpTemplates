<?php include './Sections/header.php' ?>

<?php
      if(isset($_GET['about'])){
         include 'Sections/about.php';
      }elseif(isset($_GET['contact'])){
         include './Sections/contact.php';
      }elseif(isset($_GET['design'])){
         include './Sections/design.php';
      }elseif(isset($_GET['shop'])){
         include './Sections/newsletter.php';
      }
      else{
         include './Sections/home.php';
      } 
      ?>

<?php include "./Sections/footer.php"; ?>
