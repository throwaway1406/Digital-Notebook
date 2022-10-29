<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="notepad.css">
</head>
<body>

<form action="/insert_into_db.php" method="post">
  
  <!-- if we're viewing or editing a note, store its id -->
  <input type="hidden" id="id" name="id" value="<?php
if (isset($_GET['id'])) {
    echo $_GET['id'];
} else {
    echo "";
}?>">

  <?php
  //this is just so we can access the note input for a given id (if an id is specified in the url)
  // Create connection
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM note_table WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) {
        $note_to_view_or_edit = $row["note"];
        $tags_to_view_or_edit = $row["tags"];
    }

    } else {
    //user is trying to access a non-existant id
    //maybe we could store another hidden form field e.g. id="id_exists" and set to true/false
    //that way insert_into_db would know whether the id is real (currently only checks if an id submitted so
    //there's a risk that the user could update an id that does not exist in the database)
    //echo "A note with that id was not found";
    $note_to_view_or_edit = "";
    $tags_to_view_or_edit = "";
    //also redirect back to just index.php so the user can't save/update to a non-existant id
    header("Location: index.php");
    }

    mysqli_close($conn);
  } else {
    //user has not specified an id (we return "")
    $note_to_view_or_edit = "";
    $tags_to_view_or_edit = "";
  }

?>

  <!--<label for="note_input">Note:</label>-->

<!-- Notepad editor -->
<div class="container" id="notepad_editor" style="position:absolute; top: 10px; left: 500px; width: 700px; height:500px;">
    <div class="notepad">
        <div class="notepad-bar">
            <div class="notepad-icon">
            </div>
            <div class="notepad-title" id="notepad-title">Notepad</div>
                <div class="notepad-exit">
                    <div class="button-exit">&#10060;</div>
                </div>
                <div class="notepad-maximize">
                    <div class="button-maximize">
                        <div class="icon-maximize"></div>
                    </div>
                </div>
                <div class="notepad-minimize">
                    <div class="button-minimize">
                        <div class="icon-minimize"></div>
                    </div>
                </div>
        </div> <!-- notepad bar -->
        <div class="notepad-settings">
            <!--<div class="settings-text"><span class="underline">F</span>ile</div>-->
            <div class="settings-text"><a href="index.php" style="all: unset;"><span class="underline">N</span>ew</a></div>
            <div class="settings-text"><span class="underline">S</span><input type="submit" value="ave" style = "all: unset; cursor: pointer;"></div>
            <div class="settings-text"><span onclick="document.getElementById('note_explorer_window').style.visibility='visible';"><span class="underline">E</span>dit</span></div>
            <div class="settings-text"><span class="underline">S</span>earch</div>
            <div class="settings-text"><span class="underline">H</span>elp</div>
        </div><!-- notepad settings -->
        <div class="notepad-content">
        <textarea id="note_input" name="note_input" style="font-size: 18px; width: 100%; height: 100%; border: none; overflow: auto; outline: none; -webkit-box-shadow: none; -moz-box-shadow: none; box-shadow: none; resize: none;"><?php echo $note_to_view_or_edit; ?></textarea><br>
        </div> <!-- notepad content -->
        <label for="tag_input"><br>Tags:</label>
        <textarea id="tag_input" name="tag_input" rows="1" cols="50" style="border: none; overflow: auto; outline: none; -webkit-box-shadow: none; -moz-box-shadow: none; box-shadow: none; resize: none;"><?php echo $tags_to_view_or_edit; ?></textarea>
    </div> <!-- notepad -->
    </div> <!-- container -->
</form>
<!-- end of notepad editor -->

<textarea id="hidden_text" style="visibility: hidden;">
<?php echo $note_to_view_or_edit; ?>
</textarea>

<script>
function unsavedChanges() {
    var originalText = document.getElementById('hidden_text').value;
    var newText = document.getElementById('note_input').value;
    if (originalText != newText)
    {
    document.getElementById('notepad-title').innerHTML = 'Notepad - Unsaved Changes';
    }
    else
    {
    document.getElementById('notepad-title').innerHTML = 'Notepad';
    }
}
setInterval(unsavedChanges, 1000); 
</script>

<script>
var mousePosition;
var offset = [0,0];
var isDown = false;

var div = document.getElementById("notepad_editor");

div.addEventListener('mousedown', function(e) {
    isDown = true;
    offset = [
        div.offsetLeft - e.clientX,
        div.offsetTop - e.clientY
    ];
}, true);

document.addEventListener('mouseup', function() {
    isDown = false;
}, true);

document.addEventListener('mousemove', function(event) {
    event.preventDefault();
    if (isDown) {
        mousePosition = {

            x : event.clientX,
            y : event.clientY

        };
        div.style.left = (mousePosition.x + offset[0]) + 'px';
        div.style.top  = (mousePosition.y + offset[1]) + 'px';
    }
}, true);
</script>

<!-- note explorer -->
<div class="container" id="note_explorer_window" style="position:absolute; top: 70px; left: 200px; width: 700px; height:500px; visibility: hidden;">
			<div class="notepad">
				<div class="notepad-bar">
					<div class="notepad-icon">
					</div>
					<div class="notepad-title">Explorer</div>
                    <span onclick="document.getElementById('note_explorer_window').style.visibility='hidden';"><div class="notepad-exit">
							<div class="button-exit">&#10060;</div>
						</div></span>
						<div class="notepad-maximize">
							<div class="button-maximize">
								<div class="icon-maximize"></div>
							</div>
						</div>
						<div class="notepad-minimize">
							<div class="button-minimize">
								<div class="icon-minimize"></div>
							</div>
						</div>
				</div> <!-- window bar -->
				<!--<div class="notepad-settings">
				 	<div class="settings-text"><span class="underline">F</span>ile</div>
				 	<div class="settings-text"><span class="underline">E</span>dit</div>
				 	<div class="settings-text"><span class="underline">S</span>earch</div>
				 	<div class="settings-text"><span class="underline">H</span>elp</div>
				</div>--><!-- window settings -->
                <form action="index.php" method="get">
                Search: <input type="text" name="filter_to" id="filter_to"> <a href="index.php?visible_explorer=true">Clear Search</a>
                </form>
				<div class="notepad-content">
                <?php
                // Create connection
                $conn = mysqli_connect($servername, $username, $password, $dbname);
                // Check connection
                if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
                }

                
                if (isset($_GET['filter_to']))
                {
                    // return those matching the criteria
                    $criteria = $_GET['filter_to'];
                    $sql = "SELECT * FROM note_table WHERE tags LIKE '%$criteria%'";
                } else {
                    //if no search paramater in url, then return all results
                    $sql = "SELECT * FROM note_table";
                }
                
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    if ($row["tags"] == "")
                    {
                        $row["tags"] = "<i>No tags</i>";
                    }
                    echo $row["note"]. "<br>Tags: " . $row["tags"] . "<br><a href='index.php?id=" . $row["id"] . "'>View/Edit Note</a>" . "<br><a href='delete_from_db.php?id=" . $row["id"] . "'>Delete Note</a><br><br>";
                }
                } else {
                echo "0 notes";
                }

                mysqli_close($conn);
                ?>
				</div> <!-- window content -->
			</div> <!-- window -->
		</div> <!-- container -->
<!-- end of note explorer -->

<!-- determine whether note explorer window should be visible based on url parameters -->
<?php
if (isset($_GET['visible_explorer'])) {
    if($_GET['visible_explorer'] == "true")
    {
        echo "<script>document.getElementById('note_explorer_window').style.visibility='visible';</script>";
       
    }
}

if (isset($_GET['filter_to'])){
    echo "<script>document.getElementById('note_explorer_window').style.visibility='visible';</script>";
}
?>

<script>
var mousePosition2;
var offset2 = [0,0];
var isDown2 = false;

var div2 = document.getElementById("note_explorer_window");

div2.addEventListener('mousedown', function(e) {
    isDown2 = true;
    offset2 = [
        div2.offsetLeft - e.clientX,
        div2.offsetTop - e.clientY
    ];
}, true);

document.addEventListener('mouseup', function() {
    isDown2 = false;
}, true);

document.addEventListener('mousemove', function(event) {
    event.preventDefault();
    if (isDown2) {
        mousePosition2 = {

            x : event.clientX,
            y : event.clientY

        };
        div2.style.left = (mousePosition2.x + offset2[0]) + 'px';
        div2.style.top  = (mousePosition2.y + offset2[1]) + 'px';
    }
}, true);
</script>
</body>
</html>