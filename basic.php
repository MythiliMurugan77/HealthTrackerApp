<!DOCTYPE html>


<html>
<title>HEALTH TRACKER</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}
table input[type=text] {
  width: 100%;
 
 
  
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 50%;
  padding: 10px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 30%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
 a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
body {font-family: "Times New Roman", Georgia, Serif;}
h1, h2, h3, h4, h5, h6 ,form{
  font-family: "Playfair Display";
  letter-spacing: 5px;
}
#bg {
	background-color: red:
}
div.ex{
	font-size:14px;
 font-family: "Playfair Display";
  letter-spacing: 1px;
}

b a:link, a:visited {
  background-color: #f8C471;
  color: white;
  padding: 15px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}
 a:hover, a:active {
  background-color: #85929E;
}


em.table, td, th {
  border: 1px solid black;}
i table {
  border-collapse: collapse;
}

i table, td, th {
  border: 1px solid black;
}
</style>
<script>
	function validates()
{
	
	var uname=document.getElementById("username").value;
	var pass=document.getElementById("password").value;
	
	if(uname=="health" && pass=="health")
	{
			if (window.confirm("Authenication success!!")) {
				window.location.href = "http://localhost/health/basic.php#dietitian_menu"
		}
	}
	else
	{
		if (window.confirm("Authenication failed !!")) {
			window.location.href = "http://localhost/health/basic.php#login"
		}
	}
}
function add(food)
{
	alert(food);
//	mealplan
	alert("added to your meal");
}
</script>


<body>


<!-- Navbar (sit on top) -->
<div class="w3-top w3-black" id="bg">
  <div class="w3-bar w3-black w3-padding w3-card" style="letter-spacing:4px;font-size:25px">
 <i>   <a href="#home" class="w3-bar-item w3-button">DIETITIAN BLOG</a></i>
    <!-- Right-sided navbar links. Hide them on small screens -->
    <div class="w3-right w3-hide-small" >
      <a href="#login" class="w3-bar-item w3-button">Login</a>
	   <a href="new.php" class="w3-bar-item w3-button">Home</a>
    </div>
  </div>
</div>
<!-- Header -->

<!-- Page content -->

   <hr>
   <br><br><br>
   <div><center>
	<h3><i>"Looking good and feeling good go hand in hand. If you have a healthy lifestyle, your diet and nutrition are set,
	and you're working out, you're going to feel good." 
	 <img src="eatright.jpg" alt="Menu" style="width:50% ;height:80%" >
	<h3></i></center>
</div>
   <div class="w3-row w3-padding-64" id="login">
   <i><b><h1 style="color:tomato">&nbsp; LOGIN DETAILS</h1></i></b>
     <div class="w3-col l6 w3-padding-large">
      <img src="nutritionist.jpg" alt="Menu" style="width:100%;height:100%" >
    </div>
    <div class="w3-col l6 w3-padding-large">
   <form >
  <div class="container">
    <h1>LOGIN</h1>
 
    <hr>

    <label ><b>Username</b></label><BR>
    <input type="text" placeholder="Enter name" name="text"id="username" required><BR>

    <label><b>Password</b></label><BR>
    <input type="password" placeholder="Enter Password" id="password" name="psw" required><BR>
		


    <button type="submit" class="registerbtn" onclick="validates()">SUBMIT</button>
  </div>
  
  <div class="container signin">
    <p>Dont have an account? <a href="#">Sign in</a>.</p>
  </div>
  </div>
  </div>
</form>
<hr>
	 <div class="w3-row w3-padding-64" id="dietitian_menu">
	 <i><b><h1 style="color:tomato">&nbsp; DIETITIAN MENU</h1></i></b>
	 <div class="w3-content" style="max-width:1100px">
	 <div class="w3-col l6 w3-padding-large">
      <img src="cat.jpg" alt="Menu" style="width:100%;height:100%" >
    </div>
    <div class="w3-col m6 w3-padding-large" >
	<i>
	<i><b><h1>CHOOSE AN OPTION</h1></i></b>
    <b><a href="#user_list" target="_blank">View List of Users</a></b><br><br><br>
	<b><a href="#prepare" target="_blank">Prepare food chart</a></b><br><br><br>
	<b><a href="#cal" target="_blank">View Calorie Chart</a></b><br><br><br>
    </div></i>
  </div>
  </div>
   <hr>
   
	
<div class="w3-row w3-padding-64" id="user_list">
	 <i><b><h1 style="color:tomato">&nbsp; PREPARE FOOD CHART</h1></i></b>
	 
	 <div class="w3-col l6 w3-padding-large">
      <img src="dmenu.jpg" alt="Menu" style="width:100%;height:100%" >
    </div>
	    <div class="w3-col m6 w3-padding-large" >
	
<form method="post" action="select.php">
<label><b>Enter your name kindly:</b><br>
<input type="text" name="name"><br>
  <button type="submit" class="registerbtn" >SUBMIT</button>
  
</form>
<br><br>
	    <b><a href="#dietitian_menu" target="_blank">BACK</a></b><br><br><br>
</div>
</div>
<hr>
<div class="w3-row w3-padding-64" id="prepare" style="background-image: url(bg.jpg) ; width:100%;">
  <b><center> <h1 style="color:tomato;font-size:50px"   >MEAL PLANNER</h1><br></b></center>
    <i><b><h1>PREPARE FOOD CHART...</h1></i></b>
    <div class="w3-col l6 w3-padding-large">
	
	<em><table style="font-size:20px">
		<caption style="color:tomato"></caption>
		 

      <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "healthcare";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT Sno,FoodItem,Quantity,Calories FROM calorie";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
	
    while($row = $result->fetch_assoc()) {
		?>
		   <tr>

	<form method="post" action="insert.php">
			   
  <td><input type="text" name="sno" value="<?php echo $row["FoodItem"]; ?>"></td> 
 <td><input type="submit" value="ADD">
 </td>
 </form>
</tr>
<?php
   }
} 
else {
    echo "0 results";

}
?>
	 
</table></em>
    </div>

    <div class="w3-col l6 w3-padding-large">
     
	   <div id="yourmeal" >
	<h2>YOUR MEAL PLAN</h2>
	<ul style="font-size:20px">
<?php $sql1 = "SELECT meal FROM mealplanner";
$result1 = $conn->query($sql1);


if ($result1->num_rows > 0) {
    // output data of each row
	
    while($row1 = $result1->fetch_assoc()) {
		?>
		<li><?php echo $row1["meal"]; ?></li>
		<?php
   }
} 
else {
    echo "0 results";

}
$conn->close();
?>	
</div> <br><br>
	    <b><a href="#dietitian_menu" target="_blank">BACK</a></b><br><br><br>
    </div>
	
  </div>
<div class="w3-row w3-padding-64" id="cal"><i>
   <h1 style="color:tomato" >CALORIES VIEW</h1><br>
    <div class="w3-col l6 w3-padding-large">
	<table style="font-size:20px" >
		  <thead>
		  <th>SNO</th>
		  <th>FoodItem</th>
		  <th>Quantity</th>
		  <th>Calorie</th>
		  </thead>

      <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "healthcare";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT Sno,FoodItem,Quantity,Calories FROM calorie";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		?>
          
		   <tr> 
  <td><?php echo $row['Sno']; ?></td> 
<td><?php echo $row["FoodItem"]; ?></td>
 <td><?php echo $row["Quantity"]; ?></td>
 <td><?php echo $row['Calories']; ?></td>
</tr>
<?php
    }
} else {
    echo "0 results";
}
$conn->close();
?>
	 
</table></i><br><br>
	    <b><a href="#dietitian_menu" target="_blank">BACK</a></b><br><br><br>
    </div>
    
    <div class="w3-col l6 w3-padding-large">
      <img src="clean.jpg" alt="Menu" style="width:100%">
    </div>
  </div>
  

<footer class="w3-center w3-light-grey w3-padding-10">
  <p>maintained by &copy www.welldeveops.com</p>
</footer>

</body>
</html>
