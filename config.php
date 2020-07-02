<?php 

$db_user = "PQkdP84Nen";
$db_pass = "6voZpLOX97";
$db_name = "PQkdP84Nen";

$db = new PDO('mysql:host=remotemysql.com;dbname=' . $db_name . ';charset=utf8', $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);