<?php
$serverName = "localhost"; 
$database = "projekt_web_db";
$username = "sa"; 
$password = "passwordi_yt";
$conn = new PDO("sqlsrv:Server=$serverName;Database=$database", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
