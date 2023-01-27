<?php

    $conn = mysqli_init(); 
	mysqli_ssl_set($conn,NULL,NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL); 
	mysqli_real_connect($conn, "digitalnotes-server.mysql.database.azure.com", "abvnnoaoog", "005D4TF81D36FI4I$", "digitalnotes-database", 3306, MYSQLI_CLIENT_SSL);

$sql0 = "DROP TABLE note_table";

    $result = mysqli_query($conn, $sql0);

    if (mysqli_query($conn, $sql0)) {
      echo "Query 0";
    } else {
      echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>
