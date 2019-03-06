<?php
    session_start();
    if(isset($_SESSION['login_user'])){
                    // echo "logged in !";
                    // echo $_SESSION['login_user'];
    $hostname="localhost";
    $db="hungrykya";
    $Username="root";
    $Password="";
    
    $conn = mysqli_connect('localhost','root','dpm','hungrykya');
    
    if(!$conn){
        die("Connection failed! : " .mysqli_connect_errno);
    }else{
        // echo("Connection established..");
    }
    
    if(isset($_POST['SUBMIT'])){
        echo ("Button clicked");
        // $ITEMNAME="beverage"

        $BASE = $_POST['base'];
        $QUANTITY=$_POST['quantity'];
        // echo "$QUANTITY";
        $AMOUNT = $QUANTITY * 550;
        echo $AMOUNT;

        $username=$_SESSION['login_user'];
        // echo "$username";

        $query = "Insert into orders(user_uid,quantity,price,item_name,base,order_DateTime)values
                                   ('$username',$QUANTITY,$AMOUNT,'Hungrykya_special','$BASE',now())";

        $add = mysqli_query($conn,$query);
        $order_id = mysqli_insert_id($conn);

        $query2 = "insert into cart_temp(order_id,item_name,price,quantity)values('$order_id','Hungrykya_special',$AMOUNT,$QUANTITY)";
        $add2 = mysqli_query($conn,$query2);
        echo("Inserted");

                header('Location: cart_temp.php');

    }

    }else {
                    $message = 'Please Login..!';
                    echo "<script type='text/javascript'>alert('$message')
                    window.location='menu.php';</script>";

                    exit();
                }
    
?>

<!DOCTYPE html>
<html>
<head>
	<title>hungry kya</title>
	<link rel="stylesheet" type="text/css" href="menu_hungrykya.css">
	<meta name="viewport" content="width=device-width,initial-scale=1.0" charset="utf-8">
	<link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" href="logo.png">
  <style>
    body{
        background-image: linear-gradient(to top, #feada6 0%, #f5efef 100%);
    }
</style>
</head>
<body>
  
	<h1><a href="../home.php">
       <img src="logo.png" class="logo animated bounceInDown" style="height: 70px;"></a> Hungry Kya </h1>
	<h2> Meal Type </h2>
	<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 2</div>
    <img src="https://scontent-atl3-1.cdninstagram.com/vp/3832d47907ef5d6a057050604ed226db/5C494D4E/t51.2885-15/e35/42109501_408421403023886_732391697348570273_n.jpg" style="width:100%; height:380px;">
    <div class="text">Veg</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 2</div>
    <img src="https://airwaysmag.com/wp-content/uploads/2016/10/AADOMFIRST-4.jpg" style="width:100%; height:380px;">
    <div class="text">Non-Veg</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
</div>
<br>
	<form method="POST">
    <fieldset>
        <legend>Select a Meal</legend>

        <div>
            <input type="radio" id="veg" 
                   name="base" value="veg" checked />
            <label class="meal" for="veg">Veg</label>
        </div>

        <div>
            <input type="radio" id="nonveg" 
                   name="base" value="nonveg" />
            <label class="meal" for="nonveg">Non-Veg</label>
        </div>
    </fieldset>
<br>
<br>

<h4 style="margin-left:610px;">Quantity</h4>
<input style="margin-left:570px;" id="p01" type="number" name="quantity" min="1" max="5" value=1><br>
<input type=submit name="SUBMIT" value="SUBMIT" style="width:120px; margin-left:590px;-webkit-border-radius: 6px;
    height:50px;cursor: pointer;
    background-color:#ef4300;
    text-align:center;padding: 0;font-family:Fira Sans;">
</form>
<br>
<br>
<br>
<br>

<script type="text/javascript">
	var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1} 
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; 
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block"; 
  dots[slideIndex-1].className += " active";
}
</script>
</body>
</html>