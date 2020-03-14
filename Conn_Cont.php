
<?php
// $c_id = filter_input(INPUT_POST,'Container_Id');
$s_id = filter_input(INPUT_POST,'Ship_Id');
$pro= filter_input(INPUT_POST,'Product');
$quan= filter_input(INPUT_POST,'Quantity');
$own= filter_input(INPUT_POST,'Owners');
$phn= filter_input(INPUT_POST,'Phone_No');
if( !empty($s_id))
{
	$conn=mysqli_connect("localhost","vishal","Rock9097!","PORT");
	if(!$conn)
		die("connection Failed: ".mysqli_connect_error());
	else
	{
		$sql="INSERT INTO Cargo_Rent(Ship_Id,Product,Quantity,Owners,Phone_No)
			values ('$s_id','$pro','$quan','$own','$phn');";
		if($conn->query($sql))
		{
			echo "new record is inserted <br>";
		}  
		else
		{
			echo "Error: ".$sql."<br>".$conn->error;
		}   
		$conn->close(); 
	}
}
else
{
	echo "parameter is missing <br>";
	die();
}
?>
