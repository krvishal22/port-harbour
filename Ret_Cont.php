<html>
    <body style="background-color:rgb(40, 153, 168)">
    <div style="background-color:rgb(98, 102, 102)"><h1 style="text-align:center">CONTAINER DETAILS</h1></div>
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

$sql = "SELECT Container_Id,Ship_Id,Product,Quantity,Owners,Phone_No FROM Container";
$result = $conn->query($sql);

echo"<table>";
echo "<tr><td>CONTAINER_ID  </td><td>  SHIP_ID  </td><td>  PRODUCT  </td><td>  QUANTITY </td><td> OWNER </td><td> PHONE_NO </td></tr>";


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr><td> ". $row["Container_Id"]. "</td><td>". $row["Ship_Id"]. "</td><td> ". $row["Product"]. "</td><td>". $row["Quantity"]. "</td><td>". $row["Owners"]. "</td><td>". $row["Phone_No"]. " </td></tr>" ;
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