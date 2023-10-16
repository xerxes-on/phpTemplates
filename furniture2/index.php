<?php include 'header.php' ?>

<?php
      if(isset($_GET['page'])){
         include $_GET["page"] . ".php";
      }
      else{
         include 'home.php';
      } 
      ?>

<?php include "footer.php"; ?>
