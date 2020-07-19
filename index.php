<!DOCTYPE html>
<html>
<title>HEALTH TRACKER</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
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
  background-color: #f44336;
  color: white;
  padding: 15px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

b a:hover, a:active {
  background-color: red;
}
i table {
  border-collapse: collapse;
}

i table, td, th {
  border: 1px solid black;
}
</style>
<script>
var mealplan=new Array();
var i=0;
function calculate()
{
var height=parseInt(document.getElementById("h").value);
var weight=parseInt(document.getElementById("w").value);
//alert(weight);
var bmi=parseInt(((weight)/(height*height))*10000);
var range;
if(bmi<18.5)
range="UNDER WEIGHT";
else if(bmi>=18.5 && bmi <=24.9)
range="NORMAL WEIGHT";
else if(bmi>=25.0 && bmi <=29.9)
range="OVER WEIGHT";
else if(bmi>=30.0 && bmi <=34.9)
range="CLASS I OBESITY";
else if(bmi>=35.0 && bmi <=39.9)
range="CLASS II OBESITY";
else if(bmi>=40.0)
range="CLASS III OBESITY";
document.getElementById("bmi").innerHTML="<h3>YOUR BMI:"+bmi+"</h3>";
document.getElementById("range").innerHTML="<h3>YOUR RANGE:"+range+"</h3>";
}
function validates()
{
	
	var uname=document.getElementById("username").value;
	var pass=document.getElementById("password").value;
	
	if(uname=="health" && pass=="health")
	{
			if (window.confirm("Authenication success!!")) {
				window.location.href = "http://localhost/health/new.php?#user_menu"
		}
	}
	else
	{
		if (window.confirm("Authenication failed !!")) {
			window.location.href = "http://localhost/health/new.php?#login"
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
  <div class="w3-bar w3-black w3-padding w3-card" style="letter-spacing:4px;font-size:20px">
    <a href="#home" class="w3-bar-item w3-button">EatRight</a>
    <!-- Right-sided navbar links. Hide them on small screens -->
    <div class="w3-right w3-hide-small" >
      <a href="#about" class="w3-bar-item w3-button">About</a>
	  <a href="#login" class="w3-bar-item w3-button">User</a>
	  <a href="basic.php" class="w3-bar-item w3-button">Dietitian</a>
      <a href="#cal" class="w3-bar-item w3-button">Calorie Chart</a>
	  <a href="#fitness" class="w3-bar-item w3-button">Health Blog</a>
	
    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
  <img class="w3-image" src="" alt="Hamburger Catering" width="1600" height="800">
  <div class="w3-display-bottomleft w3-padding-large w3-opacity">
   
  </div>
</header>

<!-- Page content -->
<div class="w3-content" style="max-width:1100px">

  <!-- About Section -->
  <div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-large w3-hide-small">
     <img src="d.jpg"   width="500" height="650">
    </div>

    <div class="w3-col m6 w3-padding-large">
      <h1 style="color:tomato" class="w3-center">About Us</h1><br>
      <h5 style="color:lightblue" class="w3-center">Tradition since 2018</h5>
      <p class="w3-large">
	  Good Nutrition is an important part of leading a healthy lifestyle. Since food is both important for physical and mental well being, the importance of food in life is huge. Combined with physical activity, your diet can help you to reach and maintain a healthy weight, reduce your risk of chronic diseases & life style disorders, and promote your overall health. Proper nutrition means that you get all the essential nutrients required for healthy functioning of the body through your diet....

The right foundation to good health is to choose food that are rich in nutrients and have a balanced amount of nutrients like vitamins, minerals, protein, carbohydrates and a little bit of fat as well. If you choose your foods wisely, you will be able to enjoy the experience of eating, as the right foods will help you remain healthy.
</p>
<p class="w3-large">
Are you eating a Balanced Diet..?  </p><p class="w3-large">What is your body’s daily dietary requirement...?  How to be more healthy..? What you have to do for the betterment of your healthy life..? 
</p>
<p class="w3-large"><b><i>
Discuss with your Dietitian today…!!

Wish You a Healthy Peaceful Life….!!! 
</b></i></p>
    </div>
  </div>
  </div>
   <hr>
 <div class="w3-row w3-padding-64" id="login">
 <h1 style="color:tomato">USER LOGIN</h1>
     <div class="w3-col l6 w3-padding-large">
      <img src="bmi.jpg" alt="Menu" style="width:100%">
    </div>
    <div class="w3-col l6 w3-padding-large">
	<h2><i>INPUT DETAILS</i></h2>
     <form>
	 User Name:<input type="text" placeholder="user name" id="username" ><br><br>
	  Password: <input type="password" placeholder="password" id="password"><br><br>
	  <input type="submit" value="SUBMIT" onclick="validates()">
	  </form>
	  
    </div>
	<div id="result">
	</div>
	
</div>
  <hr>
  
  <div id="user_menu" class="da">
  
</center>

  <div class="w3-row w3-padding-64" ><center><h2><i>USER MENU</i></h2>
    <div class="w3-col m6 w3-padding-large w3-hide-small">
     <img src="fruitb.jpg" width="900"  >
    </div>
	<div class="w3-col m6 w3-padding-large" >
    <b><a href="#userbmi" target="_blank">BMI CALCULATION</a></b><br><br><br>
	<b><a href="#dlist" target="_blank">VIEW DIETAINS</a></b><br><br><br>
	<b><a href="#choose" target="_blank">CHOOSE DIETITIAN</a></b><br><br><br>
	<b><a href="#view" target="_blank">VIEW FOOD CHART</a></b><br><br><br>
    </div>
  </div>
   <hr>
	</div>
	</div>
 
  <hr>
 <div class="w3-row w3-padding-64" id="userbmi">
 <h1 style="color:tomato">LEARN YOUR BODY MASS INDEX</h1>
     <div class="w3-col l6 w3-padding-large">
      <img src="bmi.jpg" alt="Menu" style="width:100%">
    </div>
    <div class="w3-col l6 w3-padding-large">
	<h2>BMI CALCULATOR</h2>
     <form>
	 Enter Your Height:<input type="text" placeholder="(in cms)" id="h" ><br><br>
	  Enter Your Weight:<input type="text" placeholder="(in kgs) " id="w"><br><br>
	  <input type="submit" value="CLICK" onclick="calculate()">
	  </form>
	 
	 <div id="bmi"></div>
	
	 <div id="range"></div><br><br>
	    <b><a href="#user_menu" target="_blank">BACK</a></b><br><br><br>
    </div>
	
</div>
<hr>
   <div class="w3-row w3-padding-64" id="dlist">
 
     <div class="w3-col l6 w3-padding-large">
      <img src="bmi.jpg" alt="Menu" style="width:100%">
    </div>
    <div class="w3-col l6 w3-padding-large">  <h1 style="color:tomato">LIST OF dietitianS </h1> 
	 <i>	<table style="font-size:20px" >
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

$sql = "SELECT sno,name,specialization,email FROM dieitian";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
	
    while($row = $result->fetch_assoc()) {
		?>
		   

	 
		   <tr> 
  <td><?php echo $row['sno']; ?></td> 
<td><?php echo $row["name"]; ?></td>
 <td><?php echo $row["specialization"]; ?></td>
 <td><?php echo $row["email"]; ?></td>
</tr>

<?php
   }
} 
else {
    echo "0 results";

}
?>
	 
</table></i>
	
	 <br><br>
	    <b><a href="#user_menu" target="_blank">BACK</a></b><br><br><br> 
	   
    </div>
	
</div>
  
	<hr>
	<div class="w3-row w3-padding-64" id="choose">
	
     <div class="w3-col l6 w3-padding-large">
      <img src="bmi.jpg" alt="Menu" style="width:100%">
    </div>
	<h1 style="color:tomato">PICK A dietitian </h1>
    <div class="w3-col l6 w3-padding-large">   
	<form method="post" action="insert1.php">
	<label>Enter Your Name:
	<input type="text" name="name"><br><br>
	<label>Enter Your BMI:
	<input type="text" name="bmi"><br><br>
	<label>Pick a dietitian:
	<input type="text" name="dietitian"><br><br>
		  <input type="submit" value="CLICK" >

	</form>
	
	  
	
		</div>
</div>
	<hr>
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
	 
</table></i>
    </div>
    
    <div class="w3-col l6 w3-padding-large">
      <img src="clean.jpg" alt="Menu" style="width:100%">
    </div>
  </div>
  
	<hr>
	<hr>
<div class="w3-row w3-padding-64" id="view" style="background-image: url(bg.jpg) ; width:100%;">
   <div class="w3-col l6 w3-padding-large">
     
	   <div id="yourmeal" >
	<h2>YOUR MEAL PLAN</h2>
	<ul style="font-size:20px">
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
 $sql1 = "SELECT meal FROM mealplanner";
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
	    <b><a href="#user_menu" target="_blank">BACK</a></b><br><br><br>
    </div>
	
  </div>
	<hr>
  <!-- Contact Section -->
  <div class="w3-row w3-padding-64"  id="fitness">
    <h1 style="color:tomato">FITNESS</h1><br>
	<div class="w3-col l6 w3-padding-large">
      <img src="fit.jpg" alt="Menu" style="width:100%">
    </div>
	    <div class="ex">
    <p><b>EXERCISE</b></p>
	Regular physical activity is just as important to a healthful lifestyle as smart eating. 
Get workout ideas, nutrition advice and tips for family exercise.
	<p><b>SPORTS</b></p>
Fuel your body the right way for optimal performance in sports and athletics.
<p><b>TRAINING & RECOVERY</b></p>
Nutrition is an important part of training, whether you're building muscle, increasing cardio or preparing for a race.
    
  </div>
  
<!-- End page content -->
</div>
 
	
</div>
<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-10">
  <p>maintained by &copy www.welldeveops.com</p>
</footer>

</body>
</html>
