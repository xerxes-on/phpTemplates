<?php include "./sections/header.php" ;

if (isset($_GET['properties'])){
  include "./sections/properties.php";
}
else if(isset($_GET['contact'])){
  include "./sections/contact.php";
}
else if(isset($_GET['property-details'])){
  include "./sections/property-details.php";
}
else{
  include "./sections/home.php";
}

 include "./sections/footer.php";
 ?>
