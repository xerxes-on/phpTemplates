<?php
// header
    include 'header.php';

    if(isset($_GET['page'])){
       include $_GET["page"] . ".php";
    }
    else{
       include 'home.php';
    } 

// footer
    include 'footer.php';
?>

