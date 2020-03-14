<html>
    <body style="background-color:grey">
    <div style="background-color:purple"><h1 style="text-align:center">EMPLYOEE DETAILS</h1></div>
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

$sql = "SELECT Emp_Id, Emp_Name,Genre,Age,Salary FROM Employee_Info";
$result = $conn->query($sql);
echo"<table>";
echo "<tr><td>EMP_ID  </td><td>  EMP_NAME  </td><td>  GENRE   </td><td> AGE </td><td> SALARY </td></tr>";
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>". $row["Emp_Id"]. " </td><td>". $row["Emp_Name"]. " </td><td>". $row["Genre"].  "</td><td> ". $row["Age"]. " </td><td> ". $row["Salary"]. " </td></tr>" ;
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