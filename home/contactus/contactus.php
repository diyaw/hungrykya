<?php

?>

<!DOCTYPE html>
<html>
<head>
	<title>Contact Page</title>
	<link rel="stylesheet" type="text/css" href="contactus.css">
	<meta name="viewport" content="width=device-width,initial-scale=1.0" charset="utf-8">
	<link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="logo.png">
	<style>
	
	</style>

</head>
<body class="slidecontainer">
	<nav>
			<div class="row clearfix">
				<a href="../home.php">
				<img src="logo.png" class="logo animated bounceInDown"></a>
				<ul class="main-nav animated bounceInDown" id="check" >
					<li><a href="../home.php">home</a></li>
					<li><a href="../menu/menu.php">Menu</a></li>
					<li><a href="contactus.php">Contact Us</a></li>
					<li><a href="../aboutus/aboutus.php">About us</a></li>
					
					
				</ul>
			</nav>

				<h1 class="pleasepink" >Contact Us</h1>
				<a href="#" class="icon"  onclick="slideshow()"><i class="fa fa-bars"></i></a>
				<p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.3589470895704!2d72.8877941141959!3d19.047949487104038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c8ae58bb477b%3A0xe6b0dae75f20c296!2sVivekanand+Education+Society&#39;s+Polytechnic!5e0!3m2!1sen!2sin!4v1537959103349" width="1200" height="350" frameborder="0" style="border:0" allowfullscreen></iframe></p>
				<br>
				<br>
				<?-------------------------------------------------------------?>
				
				<div class="left">
					<h3><img src="https://png.icons8.com/material/50/000000/bungalow.png"> VESIT Chembur</h3>
					<h3><img src="https://png.icons8.com/dusk/50/000000/phone.png"> +2512229986 </h3>
					<h3><img src="https://png.icons8.com/color/50/000000/gmail.png">hungrykya@gmail.com</h3>
				</div>
				<?---------------------------------------------------------------?>
				
				
			
				<br>
				<br>
				<button onclick="openForm()" class="button"><b>FEEDBACK !</b></button>
				<br>
				<br>
				<br>
				
		
<script>
  function openForm(){
	window.location="secure_email_form.php";
	}
</script>

</body>
</html>