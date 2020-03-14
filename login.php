<?php
session_start();
$conn=mysqli_connect("localhost","vishal","Rock9097!","PORT");
if(!$conn)
	die("connection Failed: ".mysqli_connect_error());
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$myuser=filter_input(INPUT_POST,'nam');
  $mypass=filter_input(INPUT_POST,'pass'); 
    $sql="SELECT * from password WHERE name='$myuser' and password='$mypass'";
    $res=mysqli_query($conn,$sql);
  
    $count=mysqli_num_rows($res);
    
    if($count==1)
    {
      $_SESSION['id']=$myuser;
    	header("location:Usr_Index.php");
    }
    else{
    	echo '<script language="javascript">';
        echo 'alert("BadEntry!!!  Try Using correct credentials")';
        echo '</script>';
    }

}
?>