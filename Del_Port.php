<?php
$conn = mysqli_connect("localhost", "vishal", "Rock9097!", "PORT");
if ($conn-> connect_error) 
{
  die("Connection failed:".$conn-> connect_error);
}
$inputname=$_POST['port_id'];
$sql="DELETE  FROM Port_Info WHERE Port_Id='$inputname'";
$result = $conn-> query($sql);
if ($result-> num_rows > 0) 
    echo "Record successfully deleted";
else 
  echo "Enter valid ID";

$conn-> close();


     ?>
   </table>
 </div>
</body>
</html>