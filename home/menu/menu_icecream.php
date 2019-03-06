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
        // echo ("Button clicked");
        // $ITEMNAME="beverage";
        $BASE=$_POST['flavor'];
        $TOPPINGValues = implode(' ',$_POST['topping']);
            // echo $TOPPINGValues;

        $SAUCE = $_POST['syrup'];
        $QUANTITY=$_POST['quantity'];
        // echo "$QUANTITY";
        $AMOUNT = $QUANTITY * 170;
        echo $AMOUNT;

        $username=$_SESSION['login_user'];

        $query = "Insert into orders(user_uid,quantity,price,item_name,base,topping,sauce,order_DateTime)values
                                   ('$username',$QUANTITY,$AMOUNT,'Icecream','$BASE','$TOPPINGValues','$SAUCE',now())";

        $add = mysqli_query($conn,$query);
        $order_id = mysqli_insert_id($conn);

        $query2 = "insert into cart_temp(order_id,item_name,price,quantity)values('$order_id','Icecream',$AMOUNT,$QUANTITY)";
        $add2 = mysqli_query($conn,$query2);
        // echo("Inserted");

        header('Location: cart_temp.php');
    }
    }else {
                    $message = 'Please Login..!';
                    echo "<script type='text/javascript'>alert('$message');
                    window.location='menu.php';</script>";
                    exit();
                }
    
?>


<!DOCTYPE html>
<html>
<head>
	<title>ice-cream</title>
	<link rel="stylesheet" type="text/css" href="menu_item.css">
	<link rel="icon" href="logo.png">
	<meta name="viewport" content="width=device-width,initial-scale=1.0" charset="utf-8">
    <style>
    body{
        background-image: linear-gradient(to top, #feada6 0%, #f5efef 100%);
    }
</style>
</head>
<body>
   
	<h1> <a href="../home.php">
       <img src="logo.png" class="logo animated bounceInDown" style="height: 70px;"></a> Ice-Cream </h1>
	<h2> Flavor </h2>

	<form method="POST">
    <fieldset>
	<div>
        <img src="iceflavor.PNG" style="float:left;width:500px;margin:20px;margin-left: 70px;height: 150px;">   
    </div>
	
		<div class="data">
        <legend>Select a Flavor</legend>

        <div>
            <input type="radio" id="chocolate" 
                   name="flavor" value="chocolate" checked />
            <label for="chocolate">Chocolate</label>
        </div>

        <div>
            <input type="radio" id="mango" 
                   name="flavor" value="mango" />
            <label for="mango">Mango</label>
        </div>

        <div>
            <input type="radio" id="strawberry" 
                   name="flavor" value="strawberry" />
            <label for="strawberry">Strawberry</label>
        </div>
		
		<div>
            <input type="radio" id="blackcurrent" 
                   name="flavor" value="blackcurrent" />
            <label for="blackcurrent">Black Current</label>
        </div>
		</div>

    </fieldset>

	<h2> Syrup </h2>
	
	<form>
    <fieldset>
	<div >
        <img src="icesyrup.PNG" style="float:left;width:500px;margin:20px;margin-left: 70px;height:150px;">   
    </div>
	
		<div class="data">
		<legend>Select a Syrup</legend>

        <div>
            <input type="radio" id="chocolatesyrup" 
                   name="syrup" value="chocolatesyrup" checked />
            <label for="chocolatesyrup">Chocolate Syrup</label>
        </div>

        <div>
            <input type="radio" id="whippedcream" 
                   name="syrup" value="whippedcream" />
            <label for="whippedcream">Whipped Cream</label>
        </div>

        <div>
            <input type="radio" id="blueberrysyrup" 
                   name="syrup" value="blueberrysyrup" />
            <label for="blueberrysyrup">Blueberry Syrup</label>
        </div>
		
		<div>
            <input type="radio" id="none" 
                   name="syrup" value="none" />
            <label for="none">None</label>
        </div>
		</div>

    </fieldset>

	<h2> Toppings </h2>
	
    <fieldset>
	<div>
        <img src="icetoppings.PNG" style="float:left;width:500px;margin:20px;margin-left: 70px;">   
    </div>
		<div class="data">
        <legend>Select toppings</legend>

        <div>
            <input type="checkbox" id="rainbowsprinkles" 
                   name="topping[]" value="rainbowsprinkles" checked />
            <label for="rainbowsprinkles">Rainbow Sprinkles</label>
        </div>	

        <div>
            <input type="checkbox" id="chocochips" 
                   name="topping[]" value="chocochips" />
            <label for="chocochips">Choco-Chips</label>
        </div>

        <div>
            <input type="checkbox" id="gummybears" 
                   name="topping[]" value="gummybears" />
            <label for="gummybears">Gummy bears</label>
        </div>
		
		<div>
            <input type="checkbox" id="none" 
                   name="topping[]" value="none" />
            <label for="none">None</label>
        </div>
		</div>

    </fieldset>

<h4 style="margin-left:610px;">Quantity</h4>
<input style="margin-left:570px;" id="p01" type="number" name="quantity" min="1" max="5" value=1><br>
<input type=submit name="SUBMIT" value="SUBMIT" style="width:120px;-webkit-border-radius: 6px;cursor: pointer;
    height:50px;
    margin-left:590px;
    background-color:#ef4300;
    text-align:center;padding: 0;font-family:Fira Sans;">
</form>
</body>
</html>