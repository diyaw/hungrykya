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
        $BASE=$_POST['type'];
        $TOPPINGValues = implode(' ',$_POST['topping']);
            // echo $TOPPINGValues;

        $SAUCE = $_POST['sauce'];
        $GARNISH=$_POST['cheese'];
        $QUANTITY=$_POST['quantity'];
        // echo "$QUANTITY";
        $AMOUNT = $QUANTITY * 310;
        echo $AMOUNT;

        $username=$_SESSION['login_user'];

        $query = "Insert into orders(user_uid,quantity,price,item_name,base,topping,sauce,garnish,order_DateTime)values
                                   ('$username',$QUANTITY,$AMOUNT,'Pasta','$BASE','$TOPPINGValues','$SAUCE','$GARNISH',now())";

        $add = mysqli_query($conn,$query);
        
        $order_id = mysqli_insert_id($conn);


        $query2 = "insert into cart_temp(order_id,item_name,price,quantity)values('$order_id','Pasta',$AMOUNT,$QUANTITY)";
        $add2 = mysqli_query($conn,$query2);
        // echo("Inserted");

        header('Location: cart_temp.php');
    }
    }else {
                    $message = 'Please Login..!';
                    echo "<script type='text/javascript'>alert('$message');
                    window.location='menu.php';</script>";                    exit();
                }

?>


<!DOCTYPE html>
<html>
<head>
	<title>pasta</title>
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

	<h1>    <a href="../home.php">
       <img src="logo.png" class="logo animated bounceInDown" style="height: 70px;"></a>Pasta </h1>
	<h2> Type </h2>
	
	<form method="POST">
    <fieldset>
	<div>
           
           <img src="pastabasr.PNG" style="float:left;width:500px;margin:20px;margin-left: 70px;">
    </div>
	
		<div class="data">
        <legend>Select your type</legend>

        <div>
            <input type="radio" id="plain" 
                   name="type" value="plain" checked />
            <label for="plain">Plain</label>
        </div>

        <div>
            <input type="radio" id="alfredopasta" 
                   name="type" value="alfredopasta" />
            <label for="alfredopasta">Alfredo Pasta</label>
        </div>

        <div>
            <input type="radio" id="spiralpasta" 
                   name="type" value="spiralpasta" />
            <label for="spiralpasta">Spiral Pasta</label>
        </div>
		</div>

    </fieldset>

	<h2> Sauce </h2>
	
    <fieldset>
		<div >
            <img src="pizzasauce.PNG" style="float:left;width:500px;margin:20px;margin-left: 70px;">      
        </div>
		<div class="data">
        <legend>Select a Sauce</legend>

        <div>
            <input type="radio" id="tomato_sauce" 
                   name="sauce" value="tomato_sauce" checked />
            <label for="tomato_sauce">tomato_sauce</label>
        </div>

        <div>
            <input type="radio" id="BBQ_sauce" 
                   name="sauce" value="BBQ_sauce" />
            <label for="BBQ_sauce">BBQ sauce</label>
        </div>

        <div>
            <input type="radio" id="hungrykya_sauce" 
                   name="sauce" value="hungrykya_sauce" />
            <label for="hungrykya_sauce">hungrykya sauce</label>
        </div>
		
		<div>
            <input type="radio" id="none" 
                   name="sauce" value="none" />
            <label for="none">None</label>
        </div>
		</div>

    </fieldset>


	<h2> Toppings </h2>
	
    <fieldset>
		<div >
            <img src="pizzatoppings.PNG" style="float:left;width:500px;margin:20px;margin-left: 70px;">      
        </div>
	
		<div class="data">
        <legend>Select toppings</legend>

        <div>
            <input type="checkbox" id="tomato" 
                   name="topping[]" value="tomato" checked />
            <label for="tomato">tomato</label>
        </div>

        <div>
            <input type="checkbox" id="capcicum" 
                   name="topping[]" value="capcicum" />
            <label for="capcicum">capcicum</label>
        </div>

        <div>
            <input type="checkbox" id="onion" 
                   name="topping[]" value="onion" />
            <label for="onion">onion</label>
        </div>
		</div>

    </fieldset>

	<h2> Cheese </h2>
	
    <fieldset>
		<div >
            <img src="pizzacheese.PNG" style="float:left;width:500px;margin:20px;margin-left: 70px;">      
        </div>
	
		<div class="data">
        <legend>Select cheese</legend>

        <div>
            <input type="radio" id="mozzarella" 
                   name="cheese" value="mozzarella" checked />
            <label for="mozzarella">mozzarella</label>
        </div>

        <div>
            <input type="radio" id="lowfat" 
                   name="cheese" value="lowfat" />
            <label for="lowfat">lowfat</label>
        </div>

        <div>
            <input type="radio" id="cheddar" 
                   name="cheese" value="cheddar" />
            <label for="cheddar">cheddar</label>
        </div>
		
		<div>
            <input type="radio" id="none" 
                   name="cheese" value="none" />
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