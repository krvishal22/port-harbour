
<?php
$c_id = filter_input(INPUT_POST,'C_Id');
$c_name= filter_input(INPUT_POST,'C_Name');
$c_add= filter_input(INPUT_POST,'C_Address');
$phn= filter_input(INPUT_POST,'Phone_No');
if( !empty($c_name) && !empty($c_id))
{
	$conn=mysqli_connect("localhost","vishal","Rock9097!","PORT");
	if(!$conn)
		die("connection Failed: ".mysqli_connect_error());
	else
	{
		$sql="INSERT INTO Customer_Info(C_Id,C_Name,C_Address,Phone_No)
			values ('$c_id','$c_name','$c_add','$phn');";
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
