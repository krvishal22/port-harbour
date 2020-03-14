<?php
    session_start();
  ?>
<!DOCTYPE html>
<html>
<head>
  <title>USER</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
	<style> 
 
body{
  background-image:url("img4.jpg") ;
  background-size: cover;
}


.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: rgb(20, 20, 58);
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}


</style>


</head>
<body>
    
    <div class="navbar">
        <a href="Usr_Index.php">Home</a>
        <a href="#"><?php echo $_SESSION['id']; ?></a>
        <div class="dropdown">
          <button class="dropbtn"> 
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="Ret_Profile.php">Profile</a>
            <a href="C_Pass.php">Change Password</a>
            <a href="login.html">Logout</a>
          </div>
        </div> 
      </div>
    <h1 style="text-align:center;background-color:rgb(98, 102, 102);"> CLICK ON THE OPTIONS GIVEN BELOW </h1>
  
    <br><br>
    <li><h2><I>For Displaying Port_Info  <a href="Ret_Port.php"><button> CLICK </button></a></h2></I></li>
    <li><h2><I>For Displaying Ship_Info  <a href="Ret_Ship.php"><button> CLICK </button></a></h2></I></li>

</body>
</html>
