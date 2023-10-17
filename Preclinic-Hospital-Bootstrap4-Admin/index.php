<?php 
    include "layouts/header.php";

    include "layouts/sidebar.php";

        if(isset($_GET['page'])){
            include "./pages/".$_GET['page'] . ".php";
        }else{
            include "./pages/home.php";
        }

    include "layouts/footer.php"; 