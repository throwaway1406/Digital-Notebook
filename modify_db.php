<?php

$conn = mysqli_init(); 
	mysqli_ssl_set($conn,NULL,NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL); 
	mysqli_real_connect($conn, "digitalnotes-server.mysql.database.azure.com", "abvnnoaoog", "005D4TF81D36FI4I$", "digitalnotes-database", 3306, MYSQLI_CLIENT_SSL);

$sql = "CREATE TABLE `note_table` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `title` mediumtext NOT NULL,
  `note` mediumtext NOT NULL,
  `tags` mediumtext NOT NULL,
  `date` mediumtext NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1";

 $result = mysqli_query($conn, $sql);

    if (mysqli_query($conn, $sql)) {
      echo "Query 1";
    } else {
      echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>
