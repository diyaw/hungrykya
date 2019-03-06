<?php

if(isset($_POST['submit'])) {

	include_once 'dbh.inc.php';

	$first = mysqli_real_escape_string($conn,$_POST['first']);
	$last = mysqli_real_escape_string($conn,$_POST['last']);
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$uid = mysqli_real_escape_string($conn,$_POST['uid']);
	$address = mysqli_real_escape_string($conn,$_POST['address']);
	$phone = mysqli_real_escape_string($conn,$_POST['phone']);
	$password = mysqli_real_escape_string($conn,$_POST['password']);

	//Error handlers
	//check for empty fields
	if(empty($first) || empty($last) || empty($email) || empty($uid) || empty($address) || empty($phone) || empty($password) ){
		//header("Location: ../signup.php?signup=empty");
		//exit();
		echo '<script type="text/javascript">'; 
		echo 'alert("PLEASE ENTER YOUR DETAILS");'; 
		echo 'window.location.href = "../signup.php";';
		echo '</script>';
		exit();

	} else {
		// check if input characters are valids

		if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)){ //||  !preg_match("/^[1-9][0-9]{10}*$/", $phone) ) {
			echo '<script type="text/javascript">'; 
		    echo 'alert("PLEASE ENTER CORRECT DETAILS");'; 
		    echo 'window.location.href = "../signup.php";';
		    echo '</script>';
		    exit();

		} else {
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				echo "<script type='text/javascript'>alert('please enter correct email details');
                    window.location='../signup.php';</script>";
				exit();
			} else {
				$sql = "SELECT * FROM users WHERE user_uid='$uid'";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);

				if($resultCheck>0){
					echo "<script type='text/javascript'>alert('username tacken');
                    window.location='../signup.php';</script>";
		            exit();
				} else {
					//hashing the password
					$hashedPwd = password_hash($password, PASSWORD_DEFAULT);

					$sql = "INSERT INTO users (user_first,user_last,user_email,user_uid,user_address,user_ph,user_pwd) VALUES ('$first','$last','$email','$uid','$address','$phone','$hashedPwd');";
					mysqli_query($conn, $sql);
					echo '<script type="text/javascript">'; 
		            echo 'alert("SUCCESSFULLY SINGED UP");'; 
		            echo 'window.location.href = "../index.php";';
		            echo '</script>';
		            exit();
				}
			}
		}

	}


} else {
	header("Location: ../signup.php");
	exit();


}