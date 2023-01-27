<?php

    $conn = mysqli_init(); 
	mysqli_ssl_set($conn,NULL,NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL); 
	mysqli_real_connect($conn, "digitalnotes-server.mysql.database.azure.com", "abvnnoaoog", "005D4TF81D36FI4I$", "digitalnotes-database", 3306, MYSQLI_CLIENT_SSL);


$sql = "CREATE TABLE `note_table` (
  `id` int(255) NOT NULL,
  `title` mediumtext NOT NULL,
  `note` mediumtext NOT NULL,
  `tags` mediumtext NOT NULL,
  `date` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1";


$sql2 = "INSERT INTO `note_table` (`id`, `title`, `note`, `tags`, `date`) VALUES
(17, '', 'This is note #3. It has multiple tags.', 'tag1, tag2, tag3', '2022-10-30'),
(19, '', 'This is a note created since a &#039;date&#039; column has been added to the DB!', '', '2022-10-30'),
(26, 'lorem', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'test', '30/10/2022 14:30:33')";



$sql3 = "ALTER TABLE `note_table`
  ADD PRIMARY KEY (`id`)";


$sql4 = "ALTER TABLE `note_table`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT";

    $result = mysqli_query($conn, $sql);

    if (mysqli_query($conn, $sql)) {
      echo "Query 1";
    } else {
      echo "Error: " . mysqli_error($conn);
    }

    $result = mysqli_query($conn, $sql2);

    if (mysqli_query($conn, $sql2)) {
      echo "Query 2";
    } else {
      echo "Error: " . mysqli_error($conn);
    }

    $result = mysqli_query($conn, $sql3);

    if (mysqli_query($conn, $sql3)) {
      echo "Query 3";
    } else {
      echo "Error: " . mysqli_error($conn);
    }

    $result = mysqli_query($conn, $sql4);

    if (mysqli_query($conn, $sql4)) {
      echo "Query 4";
    } else {
      echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>
