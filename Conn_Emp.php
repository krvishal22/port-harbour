
<?php
$id = filter_input(INPUT_POST,'Emp_Id');
$name= filter_input(INPUT_POST,'Emp_Name');
$genre= filter_input(INPUT_POST,'Genre');
$age= filter_input(INPUT_POST,'Age');
$sal= filter_input(INPUT_POST,'Salary');
if( !empty($name) && !empty($id))
{
	$conn=mysqli_connect("localhost","vishal","Rock9097!","PORT");
	if(!$conn)
		die("connection Failed: ".mysqli_connect_error());
	else
	{
		$sql="INSERT INTO Employee_Info(Emp_Id,Emp_Name,Genre,Age,Salary)
			values ('$id','$name','$genre','$age','$sal');";
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
