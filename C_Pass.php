<html>
<head>
  <title>CHANGE PASSWORD</title>
  <style>
 
body{
  background-image:url("img12.jpg") ;
  background-size: cover;
}
</style>
</head>
<?php
session_start();
$u = $_SESSION["id"];
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

if($_POST)
{
    $p = $_POST["p"];
    $sql="UPDATE password SET password = $p WHERE name LIKE '$u'";

	if($conn->query($sql))
	{
        header("location:Usr_Index.php");
    }
}

?>
<body>
<form action="" method="POST">
    <input type="number" name="p">
    <button type="submit">Update</button>
</form>
<body>
    </html>