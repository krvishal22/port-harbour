
<?php
$c_id = filter_input(INPUT_POST,'C_Id');
$s_id = filter_input(INPUT_POST,'Ship_Id');
$from= filter_input(INPUT_POST,'From_');
$to= filter_input(INPUT_POST,'To_');
$dat= filter_input(INPUT_POST,'Date_');
$r_amt= filter_input(INPUT_POST,'Rent_Amount');
if( !empty($c_id))
{
	$conn=mysqli_connect("localhost","vishal","Rock9097!","PORT");
	if(!$conn)
		die("connection Failed: ".mysqli_connect_error());
	else
	{
		$sql="INSERT INTO Cargo_Rent(C_Id,Ship_Id,From_,To_,DATE_,Rent_Amount)
			values ('$c_id','$s_id','$from','$to','$dat','$r_amt');";
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
