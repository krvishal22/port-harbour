<?php
$conn = mysqli_connect("localhost", "vishal", "Rock9097!", "PORT");
if ($conn-> connect_error) 
{
  die("Connection failed:".$conn-> connect_error);
}
$inputname=$_POST['emp_id'];
$sql="DELETE  FROM Employee_Info WHERE Emp_Id='$inputname'";
if ($result = $conn-> query($sql)) 
    echo "Record successfully deleted";
else 
  echo "Enter valid ID";

$conn-> close();


     ?>
   </table>
 </div>
</body>
</html>