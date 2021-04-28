<?php
$username = "root";
$password = "";
$database = "felhasznalok";
$mysqli = new mysqli("localhost", $username, $password, $database);

$query = "SELECT * FROM uzenetek ORDER BY uploaded_on DESC";
echo "<div style='width:1000px'><b> <center>Kommentfal</center>  <br> <br></div>";

if ($result = $mysqli->query($query)) {

    while ($row = $result->fetch_assoc()) {
        $field1name = $row["id"];
        $field2name = $row["name"];
        $field3name = $row["mail"];
        $field4name = $row["komment"];
        $field5name = $row["uploaded_on"];
		echo '<br>';
		echo '<b><center> Azonosító:'.$field1name." <br>Kommentelő neve:".$field2name."  <br>E-mail cím:".$field3name." <br>Komment:".$field4name."<br>  Időpecsét:".$field5name."<br><br></center>";
        
    }

/*freeresultset*/
$result->free();
}

