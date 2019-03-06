<?php

session_start();
  $hostname="localhost";
  $db="hungrykya";
  $Username="root";
  $Password="dpm";
  
  $conn = mysqli_connect('localhost','root','dpm','hungrykya');
  
  if(!$conn){
    die("Connection failed! : " .mysqli_connect_errno);
  }else{
    echo("Connection established..");
  }

if(isset($_POST['thankyou'])){

    sleep(10);
  echo "Button clicked";
        $sql = "truncate table cart_temp;";
        // echo $sql;
      $result = mysqli_query($conn, $sql);

      header('Location:../wel.php');
}


?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
/*  margin: 0 -16px;
*/  margin: 0 120px 80px 120px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 5px 5px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
 -webkit-border-radius: 6px;
 cursor: pointer;
  color: white;
  padding: 12px;
  margin: 10px 0;
   margin-left: 350px;
  width: 300px;
  cursor: pointer;
  font-size: 17px;
  background-color:#ef4300;

}

.btn:hover {
 
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}

h2   {background-color:  #ff00aa;
  color: #fff;
  font-size: 50px;
  margin-bottom: 50px;
  text-transform: uppercase;
  font-weight: lighter;
  text-align: center;}

  body {
    background-image: linear-gradient(to top, #feada6 0%, #f5efef 100%);
  }


  .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
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
    border: 1px solid #888;
    width: 80%;
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
<body>

<h2 style="text-align: center;"><a href="../home.php">
       <img src="logo.png" class="logo animated bounceInDown" style="height: 70px;"></a>Payment Details</h2>

<div class="row">
  <div class="col-75">
    <div class="container">
      <form method="POST">
      
        <div class="row">
          <!-- <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Your Name?">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="Your Email?">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="You live at?">
            
            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="State?">
              </div>
              <div class="col-50">
                <label for="zip">Pin Code</label>
                <input type="text" id="zip" name="zip" placeholder="Pin Code?">
              </div>
            </div>
          </div> -->

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="Name on card" required> 
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="Credit card number" required>
            <label for="expmonth">Expiry Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="Expiry month" required>
            <div class="row">
              <div class="col-50">
                <label for="expyear">Expiry Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="Expiry year" required>
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="CVV" required>
              </div>
            </div>
          </div>
          
        </div>
        <!-- <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label> -->
<!--         <input type="submit" value="Continue to checkout" id="myBtn" class="btn">
 -->        <button id="myBtn" name="thankyou" class="btn"><b>Continue to checkout</b></button>

            <div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <h4 style="text-align: center;color:#36031C;">Hooray..!Your order has been placed.<br>
      Thankyou for ordering with us..<br>Visit Again..<img src="https://png.icons8.com/ios/24/f39c12/happy-filled.png"></h4>
  </div>

</div>

      </form>


    </div>
  </div>
  
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

<!-- <script type="text/javascript">
   $(".success").click(function(){
    toastr.success('Payment Successful..!', 'Success Alert', {timeOut: 5000})
   });
</script> -->

</body>
</html>
