<?php
?>

<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
	<link rel="stylesheet" type="text/css" href="menu.css">
	<meta name="viewport" content="width=device-width,initial-scale=1.0" charset="utf-8">
	<link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" href="logo.png">

<style>
  
	.card{
    width: 302px;
    height: 200px;
    border: 1px solid black;
    border-radius: 0px 35px 0px 35px;
    display: block;
    margin: 50px;
    padding-bottom: 360px;
    padding-top: 30px;
    
}

.parent{
	display: flex;
	margin-left: 70px;
}

.parent1{
	display: flex;
	margin-left: 270px;
}

h3{
	background-color: #ffb6c1;
	color: black;
	margin-bottom: 5px;
	text-align: center;
}

p{
	text-align: center;
	color:white;
}

/*.card > p,p1,h4,h1{
    color: firebrick;
    text-align: center;
}*/
</style>


</head>
<body class="slidecontainer">
	<nav  >
			<div class="row clearfix">
				<a href="../home.php">
				<img src="logo.png" class="logo animated bounceInDown"></a>
				<ul  class="main-nav animated bounceInDown" id="check" >
					<li ><a href="../home.php">home</a></li>
					<li ><a href="menu.php">Menu</a></li>
					<li ><a href="../contactus/contactus.php">Contact Us</a></li>
					<li ><a href="../aboutus/aboutus.php">About us</a></li>
					<!--<a href="../index.php" class="btn btn-2" ><strong>Register</strong></a>-->
					
				</ul>
				<a href="#" class="icon"  onclick="slideshow()"><i class="fa fa-bars"></i></a>
				
			</div>
		</nav>

		<h1>MENU</h1>
		<div class="parent">
		<div class="card">
			<h3>PIZZA</h3>		
              <a href="menu_pizza.php" >
  			<img class="Table-img-top" src="menupizza.jpg" height="240px" width="300px"></a>
                  <p style="color: black;"> Rs. 400</p>
                  <p style="color: black;"><i>A Pizza a day keeps Sadness Away</i></p>
         
        
    </div>
    <div class="card">
    	<h3>PASTA</h3>
              <a href="menu_pasta.php"><img class="Table-img-top" src="menupasta.jpg" height="240px" width="300px"></a>
                  <p style="color: black;">Rs. 310</p>
                  <p style="color: black;"><i>Life is a combination of Magic and Pasta</i></p>
         
              </div>
    <div class="card">
    	<h3>ICECREAM</h3>
              <a href="menu_icecream.php"><img class="Table-img-top" src="menuicecream.jpg" height="240px" width="300px"></a>
                  <p style="color: black;">Rs. 170</p>
                  <p style="color: black;"><i>Icecream solves Everything!</i></p>
    

    </div>
</div>

<div class="parent1">
         <div class="card">
         	<h3>BEVERAGES</h3>
              <a href="menu_bev.php"><img class="Table-img-top" src="menudrink.jpg" height="240px" width="300px"></a>
                 <p style="color: black;">Rs. 220</p>
                 <p style="color: black;"><i>Celebrate with beverages and sweet words</i></p>
         
              </div>

    <div class="card">
    	<h3>HUNGRY KYA ? </h3>
              <a href="menu_hungrykya.php"><img class="Table-img-top" src="menuhungry.jpeg" height="240px" width="300px"></a>
                  <p style="color: black;">Rs. 550</p>
                  <p style="color: black;"><i>Good Food is Good Mood</i></p>
         
              </div>
</div>



</body>
</html>