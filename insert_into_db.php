<?php

date_default_timezone_set("Europe/London");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

    $conn = mysqli_init(); 
	mysqli_ssl_set($conn,NULL,NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL); 
	mysqli_real_connect($conn, "digitalnotes-server.mysql.database.azure.com", "abvnnoaoog", "005D4TF81D36FI4I$", "digitalnotes-database", 3306, MYSQLI_CLIENT_SSL);


$id = $_REQUEST['id'];
$note = htmlentities($_REQUEST['note_input']);
$tags = htmlentities($_REQUEST['tag_input']);
$title = htmlentities($_REQUEST['title_input']);

//check if the user is adding a new note or modifying an existing note)

//user is updating a note
if ($id != ""){
    $sql = "UPDATE note_table SET
            title='$title',
            note='$note',
            tags='$tags'
            WHERE id='$id'";
} else {
//user is creating a new note
    $date = date('d/m/Y H:i:s');
    $sql = "INSERT INTO note_table (title, note, tags, `date`) VALUES ('$title', '$note', '$tags', '$date')";
}

if (mysqli_query($conn, $sql)) {
  $last_id = mysqli_insert_id($conn);

  //if user made a change to an existing id, then redirect back to that id
  if ($id != ""){
    header("Location: index.php?id=$id");
  //otherwise the user added a new note so we redirect back to that (get latest id)
  } else {
    header("Location: index.php?id=$last_id");
  }
  die();
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
