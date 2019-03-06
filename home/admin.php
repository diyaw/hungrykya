<?php
    session_start();
    if(isset($_SESSION['login_user'])){
  $hostname="localhost";
  $db="hungrykya";
  $Username="root";
  $Password="dpm";
  
  $conn = mysqli_connect('localhost','root','dpm','hungrykya');
  
  if(!$conn){
    die("Connection failed! : " .mysqli_connect_errno);
  }else{
    echo(".");
  }

  }else {
                    header('Location: index.php');
                    $message = 'Please Login..!';
                    echo "<script type='text/javascript'>alert('$message');</script>";


                    exit();

                }
        if(isset($_POST['submit'])){
        

        $EMAIL = $_POST['email'];
        $COINS = $_POST['coins'];

        $query = "SELECT * FROM users WHERE user_email = '$EMAIL'";
        

        $res = mysqli_query($conn, $query);
        if(!$res){
          die("Query failed due to".mysqli_error($conn));
        }
        $rowCount = mysqli_num_rows($res);
        
        if($rowCount==1){
          $query = "UPDATE users SET user_wallet = user_wallet+$COINS WHERE user_email= '$EMAIL'";
          $result = mysqli_query($conn,$query);
          $added = "Coins added";
          echo "<script type='text/javascript'>alert('$added');</script>";
        }
      else{ 
      $message = "Please Check the user email.It does not exist!..Coins not added.";
      echo "<script type='text/javascript'>alert('$message');</script>";
    }
      
    }

    if(isset($_POST['submit1'])){
        

        $ORDER_ID = $_POST['order_id'];
        $ORDER_STATUS = $_POST['order_status'];

        $query = "SELECT * FROM orders WHERE order_id = $ORDER_ID ;";
        

        $res = mysqli_query($conn, $query);
        if(!$res){
          die("Query failed due to".mysqli_error($conn));
        }
        $rowCount = mysqli_num_rows($res);
        
        if($rowCount==1){
          $query = "UPDATE orders SET order_status = '$ORDER_STATUS' WHERE order_id= $ORDER_ID ;";
          $result = mysqli_query($conn,$query);
          $added = "order status updated";
          echo "<script type='text/javascript'>alert('$added');</script>";
        }
      else{ 
      $message = "Please Check the order id";
      echo "<script type='text/javascript'>alert('$message');</script>";
    }
      
    }



    if(isset($_POST['submit2'])){
         // echo ("Button clicked");

         $EMAIL = $_POST['email'];

         $query = "SELECT * FROM users WHERE user_email = '$EMAIL'";
        //echo $query;

        $res = mysqli_query($conn, $query);
        if(!$res){
          die("Query failed due to".mysqli_error($conn));
        }
        $rowCount = mysqli_num_rows($res);
        //echo"row count is ".$rowCount;
        if($rowCount==1){
          $query = "DELETE FROM users WHERE user_email= '$EMAIL'";
          $result = mysqli_query($conn,$query);
          $delete = "Deleted";
          echo "<script type='text/javascript'>alert('$delete');</script>";

        }
        else{
           $message2 = "Please check the user email,it does not exits. User not removed.";
           echo "<script type='text/javascript'>alert('$message2');</script>";
// echo "<script type= 'script/javascript'>alert('message2');</script>";
    }
      
    }
    ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="admin.css">
	<title>Admin Page</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0" charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
	
  <link rel="icon" href="logo.png">

</head>
<body>
  <div class="main">
  <h2>Welcome Admin</h2>
</div>
	<div class="sidenav">
	
  <a href="home.php"><button style="background-color:black; color:white; text-align:center;width: 190px; height:45px; font-size:22px;margin-left:-12px; cursor: pointer;" class=" ">Back to website</button></a>
  <button class="open-button" onclick="openForm()">Add Coins</button>

  <div class="form-popup" id="myForm">
    <form method="POST" class="form-container">

    <label for="email"><b>Email id</b></label>
    <input type="text" placeholder="Enter email id" name="email" required><br><br>

    <label  for="email"><b>coins</b></label>
    <input style="display: block; width: 270px;" type="number" placeholder="Enter coins" name="coins" required><br><br>
    

    
    

    <button type="submit" class="btn" name="submit"><b>Submit</b></button>
    <button type="button" class="btn cancel" onclick="closeForm()"><b>Close</b></button>
    </form>
  </div>

  <button class="open-button" onclick="openForm1()"> Order Status</button>

  <div class="form-popup1" id="myForm1">
    <form method="POST"  class="form-container">

    <label for="orderid"><b>Order ID</b></label>
    <input type="text" placeholder="Enter order-id" name="order_id" required>

    <label for="status"><b>Status</b></label>
    <br>
    <br>
    <input type="text" placeholder="Enter order-status" name="order_status" ><br>
    

    <br>
    
    <button type="submit" class="btn" name="submit1"><b>Submit</b></button>
    <button type="button" class="btn cancel" onclick="closeForm1()"><b>Close</b></button>

  </form>
  </div>

  
    
  
<button class="open-button" onclick="openForm2()">Remove User</button>

  <div class="form-popup2" id="myForm2">
    <form method="POST"  class="form-container">

    <label for="email"><b>Email id</b></label>
    <input type="text" placeholder="Enter email id" name="email" required>

    <label for="psw"><b>Remove User</b></label>
    <br>
    
    
    <br>
    
    
    <button type="submit" class="btn" name="submit2"><b>Submit</b></button>

    <button type="button" class="btn cancel" onclick="closeForm2()"><b>Close</b></button>
    </form>
</div>



	  <?php
  echo '<form action="includes/logout.inc.php" method="POST" >
            <button style="background-color:black; color:white; text-align:center;width: 150px; height:45px; font-size:22px;margin:10px;" type="sumbit" name="submit" >Logout</button>
            
          </form>';
  ?>
  
  </div>


  <script>
function showHint(str) {
    if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "fetch.php?q=" + str, true);
        xmlhttp.send();
    }
}
</script>


<p><b>Start typing a name in the input field below:</b></p>
<form> 
search user: <input type="text" onkeyup="showHint(this.value)">
</form>
<div >Your Customers: <table style="background-color: #f2f2f2;" class="customers" id="txtHint"></table></div>

<p><b>Enter date in format YYYY-MM-DD :</b></p>
<form> 
search orders: <input type="text" onkeyup="showHint2(this.value)">
</form>
<div >Your Orders: <table style="background-color: #f2f2f2;padding: 500px;" class="customers" id="txtHint2"></table></div>

<script>
function showHint2(str) {
    if (str.length == 0) { 
        document.getElementById("txtHint2").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint2").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "fetch2.php?p=" + str, true);
        xmlhttp.send();
    }
}
</script>


<script>
function openForm() {
    document.getElementById("myForm").style.display = "block";
}

function closeForm() {
    document.getElementById("myForm").style.display = "none";
}

function openForm2() {
    document.getElementById("myForm2").style.display = "block";
}


function closeForm2() {
    document.getElementById("myForm2").style.display = "none";

}

function openForm1() {
    document.getElementById("myForm1").style.display = "block";
}

function closeForm1() {
    document.getElementById("myForm1").style.display = "none";
}




</script>






  </body>
</html>