<?php

$host = 'note95-server.mysql.database.azure.com';
$username = 'sidewerzsl';
$password = 'G4M516SRX7M6BUEM$';
$db_name = 'mysql';

//Establishes the connection
$conn = mysqli_init();
mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306);
if (mysqli_connect_errno($conn)) {
die('Failed to connect to MySQL: '.mysqli_connect_error());
}

//Close the connection
mysqli_close($conn);
?>
Hello....