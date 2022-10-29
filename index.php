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
$sql = "INSERT INTO `note_table` (`id`, `note`, `tags`) VALUES
(15, 'Hello World!', ''),
(16, 'This is note #2', 'health')";

if (mysqli_query($con, $sql)) {
  echo "Query 1";
} else {
  echo "Error: " . mysqli_error($con);
}

$sql = "ALTER TABLE `note_table`
  ADD PRIMARY KEY (`id`)";

if (mysqli_query($con, $sql)) {
  echo "Query 2";
} else {
  echo "Error: " . mysqli_error($con);
}

$sql = "ALTER TABLE `note_table`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17";

if (mysqli_query($con, $sql)) {
  echo "Query 3";
} else {
  echo "Error: " . mysqli_error($con);
}


//Close the connection
mysqli_close($con);
?>
Hello....