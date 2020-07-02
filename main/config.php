

<?php
 $servername = "remotemysql.com";
$dbusername = "PQkdP84Nen";
$dbpassword = "6voZpLOX97";
$db = "PQkdP84Nen";

		// Create connection
		$conn = mysqli_connect($servername, $dbusername, $dbpassword,$db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>