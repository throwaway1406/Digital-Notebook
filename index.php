<!DOCTYPE html>
<html>
<head>
<title>Note95</title>
<link rel="stylesheet" href="notepad.css">
<style>
.monitor {
  position: absolute;
  bottom: 0px;
  left: 0px;
  right: 0px;
  width: 100%;
  height: 600px;
  margin: auto;
  margin-top: 15vh;
}

.start {
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 35px;
  background: #c3c6cd;
  border-top: 3px solid #deebf3;
  display: flex;
  justify-content: space-between;
}
.start__button {
  width: 80px;
  height: 72%;
  background: #c3c6cd;
  border-top: 2px solid #deebf3;
  border-left: 2px solid #deebf3;
  border-right: 2px solid black;
  border-bottom: 2px solid black;
  margin: 3px;
  display: flex;
  align-items: center;
}
.start__button:active {
  border-top: 2px solid black;
  border-left: 2px solid black;
  border-right: 2px solid #deebf3;
  border-bottom: 2px solid #deebf3;
}
.start__button:hover {
  cursor: pointer;
}
.start__logo {
  width: 35px;
  height: 18px;
  position: relative;
}
.start__logo::after {
  content: "";
  background: url('wlogo.jpg') transparent;
  background-size: contain;
  mix-blend-mode: multiply;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  position: absolute;
}
.start__text {
  font-size: 14px;
  font-weight: bold;
}
.start__time {
  width: 80px;
  height: 72%;
  background: #c3c6cd;
  border-top: 2px solid #85888f;
  border-left: 2px solid #85888f;
  border-right: 2px solid #deebf3;
  border-bottom: 2px solid #deebf3;
  margin: 3px;
  display: flex;
  align-items: center;
}
.start__time-text {
  margin: auto;
  font-size: 12px;
}

/* Desktop icons */

.desktop-icon {
  position: absolute;
  height: 100px;
  width: 100px;
  display: flex;
  flex-direction: column;
  align-items: center;
}
.desktop-icon__icon {
  height: 50px;
}
.desktop-icon__text {
  color: white;
  font-size: 12px;
  margin-top: 5px;
  margin-bottom: 0;
}
.desktop-icon:hover {
  cursor: pointer;
}

.computer {
  top: 20px;
  left: 10px;
}
.computer__icon {
  width: 50px;
  background: url("MyComputer.ico");
  background-size: contain;
}

.recycle {
  top: 120px;
  left: 10px;
}
.recycle__icon {
  width: 50px;
  background: url("RecycleBin.ico");
  background-size: contain;
}

.recycle2 {
  top: 220px;
  left: 10px;
}
.recycle2__icon {
  width: 50px;
  background: url("notepad22.ico");
  background-size: contain;
}

/*.notepad {
  top: 120px;
  left: 10px;
}
.notepad__icon {
  width: 50px;
  background: url("notepad22.ico");
  background-size: contain;
}*/


/*buttons*/
.win98popup {
  display: flex;
  flex-flow: column nowrap;
  justify-content: space-between;
  align-items: center;
  font-family: "Microsoft Sans Serif", sans-serif;
  /*background: #c2c6ca;*/
  background: none;
  font-size: 12px;
  -webkit-font-smoothing: none;
  width: 0px;
  height: 0px;
  /*box-shadow: 0.5px 0.5px 0 0.5px black, inset 1px 1px #C2C6CA, inset -1px -1px #85898d, inset 2px 2px white*/;
}
.win98popup button {
  background: #c2c6ca;
  border: none;
  padding: 0;
  border-radius: 0;
  outline: none;
}
.win98popup .shadow {
  box-shadow: 0.5px 0.5px 0 0.5px black, inset 1px 1px white, inset -1px -1px #85898d;
}
.win98popup .bar {
  display: flex;
  flex-flow: row nowrap;
  font-weight: bold;
  justify-content: space-between;
  width: calc(100% - 11px);
  height: 13px;
  color: white;
  background: #00a;
  padding: 2px 3px 3px;
  margin: 3px 2px 1px 3px;
}
.win98popup .bar p {
  margin: 0;
}
.win98popup .bar button {
  width: 15px;
  height: 13px;
}
.win98popup .bar button:active {
  box-shadow: 0.5px 0.5px 0 0.5px white, inset 1px 1px black, inset -1px -1px #c2c6ca, inset 2px 2px #85898d;
}
.win98popup .bar button:active svg {
  transform: translateX(1px) translateY(1px);
}
.win98popup .bar button svg {
  margin: 3px 3px 3px 4px;
}
.win98popup .buttons {
  display: flex;
  flex-flow: row nowrap;
  margin: 1px 15px 14px 14px;
}
.win98popup .buttons button {
  width: 74px;
  height: 22px;
  display: grid;
}
.win98popup .buttons button:not(:last-child) {
  margin-right: 7px;
}
.win98popup .buttons button p {
  font-size: 12px;
  margin: auto;
}
.win98popup .buttons button img {
  margin: 4px 3px 3px 4px;
  display: none;
}
.win98popup .buttons button p, .win98popup .buttons button img {
  grid-column: 1;
  grid-row: 1;
}
.win98popup .buttons button:focus {
  outline: none;
  box-shadow: 0.5px 0.5px 0 0.5px black, inset 1px 1px black, inset -1px -1px black, inset 2px 2px white, inset -2px -2px #85898d;
}
.win98popup .buttons button:focus img {
  display: block;
}
.win98popup .buttons button:active {
  box-shadow: 0.5px 0.5px 0 0.5px black, inset 1px 1px black, inset -1px -1px #85898d, inset 2px 2px #85898d;
  outline: none;
}
.win98popup .buttons button:active p, .win98popup .buttons button:active img {
  transform: translateX(1px) translateY(1px);
}

</style>
</head>
<body>

   <div class="computer desktop-icon">
    <div class="computer__icon desktop-icon__icon"></div>
    <p class="computer__text desktop-icon__text">My Computer</p>
</div>

<div class="recycle desktop-icon">
    <div class="recycle__icon desktop-icon__icon"></div>
    <p class="recycle__text desktop-icon__text">Recycle Bin</p>
</div>

<div class="recycle2 desktop-icon">
    <div class="recycle2__icon desktop-icon__icon"></div>
    <p class="recycle2__text desktop-icon__text">Notepad</p>
</div>

<!-- desktop icons end -->

<!-- task bar start-->
<div class="monitor">
    <div class="start">
      <div class="start__button">
        <div class="start__logo">
        </div>
        <p class="start__text">
          Start
        </p>
      </div>
      <div class="start__time">
        <p class="start__time-text">
        </p>
      </div>
    </div>

    <script>
        /*extract url get params*/
function getSearchParameters() {
    var prmstr = window.location.search.substr(1);
    return prmstr != null && prmstr != "" ? transformToAssocArray(prmstr) : {};
}

function transformToAssocArray( prmstr ) {
    var params = {};
    var prmarr = prmstr.split("&");
    for ( var i = 0; i < prmarr.length; i++) {
        var tmparr = prmarr[i].split("=");
        params[tmparr[0]] = tmparr[1];
    }
    return params;
}
var params = getSearchParameters();

//if off1 exists in url
if(params.off1){
    off1_x = params.off1.split(',')[0];
    off1_y = params.off1.split(',')[1];
} else {
    off1_x = 0;
    off1_y = 0;
}

if(params.off2){
    off2_x = params.off2.split(',')[0];
    off2_y = params.off2.split(',')[1];
} else {
    off2_x = 0;
    off2_y = 0;
}

/*update time in taskbar*/
  function updateTime(){
  var today = new Date();
  var hours24 = today.getHours();
  var hours12;
  var minutes = today.getMinutes();
  var suffix = '';

  if (hours24 >= 12) {
    suffix = " PM";
    hours12 = hours24 % 12;
  } else {
    suffix = " AM";
    hours12 = hours24;
  }
  
  if (minutes % 10 == 0) {
    //minutes = minutes + "0";
  } else if (minutes < 10) {
    minutes = "0" + minutes;
  }

  var time = hours12 + ":" + minutes + suffix;

  var timeBox = document.querySelector(".start__time-text");

  timeBox.innerHTML = time;
}

setInterval(updateTime, 1000);
</script>

<!--task bar end-->
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
  if (isset($_GET['id']) && $_GET['id'] != "") {

    $id = $_GET['id'];

    $conn = mysqli_init(); 
	mysqli_ssl_set($conn,NULL,NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL); 
	mysqli_real_connect($conn, "note95-server.mysql.database.azure.com", "sidewerzsl", "G4M516SRX7M6BUEM$", "note95-database", 3306, MYSQLI_CLIENT_SSL);


    $sql = "SELECT * FROM note_table WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

        while($row = mysqli_fetch_assoc($result)) {
            $note_to_view_or_edit = $row["note"];
            $tags_to_view_or_edit = $row["tags"];
            $title_to_view_or_edit = $row["title"];
        }

    } else {
        //user is trying to access a non-existant id
        //maybe we could store another hidden form field e.g. id="id_exists" and set to true/false
        //that way insert_into_db would know whether the id is real (currently only checks if an id submitted so
        //there's a risk that the user could update an id that does not exist in the database)
        //echo "A note with that id was not found";
        $note_to_view_or_edit = "";
        $tags_to_view_or_edit = "";
        $title_to_view_or_edit = "";
        //also redirect back to just index.php so the user can't save/update to a non-existant id
        header("Location: index.php");
    }

    mysqli_close($conn);

  } else {
    //user has not specified an id (we return "")
    $note_to_view_or_edit = "";
    $tags_to_view_or_edit = "";
    $title_to_view_or_edit = "";
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
            <div class="settings-text"><span onclick="document.getElementById('note_explorer_window').style.visibility='visible';"><span class="underline">V</span>iew All</span></div>
            <!--<div class="settings-text"><span class="underline">S</span>earch</div>
            <div class="settings-text"><span class="underline">H</span>elp</div>-->
            <br>
        </div><!-- notepad settings -->
        <div class="notepad-content">
        <textarea id="note_input" name="note_input" style="font-size: 18px; width: 100%; height: 100%; border: none; overflow: auto; outline: none; -webkit-box-shadow: none; -moz-box-shadow: none; box-shadow: none; resize: none;"><?php echo $note_to_view_or_edit; ?></textarea><br>
        </div> <!-- notepad content --><br>
        <label for="title_input">Title:</label>
        <textarea id="title_input" name="title_input" rows="1" cols="20" style="display: inline-block; border: none; overflow: auto; outline: none; -webkit-box-shadow: none; -moz-box-shadow: none; box-shadow: none; resize: none;"><?php echo $title_to_view_or_edit; ?></textarea>
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; 
        <label for="tag_input">Tags:</label>
        <textarea id="tag_input" name="tag_input" rows="1" cols="20" style="display: inline-block; border: none; overflow: auto; outline: none; -webkit-box-shadow: none; -moz-box-shadow: none; box-shadow: none; resize: none;"><?php echo $tags_to_view_or_edit; ?></textarea>
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
        document.getElementById('notepad-title').innerHTML = 'Notepad <?php echo "- " . $title_to_view_or_edit; ?> - Unsaved Changes';
    }
    else
    {
        <?php if ($title_to_view_or_edit != "")
        {
            echo "document.getElementById('notepad-title').innerHTML = 'Notepad - " . $title_to_view_or_edit . "';";
        }
        else
        {
            echo "document.getElementById('notepad-title').innerHTML = 'Notepad';";
        }

        ?>
    }

}

setInterval(unsavedChanges, 1000); 
</script>

<script>
var mousePosition;
var offset = [off1_x,off2_x];
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
                <form action="index.php" method="get" style="display:inline;">
                Search: <input type="text" name="filter_to" id="filter_to">
                </form>

                <a id="a_test_id" href="index.php?visible_explorer=true" style="all: unset;">
                <span class="win98popup" style="display: inline;">
                    <span class="buttons" style="display: inline;">
                        <button class="shadow" style="display:inline;"><!--<img src="outline.svg" alt="" width="60" height="15">--><p><u>C</u>lear Search</p></button>
                    </span>
                </span>
                </a>
                <script>
                    if(params.id){
                        document.getElementById('a_test_id').href = document.getElementById('a_test_id').href + "&id=" + parseInt(params.id);
                    } else {
                        document.getElementById('a_test_id').href = "index.php?visible_explorer=true";
                    }
                </script>

                
				<div class="notepad-content">
                <?php
                // Create connection
                $conn = mysqli_init(); 
	            mysqli_ssl_set($conn,NULL,NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL); 
	            mysqli_real_connect($conn, "note95-server.mysql.database.azure.com", "sidewerzsl", "G4M516SRX7M6BUEM$", "note95-database", 3306, MYSQLI_CLIENT_SSL);


                if (isset($_GET['id'])) {
                    $id_url = $_GET['id'];
                } else {
                    $id_url = "";
                }

                if (isset($_GET['filter_to']))
                {
                    // return those matching the criteria
                    $criteria = $_GET['filter_to'];
                    $sql = "SELECT * FROM note_table WHERE tags LIKE '%$criteria%' ORDER BY id DESC";
                } else {
                    //if no search paramater in url, then return all results
                    $sql = "SELECT * FROM note_table ORDER BY id DESC";
                }
                
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {

                        if ($row["title"] == "")
                        {
                            $row["title"] = "Untitled";
                        }

                        if ($row["tags"] == "")
                        {
                            $tag_str = "No tags";
                        }
                        else
                        {   
                            $rowTags = $row["tags"];
                            //loop through all the tags first?
                            $pieces = explode(",", $rowTags);
                            $total_pieces = count($pieces);

                            $tag_str = "";
                            for ($x = 0; $x < $total_pieces; $x++) {

                                //we only append a "," at the end if it isn't the last tag in the list
                                for ($x = 0; $x < $total_pieces; $x++) {
                                    if ($x == ($total_pieces - 1)){
                                        $tag_str = $tag_str . "<a id href='index.php?filter_to=$pieces[$x]&id=$id_url'>$pieces[$x]</a>";
                                    } else {
                                        $tag_str = $tag_str . "<a href='index.php?filter_to=$pieces[$x]&id=$id_url'>$pieces[$x]</a>, ";
                                    }
                                }
                            }

                        }

                        //echo $row["date"] . "<br>" . $row["note"]. "<br>Tags: " . $tag_str . "<br><a href='index.php?id=" . $row["id"] . "'>View/Edit Note</a> <br><a href='delete_from_db.php?id=" . $row["id"] . "'>Delete Note</a><br><br>";
                        echo "<div style='float: right; height: 0px;'> <a href='delete_from_db.php?id=" . $row["id"] . "'><div class='notepad-exit' style='float:left; height: 35px;'><div class='button-exit' style='height: 35px; width: 35px;'><img src='Cross.ico'></div></div></a> <div class='notepad-exit' style='float:left; height: 35px;'><div class='button-exit' style='height: 35px; width: 35px; display: flex; justify-content: center;'>&nbsp; <img src='Alarm.ico'></div></div></div> <a href='index.php?id=" . $row["id"] . "&visible_explorer=true'>" . $row["title"] . "</a><div id='explorer_note_text' style='white-space: nowrap; width: 85%; overflow: hidden; text-overflow: ellipsis; border: none;'>" . $row["note"]. "</div>Tags: " . $tag_str . "<br>Created: " .  $row["date"] . "<br><br><br>";
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
var offset2 = [off2_x,off2_y];
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