<html>
<head>
<style>
html { 
  background: url(dietian_userlist.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
table {
  border-collapse: collapse;
}

 table, td, th {
  border: 1px solid black;
}
</style>
</head>
<body>

<table align="center" style="letter-spacing:4px;font-size:25px" border="1">
<thead>
<th>NAME</th>
<th>BMI</th>
</thead>
   <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "healthcare";
$d=$_POST["name"];?>
<center><h1>
DIETIAN <?php echo"$d" ?>!!<br>
</h1><h2>LIST OF USERS
</h2>
<?php 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT username,bmi FROM user_list where dietian='$d'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
	 
    while($row = $result->fetch_assoc()) {
		?>
		<tr>  
<td><?php echo $row["username"]; ?></td>
 <td><?php echo $row["bmi"]; ?></td>
 
</tr>
<?php
   }
} 
else {
    echo "0 results";

}
?>
</table>
</center>
</body>
</html>