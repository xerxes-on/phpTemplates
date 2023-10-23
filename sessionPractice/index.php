<?php
session_start();

if($_SESSION["login"]!= true){
    header("location: ./login.php");
}

// index

include "./layouts/header.php";




if(isset($_GET["page"]))
{
  include "./sections/" . $_GET["page"] . ".php";
}
else{
  include "./sections/home.php";
}


include "./layouts/footer.php";