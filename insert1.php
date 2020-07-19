<html>
<body>
<h1>

<?php 
$name=$_POST["name"];
$bmi=$_POST["bmi"];
$d=$_POST["dietitian"];
$servername = "localhost"; 
 $username = "root";	
$password = "";	
$dbname = "healthcare";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn)    
    die("Connection failed: " . mysqli_connect_error());
else
           //echo " Connected sucessfully <br>" ;
   	  $sql = "INSERT INTO user_list (username,bmi,dietian) VALUES ('$name','$bmi','$d')";
	   if (mysqli_query($conn,$sql)) 
		{
			//$d=0;
			//echo "New record created successfully";
		}
	 else 
		{
			//$d=0;
			//echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	
mysqli_close($conn);?>

   <?php header("Location: http://localhost/health/new.php?#user_menu"); ?>

         
		
 </body>
 </html>
