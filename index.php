<?php

$host = 'note95-server.database.windows.net';
$username = 'sidewerzsl';
$password = 'G4M516SRX7M6BUEM$';
$db_name = 'note95-db';

//Establishes the connection
$con = mysqli_init(); 
mysqli_ssl_set($con,NULL,NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL); 
mysqli_real_connect($con, "note95-server.mysql.database.azure.com", "sidewerzsl", "G4M516SRX7M6BUEM$", "note95-database", 3306, MYSQLI_CLIENT_SSL);

//Close the connection
mysqli_close($con);
?>
Hello....