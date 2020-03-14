
<?php
$s_id = filter_input(INPUT_POST,'Ship_Id');
$p_id= filter_input(INPUT_POST,'Port_Id');
$s_name= filter_input(INPUT_POST,'Ship_Name');
$s_own= filter_input(INPUT_POST,'Ship_Owner');
$s_type= filter_input(INPUT_POST,'Ship_Type');
if( !empty($s_id))
{
	$conn=mysqli_connect("localhost","vishal","Rock9097!","PORT");
	if(!$conn)
		die("connection Failed: ".mysqli_connect_error());
	else
	{
		$sql="INSERT INTO Ship_Info(Ship_Id,Port_Id,Ship_Name,Ship_Owner,Ship_Type)
			values ('$s_id','$p_id','$s_name','$s_own','$s_type');";
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
