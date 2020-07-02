<?php 
$servername = "remotemysql.com";
$username = "PQkdP84Nen";
$password = "6voZpLOX97";
$dbname = "PQkdP84Nen";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Database Connection failed: " . $e->getMessage();
    }
?>