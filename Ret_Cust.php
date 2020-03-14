<html>
    <body style="background-color:grey">
    <div style="background-color:cornflowerblue"><h1 style="text-align:center">CUSTOMER DETAILS</h1>
</div>
<br>
<div style="text-align:center">
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

$sql = "SELECT C_Id,C_Name,C_Address,Phone_No FROM Customer_Info";
$result = $conn->query($sql);

echo"<table>";
echo "<tr><td>CUST_ID  </td><td>  NAME  </td><td>  ADDRESS  </td><td>  PHONE_NO </td></tr>";


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>". $row["C_Id"]. "</td><td>". $row["C_Name"]. "</td><td>". $row["C_Address"]. "</td><td>". $row["Phone_No"]. "  </td></tr>" ;
    }
    echo "</table>";
}
else {
    echo "0 results";
}

$conn->close();
?> 


</table>
</div>
</body>
</html>