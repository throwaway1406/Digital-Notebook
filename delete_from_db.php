<?php
//require('dbconnect.php');
//if a user accesses this url themselves, they could remove ids that don't exist (error) so we
//need to check that as well

// Create connection
$conn = mysqli_init(); 
mysqli_ssl_set($conn,NULL,NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL); 
mysqli_real_connect($conn, "digitalnotes-server.mysql.database.azure.com", "abvnnoaoog", "005D4TF81D36FI4I$", "digitalnotes-database", 3306, MYSQLI_CLIENT_SSL);


$id = $_GET['id'];

// sql to delete a record
$sql = "DELETE FROM note_table WHERE id=$id";

if (mysqli_query($conn, $sql)) {
  header("Location: index.php?visible_explorer=true");
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);

?>
