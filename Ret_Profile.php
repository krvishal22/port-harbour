<?php
    session_start();
  ?>
  <html>
    <body style="background-color:grey">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
	<style> 
 
body{
  background-image:url("img13.jpeg") ;
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
  
      
    <div style="background-color:cornflowerblue"><h1 style="text-align:center">USER PROFILE</h1></div>
<br>

<?php
$servername = "localhost";
$username = "vishal";
$password = "Rock9097!";
$dbname = "PORT";
$conn = new mysqli($servername, $username, $password, $dbname);
$var=$_SESSION['id'];
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Name,Age,Phone,City FROM User where Name LIKE '$var'";
$result = $conn->query($sql);
echo"<table>";
echo "<tr><td>NAME  </td><td> AGE  </td><td>  PHONE  </td><td>  CITY </td></tr>";


if ($result->num_rows >0) 
{
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
        echo "<tr><td>". $row["Name"]. "</td><td>". $row["Age"]. "</td><td>". $row["Phone"]. "</td><td>". $row["City"]. "  </td></tr>" ;
    }
    echo "</table>";
}
else 
{
    echo $mypass;
    echo "0 results";
}

$conn->close();
?> 
</div>
</table>
</div>
</table>

<br><br><br>
<h2><I>For More Info <a href="Ret_More.php"><button> CLICK </button></a></h2></I>
    </body>
</html>