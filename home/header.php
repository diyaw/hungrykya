<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="signup.css">
	
	<style >
	body {
background-image: linear-gradient(to top, #feada6 0%, #f5efef 100%);
font-family:'PT Sans',Helvetica, Arial, sans-serif;
color:#fff;
   background-repeat: no-repeat;
   background-size:cover;
}
.page-container {
margin: 120px auto 0 auto;
}

h1 {
	font-size: 30px;
	font-weight: 700;
	text-shadow:0 1px 4px rgba(0,0,0,.2);
	text-align:center;
	color: black;
}

form {
position:relative;
width:305px;
margin:15px auto 0 auto;
text-align:center;

}

input {
width:270px;
height:42px;
margin-top:25px;
padding:0 15px;
background:#2d2d2d;
background:rgba(45,45,45,.15);
-moz-border-radius: 6px;
-webkit-border-radius:6px;
text-align:center;
border-radius:6px;
border:1px solid #3d3d3d;
border:1px solid rgba(255,255,255,.15);
-moz-box-shadow:0 2px 3px 0 rgba(0,0,0,.1) inset;
-webkit-box-shadow: 0 2px 3px 0 rgba(0,0,0,.1) inset;
box-shadow: 0 2px 3px 0 rgba(0,0,0,.1) inset;
font-family: 'PT Sans', Helvetica, Arial, sans-serif;
font-size:16px;
color:#fff;
text-shadow:0 1px 2px rgba(0,0,0,.1);
-o-transition: all .2s;
-moz-transition: all .2s;
-webkit-transition: all .2s;
-ms-transition: all .2s;
}

input:-moz-placeholder { color: #fff; }
input:-ms-input-placeholder { color: #fff; }
input::-webkit-input-placeholder { color: #fff; }

input:focus {
outline:none;
-moz-box-shadow:
        0 2px 3px 0 rgba(0,0,0,.1) inset,
        0 2px 7px 0 rgba(0,0,0,.2);
-webkit-box-shadow:
        0 2px 3px 0 rgba(0,0,0,.1) inset,
        0 2px 7px 0 rgba(0,0,0,.2);
box-shadow:
        0 2px 3px 0 rgba(0,0,0,.1) inset,
        0 2px 7px 0 rgba(0,0,0,.2);
}

button {
cursor:pointer;
width:70px;
height:44px;
margin-top:25px;
padding:0;
background:#ef4300;
-moz-border-radius: 6px;
-webkit-border-radius: 6px;
border-radius: 6px;
border:1px solid #ff730e;
-moz-box-shadow:
        0 15px 30px 0 rgba(255,255,255,.25) inset,
        0 2px 7px 0 rgba(0,0,0,.2);
-webkit-box-shadow:
        0 15px 30px 0 rgba(255,255,255,.25) inset,
        0 2px 7px 0 rgba(0,0,0,.2);
box-shadow:
        0 15px 30px 0 rgba(255,255,255,.25) inset,
        0 2px 7px 0 rgba(0,0,0,.2);
font-family:'PT Sans', Helvetica, Arial, sans-serif;
font-size:14px;
font-weight:700;
color:#fff;
text-shadow:0 1px 2px rgba(0,0,0,.1);
-o-transition: all .2s;
    -moz-transition: all .2s;
    -webkit-transition: all .2s;
    -ms-transition: all .2s;
}

button:hover {
    -moz-box-shadow:
        0 15px 30px 0 rgba(255,255,255,.15) inset,
        0 2px 7px 0 rgba(0,0,0,.2);
    -webkit-box-shadow:
        0 15px 30px 0 rgba(255,255,255,.15) inset,
        0 2px 7px 0 rgba(0,0,0,.2);
    box-shadow:
        0 15px 30px 0 rgba(255,255,255,.15) inset,
        0 2px 7px 0 rgba(0,0,0,.2);
}

button:active {
    -moz-box-shadow:
        0 15px 30px 0 rgba(255,255,255,.15) inset,
        0 2px 7px 0 rgba(0,0,0,.2);
    -webkit-box-shadow:
        0 15px 30px 0 rgba(255,255,255,.15) inset,
        0 2px 7px 0 rgba(0,0,0,.2);
    box-shadow:        
        0 5px 8px 0 rgba(0,0,0,.1) inset,
        0 1px 4px 0 rgba(0,0,0,.1);

    border: 0px solid #ef4300;
}

.btn1 {
	cursor:pointer;
	width:70px;
	height:44px;
	margin-top:25px;
	margin-left:0;
	padding:0;
	background:#ef4300;
	-moz-border-radius: 6px;
	-webkit-border-radius: 6px;
	border-radius: 6px;
	border:1px solid #ff730e;
	-moz-box-shadow:
			0 15px 30px 0 rgba(255,255,255,.25) inset,
			0 2px 7px 0 rgba(0,0,0,.2);
	-webkit-box-shadow:
			0 15px 30px 0 rgba(255,255,255,.25) inset,
			0 2px 7px 0 rgba(0,0,0,.2);
	box-shadow:
			0 15px 30px 0 rgba(255,255,255,.25) inset,
			0 2px 7px 0 rgba(0,0,0,.2);
	font-family:'PT Sans', Helvetica, Arial, sans-serif;
	font-size:14px;
	font-weight:700;
	color:#fff;
	text-shadow:0 1px 2px rgba(0,0,0,.1);
	-o-transition: all .2s;
		-moz-transition: all .2s;
		-webkit-transition: all .2s;
		-ms-transition: all .2s;
}

.btn1:hover {
    -moz-box-shadow:
        0 15px 30px 0 rgba(255,255,255,.15) inset,
        0 2px 7px 0 rgba(0,0,0,.2);
    -webkit-box-shadow:
        0 15px 30px 0 rgba(255,255,255,.15) inset,
        0 2px 7px 0 rgba(0,0,0,.2);
    box-shadow:
        0 15px 30px 0 rgba(255,255,255,.15) inset,
        0 2px 7px 0 rgba(0,0,0,.2);
}

.btn1:active {
    -moz-box-shadow:
        0 15px 30px 0 rgba(255,255,255,.15) inset,
        0 2px 7px 0 rgba(0,0,0,.2);
    -webkit-box-shadow:
        0 15px 30px 0 rgba(255,255,255,.15) inset,
        0 2px 7px 0 rgba(0,0,0,.2);
    box-shadow:        
        0 5px 8px 0 rgba(0,0,0,.1) inset,
        0 1px 4px 0 rgba(0,0,0,.1);

    border: 0px solid #ef4300;
}
.place {
       text-align: center;
		position: relative;
    }


.navbar {
    overflow: hidden;
    background-color: #333;
    font-family: Arial;
}

@media screen and (max-width: 600px) {
    .place {
       text-align: center;
		position: relative;
    }
}

.navbar a {float: left;font-size: 16px;color: black;text-align: center;padding: 14px 16px;text-decoration: none;}

.dropdown {float: left;overflow: hidden;}

.dropdown .dropbtn {font-size: 16px;border: none;outline: none;color: black;padding: 14px 16px;background-color: inherit;}

.navbar a:hover, .dropdown:hover .dropbtn {background-color: red}

.dropdown-content {display: none;position: absolute;background-color: #f9f9f9;width: 160px;box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);z-index: 1;}

.dropdown-content a {float: none;color: black;padding: 12px 16px;text-decoration: none;display: block;text-align: left;}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}
	</style>
</head>
<body>

	<header>
		<nav>
			<div class='main-wrapper'>
				
						<div class="nav-login" >
					<?php
					if (isset($_SESSION['u_id'])){
						echo '<form action="wel.php" method="POST" >
						<button type="sumbit" name="submit" >GO to user dashboard</button>
						
					</form>';
					} else{
						
					echo ' 
					<div class="page-container">

            
			            <form action="includes/login.inc.php" method="POST">
			            <a href="home.php">
					        <h1><img src="logo.png" class="logo animated bounceInDown" style="height: 70px; margin-left: 0px;"></a>Login</h1>
			                <input type="text" name="uid" class="Name" placeholder="Enter username">
			                
			                <input type="password" name="password" class="Address" placeholder="Enter Password">
			                <div class="place">
			                <button type="submit" value="Add" name="submit">Login</button>
			                
			                </div>
			            </form>
			            <div class="place">
			            <div style="margin-bottom:200px;">
			                <a href="signup.php"><button  class="btn1">Signup ?</button></a>
			            </div>
			            </div>
			        </div>';
				    
					}
					?>

					
					
				</div>	
				
			</div>
		</nav>
	</header>