<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../pages/login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="img/logo.png" sizes="16x16" href="">
    <title>Glitch Solutions</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../assets/css/pricing.css">
    <link href="assets/libs/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet" type="text/css" />
    <!-- Custom CSS -->
    <link href="assets/css/style.min.css" rel="stylesheet">

</head>

<body>
<body>
<!-- ============================================================== -->
<!-- Main wrapper -->
<!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Header part -->
        <!-- ============================================================== -->
        <header class="topbar">
            <div class="container">
                <!-- Start Header -->
                <div class="header p-t-20">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="#">
                            <img src="img/logo.png" alt="logo">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">Home</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="../pages/customer_profile.php">My DashBoard</a>
                                </li>
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="../pages/online_booking.php">Book Now</a>
                                </li>
                                
                                <li class="nav-item">
                                <a href="../pages/reset-password.php" class="btn btn-warning">Reset Your Password</a>
                                </li>
                                <li class="nav-item p-l-15">
                                <a href="../pages/logout.php" class="btn btn-danger">Sign Out of Your Account</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="row header-banner align-items-center">
                        <div class="col-lg-5">
                            <h1> Welcome <span class="text-info"><b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>!</span> to Dash Delivery!</h1>
                            <p class="m-t-40"><span class="font-bold text-dark">Looking for a hassle </span>free way to  <span class="font-bold text-dark">send packages .</span>we got you covered</p>
                            <a href="../pages/user/track.php" class="btn btn-custom-md btn-info m-t-40 m-b-40 dm-btn"> Track your Order</a>

                        </div>
                        <div class="col-lg-6 offset-lg-1 text-right">
                            <img class="img-shadow img-fluid" src="assets/images/top.png" alt="db">
                        </div>
                    </div>
                </div>
                <!-- End Header -->
            </div>
        </header>
        
   
   
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