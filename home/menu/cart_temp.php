<?php
	session_start();
    if(isset($_SESSION['login_user'])){
                    // echo "logged in !";
                    // echo $_SESSION['login_user'];
    $hostname="localhost";
    $db="hungrykya";
    $Username="root";
    $Password="dpm";
    
    $conn = mysqli_connect('localhost','root','dpm','hungrykya');
    
    if(!$conn){
        die("Connection failed! : " .mysqli_connect_errno);
    }else{
        // echo("Connection established..");
    }


	$sql = "SELECT * from cart_temp";
    $result = mysqli_query($conn, $sql);
    echo "<div style='color:black;'><table  align='center' width='50%' height='50%' text-align='center' color='black' bcolor='white'>
	<tr>
	<th >Sr_no</th>
	<th>Order_id</th>
	<th>Item name</th>
	<th>Price</th>
	<th>Quantity</th>
	<th>_</th>

	</tr></div>";


	$i=1;


	if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    	$order_id = $row['order_id'];
        echo "<tr align='center' >";
		echo "<td>" . "$i" . "</td>";
		echo "<td>" .$row['order_id'] . "</td>";
		echo "<td>" . $row['item_name'] . "</td>";
		echo "<td>" . $row['price'] . "</td>";
		echo "<td>" . $row['quantity'] . "</td>";
		echo "<td>" . '<form method="POST"><a class="btn" href="delete_cart.php?id='.$order_id.'"><img src="https://png.icons8.com/material-outlined/24/000000/cancel.png"></a></form>'. "</td>";

		echo "</tr>";
		$i++;

    }


    $query1 = "SELECT sum(price) FROM cart_temp";
    $Total =mysqli_query($conn,$query1);
    $rows = mysqli_fetch_assoc($Total);
     $total = implode('',$rows);
     // echo $row;
    echo "Your Total Amount is :" .$total;

    $username=$_SESSION['login_user'];
    // echo $username;

    $query = "SELECT user_wallet from users WHERE user_uid='$username'";
    $result = mysqli_query($conn,$query);
    $ans = mysqli_fetch_assoc($result);
    $wallet = implode('',$ans);
    echo "<br>You have " .$wallet. " coins in your wallet at the current moment.";

    // echo 'Do you want to pay via your wallet ?<a href="pay_wallet.php">YES</a>
    // 																<a href="pay_normal.php">NO</a>";';
   
    echo '<br>Do you want to pay via your wallet?<form method="POST"><button style = "height:35px;width:50px;"name="yes">YES</button><button style = "height:35px;width:50px;" name="no">NO</button></form>';

    if(isset($_POST['yes'])){

    	$subtractedTotal = $total - 100;
    //  echo $subtractedTotal;
    	if ($wallet==0) {
    	# code...
    	echo "<br>Your wallet is empty..!You have to pay ".$total;
    }
    	elseif($wallet<=$subtractedTotal){
    	$discountTotal = $total - $wallet;
    	echo "<br> Rs." .$wallet." is deducted from your wallet, You have to pay " .$discountTotal;
    }
    elseif($wallet>$subtractedTotal){
    	echo "<br>You cannot use your wallet for orders less than " .$subtractedTotal;
    }

    $update = "UPDATE users SET user_wallet = 0 where user_uid ='$username'";
    $result = mysqli_query($conn,$update);

    $update2 = "UPDATE orders set price = price - $wallet where user_uid ='$username'";
    $result2 = mysqli_query($conn,$update2);

    }

    if(isset($_POST['no'])){
    	echo "<br>You have to pay :" .$total;
    }


    // $subtractedTotal = $total - 100;
    //  echo $subtractedTotal;

    // if($wallet>49 && $wallet<$subtractedTotal){
    // 	// echo "hi";
    // 	$discountTotal = $total - $wallet;
    // 	echo "Your Rs." .$wallet." is deducted from your wallet, You have to pay " .$discountTotal;
    // }


} else {
    echo "0 results";
}

 if(isset($_POST['thankyou'])){

 	header('Location:payment.php');
// 		sleep(5);
// 	// echo "Button clicked";
//         $sql = "truncate table cart_temp;";
//         // echo $sql;
//     	$result = mysqli_query($conn, $sql);
 }

 if(isset($_POST['cancel'])){
 	echo "cancelled";

 	
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
 }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>cart</title>
	<style>
body {
    background-image: linear-gradient(to top, #feada6 0%, #f5efef 100%);
}
h2   {background-color:  #ff00aa;
	color: #fff;
	font-size: 50px;
	margin-bottom: 50px;
	text-transform: uppercase;
	font-weight: lighter;
	text-align: center;}
p    {color: red;}
/*button{
	display: block;
}*/
th,td{
	border-bottom: 1px solid #ddd;
    color:black;
}
th{

	height: 85px;
	color: black;
	font-size: 20px;
}

table{
/*	border: 1px solid black;
*/	border-collapse: collapse;
margin-bottom: 20px;
color:black;
}

td{
	color: black;
	font-size: 20px;
}

/*tr:hover {background-color:#E788E5;}
*/

.total{
	color: white;
	font-size:20px;


}

.btn {
	width:40px;
	height: 35px;
    cursor: pointer; /* Mouse pointer on hover */
	margin-right:5px;
	margin-top:40px;
}

/*.btn:hover {
	background-color:#E76EE5;
}*/

button{
	margin-bottom:25px;
	font-family:Fira Sans;
	font-size:20px;
	width:150px;
	height:80px;
	background-color:#ef4300; 
    -webkit-border-radius: 6px;
	text-align:center;
}

button:hover{
	cursor: pointer;
}

.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 250px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid black;
    width: 50%;
    text-align: center;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

</style>
</head>
</style>
<body >
	<h2><img src="https://png.icons8.com/metro/80/ffffff/shopping-cart.png">Shopping Cart</h2>
	
	<a href="menu1.php" style="float: left; margin-left: 30px; "  ><button class="btn2" ><b>Want to order more?</b></button></a>

	<form method="POST">
	<button name="thankyou" style="text-decoration: none;float: right;margin-right: 30px;"><b>Want to proceed with this order?</b></button></form>


<!--  <div class="total">Total Amount :</div>
 --> 
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Hooray..!Your order has been placed.<br>
    	Thankyou for ordering with us..</p>
  </div>

</div>

	<!-- <a href="thankyou.php" style="text-decoration: none;float: right;margin-right: 30px;" ><button formmethod="POST" name="THANKYOU" class="btn2" ><b>Checkout</b></button></a> -->
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";

}



// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


</body>
</html>