<?php
// header
    include './sections/header.php';
if(isset($_GET['about'])){
    include './sections/about.php';
}
else if(isset($_GET['service'])){
    include './sections/service.php';
}
else if(isset($_GET['menu'])){
    include './sections/menu.php';
}
else if(isset($_GET['booking'])){
    include './sections/booking.php';
}
else if(isset($_GET['team'])){
    include './sections/team.php';
}
else if(isset($_GET['testimonial'])){
    include './sections/testimonial.php';
}else if(isset($_GET['contact'])){
    include './sections/contact.php';
}
else{
    include './sections/home.php';
}
// footer
    include './sections/footer.php';
?>

