<html>
    <body style="background-color:rgb(37, 43, 100)">
    <div style="background-color:cornflowerblue"><h1 style="text-align:center">MORE INFO</h1></div>
<br>
<?php
session_start();
$servername = "localhost";
$username = "vishal";
$password = "Rock9097!";
$dbname = "PORT";
$var=$_SESSION['id'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM Cargo_Rent where
    C_Id=(SELECT C.C_Id FROM Customer_Info C where C.C_Name LIKE '$var')";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
    echo"<table>";
    echo "<tr><td>Ship_Id  </td><td>  From  </td><td>  TO  </td><td>  Date </td><td>  Rent_Amount</td></tr>";
    

    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>". $row["Ship_Id"]. "</td><td>". $row["From_"]. "</td><td>". $row["To_"]. "</td><td>". $row["Date_"]. "</td><td>". $row["Rent_Amount"]."  </td></tr>" ;
    }
    echo "</table>";
}
else {
    echo "No Record Present";
}

$conn->close();
?> 
</div>
</table>
</body>
</html>