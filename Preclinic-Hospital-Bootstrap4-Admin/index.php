<?php 
    include "layouts/header.php";

    include "layouts/sidebar.php";

        if(isset($_GET['page'])){
            include $_GET['page'] . ".php";
        }else{
            include "home.php";
        }

    include "layouts/footer.php"; 