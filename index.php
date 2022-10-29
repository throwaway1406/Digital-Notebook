<?php

$host = 'note95-server.database.windows.net';
$username = 'sidewerzsl';
$password = 'G4M516SRX7M6BUEM$';
$db_name = 'note95-db';

//Establishes the connection
$con = mysqli_init(); 
mysqli_ssl_set($con,NULL,NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL); 
mysqli_real_connect($con, "note95-server.mysql.database.azure.com", "sidewerzsl", "G4M516SRX7M6BUEM$", "note95-database", 3306, MYSQLI_CLIENT_SSL);

// sql to create table
$sql = "CREATE TABLE `note_table` (
  `id` int(255) NOT NULL,
  `note` mediumtext NOT NULL,
  `tags` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;";

if (mysqli_query($con, $sql)) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . mysqli_error($con);
}

//Close the connection
mysqli_close($con);
?>
Hello....