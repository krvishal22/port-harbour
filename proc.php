<!DOCTYPE html>
<html>
<head>
	<title>PORT INSERT PAGE</title>
	<style> 

 
body{
  background-image:url("img3.jpg") ;
  background-size: cover;
}



</style>


</head>


<?php
$servername = "localhost";
$username = "vishal";
$password = "Rock9097!";
$dbname = "PORT";
$temp=filter_input(INPUT_POST,'Ship_Id');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CALL calc_discount($temp);";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
        echo "Ship_Id: ".$row['ship_id']."  <br/>  ";
        echo "FROM: ".$row['from1']. " <br/>  ";
        
echo "TO: ".$row['to1']. " <br/>  ";
echo "real price: ".$row['real_rent_amount']. " <br/>  ";
        echo "After_Discount_Amount: ".$row['discounted_price']. " <br/>  ";
    }
}
else {
    echo "No Discount as Rent Amount is less than Rs 50000";
}

?> 
</html>