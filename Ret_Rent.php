<html>
    <body style="background-color:rgba(119, 33, 145, 0.452)">
    <div style="background-color:rgb(134, 252, 134)"><h1 style="text-align:center">RENT DETAILS</h1></div>
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

$sql = "SELECT C_Id,Ship_Id,From_,To_,Date_,Rent_Amount FROM Cargo_Rent";
$result = $conn->query($sql);

echo"<table>";
echo "<tr><td>CUSTOMER_ID  </td><td>  SHIP_ID  </td><td>  FROM  </td><td>  TO </td><td> DATE </td><td> AMOUNT </td></tr>";


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr><td> ". $row["C_Id"]. " </td><td> ". $row["Ship_Id"]. "   </td><td>". $row["From_"]. "  </td><td>". $row["To_"]. "  </td><td>". $row["Date_"]. "  </td><td> ". $row["Rent_Amount"]. "  </td></tr>" ;
    }
    echo"</table>";
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


    