<?php

    $conn = mysqli_init(); 
	mysqli_ssl_set($conn,NULL,NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL); 
	mysqli_real_connect($conn, "note95-server.mysql.database.azure.com", "sidewerzsl", "G4M516SRX7M6BUEM$", "note95-database", 3306, MYSQLI_CLIENT_SSL);


    $sql = "ALTER TABLE `note_table` ADD `title` VARCHAR(1000000) NOT NULL AFTER `id`";
    $result = mysqli_query($conn, $sql);

    if (mysqli_query($con, $sql)) {
      echo "Query 1";
    } else {
      echo "Error: " . mysqli_error($con);
    }

    $sql = "ALTER TABLE `note_table` ADD `date` VARCHAR(1000000) NOT NULL AFTER `tags`";
    $result = mysqli_query($conn, $sql);

    if (mysqli_query($con, $sql)) {
      echo "Query 2";
    } else {
      echo "Error: " . mysqli_error($con);
    }

    mysqli_close($conn);
?>