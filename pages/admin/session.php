<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login'];
   //$user_level = $_SESSION['login_user_level'];
   
   $ses_sql = mysqli_query($conn,"select * from `user` where `username` = '".$user_check."' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   $login_session_password = $row['password'];
   //$login_session_email = $row['email'];
   $_SESSION['login_level']= $row['level'];
   $level="1";
   if(!isset($_SESSION['login'])){
      header("location:../adminlogin.php");
   }
   

?>