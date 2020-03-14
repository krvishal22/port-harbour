<?php
$name = filter_input(INPUT_POST,'Name');
//$password= filter_input(INPUT_POST,'Pass');
$age= filter_input(INPUT_POST,'Age');
$phn= filter_input(INPUT_POST,'Phone');
$city= filter_input(INPUT_POST,'City');

$conn=mysqli_connect("localhost","vishal","Rock9097!","PORT");
if(!$conn)
	die("connection Failed: ".mysqli_connect_error());
else
{
	$sql="INSERT INTO User(Name,Age,Phone,City)
	      values ('$name','$age','$phn','$city');";
	if($conn->query($sql))
	{
		echo "Successfully Created <br> Go Back To Login Page";
		//header("location:start.html");
		$sql1 = "SELECT *from password WHERE name LIKE '$name'";
		$result1 = $conn->query($sql1);
		if ($result1->num_rows > 0) {
		// output data of each row
		while($row1 = $result1->fetch_assoc()) {
			$p = $row1["name"];
		}
		} 
		header("location:show.php?id=$p");
	}  
	else
		echo "Error: ".$sql."<br>".$conn->error;
	$conn->close(); 
}

?>