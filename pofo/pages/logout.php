<?php
include_once '../includes/header.php';
include '../includes/config.php';
?>

<!-- When logged out, redirect to login page -->
<?php   
 session_start();  
 session_destroy();  
 header("location:../pages/loginpage.php");  
 ?>  


<?php
include '../includes/footer.php';
?>