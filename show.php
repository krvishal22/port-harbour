<?php
if($_GET)
{
	$servername = "localhost";
$username = "vishal";
$password = "Rock9097!";
$dbname = "PORT";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
	$id  = $_GET["id"];
	$sql = "SELECT *from password WHERE name LIKE '$id'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "Password Generated: ". $row["password"];
		}
	}
	else {
		echo "0 results";
	}
	
	?>
	<h2><i><b><a href="login.html"><button>Login</button></b></h2></i></a>

<?php

}
?>
