<?php
?>

<!DOCTYPE html>
<html>
<head>
	<title> Hungry Kya</title>
	<link rel="stylesheet" type="text/css" href="home.css">
	<meta name="viewport" content="width=device-width,initial-scale=1.0" charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
	<link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" href="..\images\logo.png">
</head>
<body>

	<div class="slidecontainer" >

	<header>
		<nav>
			<div class="row clearfix">
				<a href="home.php">
				<img src="images\logo.png" class="logo animated bounceInDown"></a>
				<ul class="main-nav animated bounceInDown" id="check" >
					<li><a href="home.php">home</a></li>
					<li><a href="menu/menu.php">Menu</a></li>
					<li><a href="contactus/contactus.php">Contact Us</a></li>
					<li><a href="aboutus/aboutus.php">About us</a></li>
					<a href="wel.php" class="btn btn-2" ><strong>Login</strong></a>
					
				</ul>
				<a href="#" class="icon"  onclick="slideshow()"><i class="fa fa-bars"></i></a>
				
			</div>
		</nav>
			

		<div class="main-content-header" >
			<h1 class="animated bounceInDown" >
				Welcome to <span class="colorchange" >hungry kya?</span><br>
				We cook food your heart desires.
			</h1>
			<a href="menu/menu.php" class="btn btn-1" ><strong>click to order</strong></a>

		</div>
			

		    <div class="advertisement" >
			<a href="menu/menu.php" >
  			<img src="images\pizza.png"  ></a>
		    
		    
			<a href="menu/menu.php" >
  			<img src="images\pasta.png"  ></a>
		    
			<a href="menu/menu.php" >
  			<img src="images\icecream.png"  ></a>
		    
			<a href="menu/menu.php" >
  			<img src="images\drink.png"  ></a>
		    
			<a href="menu/menu.php" >
  			<img src="images\hungry.png"  ></a>
		    </div>
	</header>

	</div>


	<script type="text/javascript">
		function slideshow(){
			var x = document.getElementById('check');
			if(x.style.display === 'none'){
				x.style.display="block";
			}else{
				x.style.display="none";
			}

		}
	</script>

		

	

	

	

</body>
</html>