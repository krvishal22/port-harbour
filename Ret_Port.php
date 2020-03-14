<html>
    <body style="background-color:grey">
    <div style="background-color:blue"><h1 style="text-align:center">PORT DETAILS</h1></div>
<br>
<div class=c1 style="text-align:center">
<b>
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

$sql = "SELECT Port_Id,Emp_Id, Port_Name,City,No_of_ships FROM Port_Info";
$result = $conn->query($sql);

echo"<table>";
echo "<tr><td>PORT_ID  </td><td>  EMP_ID  </td><td>  PORT_NAME  </td><td>  CITY  </td><td>  No_Of_Ships</td></tr>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
       echo "<tr><td>". $row["Port_Id"]. "</td><td> ". $row["Emp_Id"]. "</td><td> ". $row["Port_Name"]. "</td><td> ". $row["City"]. "</td><td><center> ". $row["No_of_ships"]." </center></td></tr>" ;
    }
    echo "</table>";
}
else {
    echo "0 results";
}

$conn->close();
?> 
</div>
</table>
</body>
</html>
