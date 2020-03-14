<html>
    <body style="background-color:grey">
    <div style="background-color:brown"><h1 style="text-align:center">SHIP DETAILS</h1></div>
<br>
<?php
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

$sql = "SELECT Ship_Id, Port_Id,Ship_Name,Ship_Owner,Ship_Type FROM Ship_Info";
$result = $conn->query($sql);

echo"<table>";
echo "<tr><td>SHIP_ID  </td><td>  PORT_ID  </td><td>  SHIP_NAME  </td><td>  SHIP_OWNER </td><td> SHIP_TYPE </td></tr>";


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr><td> ". $row["Ship_Id"]. " </td><td> ". $row["Port_Id"]. " </td><td> ". $row["Ship_Name"]. " </td><td> ". $row["Ship_Owner"]. " </td><td> ". $row["Ship_Type"]. " </td></tr>" ;
    }
    echo "</table>";
}
else {
    echo "0 results";
}

$conn->close();
?> 
</div>
</body>
</table>
</html>