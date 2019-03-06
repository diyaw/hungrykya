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
		//echo("Connection established..");
	}

    
    $username = $_SESSION['login_user'];


    $result = mysqli_query($conn,"SELECT * FROM users where user_uid =  '$username' ");

    echo ' <h2 class="main" style="height:50px; font-size: 40px; " >Welcome '.$username.'  </h2>';

    echo ' <h2 class="main1" >your details</h2>';

echo '<table class="customers"  style="padding-left:500px" >
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Email</th>
<th>username</th>
<th>Address</th>
<th>phone number</th>
<th>Wallet</th>
</tr>';

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['user_first'] . "</td>";
echo "<td>" . $row['user_last'] . "</td>";
echo "<td>" . $row['user_email'] . "</td>";
echo "<td>" . $row['user_uid'] . "</td>";
echo "<td>" . $row['user_address'] . "</td>";
echo "<td>" . $row['user_ph'] . "</td>";
echo "<td>" . $row['user_wallet'] . "</td>";
echo "</tr>";
}
echo "</table>";


$result1 = mysqli_query($conn,"SELECT * FROM orders where user_uid =  '$username' ");

    echo ' <h2 class="main1" >Your orders</h2>';

echo '<table class="customers"  style="padding-left:500px" >
<tr>
<th>Order id</th>
<th>quantity</th>
<th>price for each</th>
<th>item name</th>
<th>date and time</th>
<th>order status</th>

</tr>';

while($row = mysqli_fetch_array($result1))
{
echo "<tr>";
echo "<td>" . $row['order_id'] . "</td>";
echo "<td>" . $row['quantity'] . "</td>";
echo "<td>" . $row['price'] . "</td>";
echo "<td>" . $row['item_name'] . "</td>";
echo "<td>" . $row['order_DateTime'] . "</td>";
echo "<td>" . $row['order_status'] . "</td>";

echo "</tr>";
}
echo "</table>";



    }else {
    				header('Location: index.php');
                    

                    exit();
     }

	
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="admin.css">
	<title>User Page</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0" charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
	<link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" href="logo.png">
</head>
<body>
	<div class="sidenav">
	
	<a href="home.php"><button style="background-color:black; color:white; text-align:center;width: 190px; height:45px; font-size:22px;margin-left:-12px;  cursor: pointer;" class=" ">Back to website</button></a>
	

	<div class="form-popup1" id="myForm1">
	  <form action="/action_page.php" class="form-container">

		<label for="email"><b>Order ID</b></label>
		<input type="text" placeholder="Enter order id" name="Order_id" required>

		
		<button type="submit" class="btn"><b>Submit</b></button>
		<button type="button" class="btn cancel" onclick="closeForm1()"><b>Close</b></button>
	  </form>
	</div>

	
	

	<div class="form-popup2" id="myForm2">
	  <form action="/action_page.php" class="form-container">

		<label for="email"><b>Status</b></label>
		<input type="text" placeholder="Enter order_id" name="orderid" required>

		
		
		<button type="submit" class="btn"><b>Submit</b></button>
		<button type="button" class="btn cancel" onclick="closeForm2()"><b>Close</b></button>
	  </form>
	</div>
  <?php
  echo '<form action="includes/logout.inc.php" method="POST" >
            <button style="background-color:black; color:white; text-align:center;width: 200px; height:45px; font-size:22px;margin-left:0;" type="sumbit" name="submit" >Logout</button>
            
          </form>';
  ?>
  
  </div>

	

<div class="main">
 

  

</div>



</body>
</html>