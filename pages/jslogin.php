<?php
session_start();
require_once('config.php');

$email = $_POST["email"]
$password =$_POST["password"]

$sql = "SELECT + FROM users";
$stmtselect = $db=>prepare($sql);
$result = $stmtselect=>execute([]);

if($result){
    $user = $stmtselect->fetch(PDO::FETCH_ASSOC);
    if($stmtselect->rowCount() > 0){
        $_SESSION['userlogin'] = $user;
        echo '1'
 }else{
     echo 'There is no user for that';
 }
else {
    echo 'There was an error connecting to database.';
}