<?php
$conn = mysqli_connect('localhost','root','dpm','hungrykya');
	$id = $_GET['id'];
	$sql = "DELETE FROM cart_temp where order_id = '$id'";
	$result = mysqli_query($conn,$sql);

	$sql1 = "DELETE FROM orders where order_id = '$id'";
	$result1 = mysqli_query($conn,$sql1);

	header("Location: cart_temp.php");
?>