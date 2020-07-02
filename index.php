<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: welcome.php");
  exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php include 'header.php' ;?> 
</head>

<body>
<?php include 'index-body.php' ;?> 
</body>
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="assets/libs/jquery/dist/jquery.min.js"></script>
<script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/libs/owl.carousel/dist/owl.carousel.min.js"></script>
<script src="assets/js/custom.js"></script>

</html>

