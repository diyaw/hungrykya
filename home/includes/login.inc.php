<?php

session_start();

if (isset($_POST['submit']))
{

	include 'dbh.inc.php';
	$uid =  mysqli_real_escape_string($conn,$_POST['uid']);
	$password =  mysqli_real_escape_string($conn,$_POST['password']);
	//error handlers
	// check if empty
	if (empty($uid) || empty($password) )
	{
		//header("Location: ../index.php?login=empty");
		//exit();
		echo '<script type="text/javascript">'; 
        echo 'alert("PLEASE ENTER DETAILS");'; 
        echo 'window.location.href = "../index.php";';
        echo '</script>';
        exit(); 
		# code...
	}
	else
	{
		$sql = "SELECT * FROM users WHERE user_uid='$uid' OR user_email='$uid' ";
		$result = mysqli_query($conn,$sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck < 1)
		{
			echo '<script type="text/javascript">'; 
            echo 'alert("PLEASE ENTER CORRECT DETAILS");'; 
            echo 'window.location.href = "../index.php";';
            echo '</script>';
            exit();
		}
		else
		{
			if ($row = mysqli_fetch_assoc($result))
			{
				//de-hashing the password
				$hashedPwdCheck = password_verify($password, $row['user_pwd']);
				if ($hashedPwdCheck == false)
				{ 
					//header("Location: ../index.php?login=error");
					//exit(); 
					echo '<script type="text/javascript">'; 
		            echo 'alert("PLEASE ENTER CORRECT DETAILS");'; 
		            echo 'window.location.href = "..index.php";';
		            echo '</script>';
		            exit();
				}
				elseif($hashedPwdCheck == true)
				{ if($uid=="2016.diya.wadhwani@ves.ac.in"){
					$_SESSION['login_user']= $row['user_uid'];
					header("Location: ../admin.php ");

					}else{
						

					
					//log in the user here
				 	$_SESSION['u_id']=$row['user_id'];
					$_SESSION['u_first']=$row['user_first'];
					$_SESSION['u_last']=$row['user_last'];
					$_SESSION['u_email']=$row['user_email'];
					$_SESSION['u_uid']=$row['user_uid'];
					$_SESSION['u_address']=$row['user_address'];
					$_SESSION['u_ph']=$row['user_ph'];
					$_SESSION['login_user']= $row['user_uid'];
					
					//header("Location: ../wel.php ");
					//exit();
					echo '<script type="text/javascript">'; 
		            echo 'alert("YOU ARE LOGGED IN SUCCESSFULLY");'; 
		            echo 'window.location.href = "../wel.php";';
		            echo '</script>';
		            exit();
				}
					
				}
			}
		}

	}
}else
{

		//header("Location: ../index.php?login=error");
		//exit();
	echo '<script type="text/javascript">'; 
	echo 'alert("PLEASE ENTER CORRECT DETAILS");'; 
	echo 'window.location.href = "..index.php";';
	echo '</script>';
	exit();
}
