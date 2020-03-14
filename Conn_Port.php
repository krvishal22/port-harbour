
<?php
$p_id= filter_input(INPUT_POST,'Port_Id');
$e_id = filter_input(INPUT_POST,'Emp_Id');
$name= filter_input(INPUT_POST,'Port_Name');
$city= filter_input(INPUT_POST,'City');

if(!empty($p_id))
{
	$conn=mysqli_connect("localhost","vishal","Rock9097!","PORT");
	if(!$conn)
		die("connection Failed: ".mysqli_connect_error());
	else
	{
		$sql="INSERT INTO Port_Info(Port_Id,Emp_Id,Port_Name,City)
			values ('$p_id','$e_id','$name','$city');";
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
