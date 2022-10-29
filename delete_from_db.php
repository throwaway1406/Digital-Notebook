<?php
require('dbconnect.php');
//if a user accesses this url themselves, they could remove ids that don't exist (error) so we
//need to check that as well

// Create connection
dbConn();
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

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