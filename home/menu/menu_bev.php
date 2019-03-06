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
        $BASE=$_POST['juice'];
        $TOPPINGValues = implode(' ',$_POST['fruppings']);
            // echo $TOPPINGValues;

        //$TOPPINGValues=implode(" ",$TOPPING)
        //echo $TOPPINGValues;
        // $TOPPING=$_POST['fruppings'];
        //     foreach ($TOPPING as $a=>$value) 
        //     {
        //         $two .= ', '.$value;
        //     }
        //     echo $two;
        

        // $TOPPING=$_POST['fruppings'];
        // if(!empty($_POST['fruppings'])) {
        //     // Loop to store and display values of individual checked checkbox.
        //     foreach($TOPPING as $selected) {
        //         echo $selected."</br>";
        // }
    // }

        $GARNISH=$_POST['garnishing'];
        $QUANTITY=$_POST['quantity'];

        $AMOUNT = $QUANTITY * 220;
        echo $AMOUNT;
        #$DATE=date("Y-m-d");
        #$TIME=date("H:i:s");
        $username=$_SESSION['login_user'];
        // echo "$username";
// 

        // echo "$QUANTITY";
        $query = "Insert into orders(user_uid,quantity,price,item_name,base,topping,garnish,order_DateTime)values
                                   ('$username',$QUANTITY,$AMOUNT,'Beverage','$BASE','$TOPPINGValues','$GARNISH',now())";

       # $sql = $conn -> prepare("Insert into orders(item_name,base,topping,garnish,order_time,order_date)values(:ITEMNAME,:BASE,:TOPPING,:GARNISH,:TIME,:DATE)");
//        echo "$query";

        $add = mysqli_query($conn,$query);
        $order_id = mysqli_insert_id($conn);

        $query2 = "insert into cart_temp(order_id,item_name,price,quantity)values('$order_id','Beverage',$AMOUNT,$QUANTITY)";
        $add2 = mysqli_query($conn,$query2);
        // echo("Inserted");
        // $conn->beginTransaction();
        // $sql->execute(array(':ITEMNAME' => $ITEMNAME ,
                            // ':BASE' =>$BASE,
                            // ':TOPPING' =>$TOPPING,
                            // ':GARNISH' =>$GARNISH,
                            // 'TIME' =>$TIME,
                            // 'DATE' =>$DATE));

                            // $conn->commit();
                            // $conn->null;
                  header('Location: cart_temp.php');
                  // exit;

    }

    }else {
                    $message = 'Please Login..!';
                    echo "<script type='text/javascript'>alert('$message');
                    window.location='menu.php';</script>";

                    exit();
                }




   # else($ITEMNAME=" "||$BASE=" "||$TOPPING=" "||$GARNISH=" "||$TIME=" "||$DATE=" "){
       # printf("<h2>Customization Incomplete! Do it Again..</h2>")
   # }
	
?>

<!DOCTYPE html>
<html>
<head>
    <title>beverages</title>
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
    
    <h1 ><a href="../home.php">
       <img src="logo.png" class="logo animated bounceInDown" style="height: 70px;"></a> Beverages </h1>
    <h2> Juice </h2>
    
    <form method="POST" >
    
    <fieldset>
    <div >
        <img src="bevflavor.PNG" style="float:left;width:530px;margin:20px;margin-left: 70px;height: 150px;">   

    </div>

        <div class="data">
        <legend>Select a Juice</legend>

        <div>
            <input type="radio" id="watermelon" 
                   name="juice" value="watermelon" checked />
            <label for="watermelon">Watermelon</label>
        </div>

        <div>
            <input type="radio" id="orange" 
                   name="juice" value="orange" />
            <label for="orange">Orange</label>
        </div>

        <div>
            <input type="radio" id="grape" 
                   name="juice" value="grape" />
            <label for="grape">Grape</label>
        </div>
        
        <div>
            <input type="radio" id="mango" 
                   name="juice" value="mango" />
            <label for="mango">Mango</label>
        </div>
        </div>

    </fieldset>
<!-- </form>  -->

    <h2> Garnishing </h2>
    
    <!-- <form method="POST"> -->
    <fieldset>
    <div>
        <img src="bevtoppings.PNG" style="float:left;width:530px;margin:20px;margin-left: 70px;">   

    </div>

        <div class="data">
        <legend>Select Garnishing</legend>

        <div>
            <input type="radio" id="mintleaves" 
                   name="garnishing" value="mintleaves" checked />
            <label for="mintleaves">Mint Leaves</label>
        </div>

        <div>
            <input type="radio" id="basilseeds" 
                   name="garnishing" value="basilseeds" />
            <label for="basilseeds">Basil Seeds</label>
        </div>

        <div>
            <input type="radio" id="icecreamscoop" 
                   name="garnishing" value="icecreamscoop" />
            <label for="icecreamscoop">Icecream scoop</label>
        </div>
        </div>

    </fieldset>
<!-- </form> -->

    <h2> Fruppings </h2>
    
    <!-- <form method="POST"> -->
    <fieldset>
    <div>
                <img src="bevfruppings.PNG" style="float:left;width:570px;margin:20px;margin-left: 70px;height: 150px;">   

    </div>
    <div class="data">
        <legend>Select fruppings</legend>

        <div>
            <input type="checkbox" id="kiwi" 
                   name="fruppings[]" value="kiwi" checked />
            <label for="kiwi">Kiwi</label>
        </div>

        <div>
            <input type="checkbox" id="lemon" 
                   name="fruppings[]" value="lemon" />
            <label for="lemon">Lemon</label>
        </div>

        <div>
            <input type="checkbox" id="berries" 
                   name="fruppings[]" value="berries" />
            <label for="berries">Berries</label>
        </div>
        
        <div>
            <input type="checkbox" id="grapes" 
                   name="fruppings[]" value="grapes" />
            <label for="grapes">Grapes</label>
        </div>
        
        <div>
            <input type="checkbox" id="none" 
                   name="fruppings[]" value="berries" />
            <label for="none">None</label>
        </div>
        </div>
    </fieldset>
<!-- </form> -->

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