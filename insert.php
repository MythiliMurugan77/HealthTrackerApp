<html>
<body>
<h1>

<?php 
$food=$_POST["sno"];
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
   	  $sql = "INSERT INTO mealplanner (meal) VALUES ('$food')";
	   if (mysqli_query($conn,$sql)) 
		{
			$d=0;
			//echo "New record created successfully";
		}
	 else 
		{
			$d=0;
			//echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	
mysqli_close($conn);?>

            <?php header("Location: http://localhost/health/basic.php#yourmeal"); ?>
		
 

</h1>
</body>
</html>