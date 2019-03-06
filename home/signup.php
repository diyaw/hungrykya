<?php
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<html>
<head><title>ADD</title>
<link href="signup.css" rel="stylesheet" type="text/css" />
<style>
    @media screen and (max-width: 600px) {
    .place {
       width: 100%;
       text-align:center;
    }
}
</style>


</head>
<body>


<div class="page-container">

            
            <form action="includes/signup.inc.php" method="POST">
            <a href="home.php">
                            <h1 style="color: black;"><img src="logo.png" class="logo animated bounceInDown" style="height: 70px; margin-left: 0px;"></a>Sign Up</h1>
                <input type="text" name="first" class="Name" placeholder="Firstname">
                <input type="text" name="last" class="Name" placeholder="Lastname">
                <input type="text" name="email" class="Email" placeholder="E-mail">
                <input type="text" name="uid" class="Name" placeholder="Username">
                <input type="text" name="address" class="Name" placeholder="Address">
                <input type="tel" name="phone" class="Tele" placeholder="Phone No.">
                
                <input type="password" name="password" class="Address" placeholder="Set Password">
                <div class="place">
                <button type="submit" value="Add" name="submit">Submit</button>
                
                </div>
            </form>
            <div class="place">
                <div style="margin-bottom:200px;">
                    <a href="index.php"><button style="" class="btn1">Cancel</button></a>
                </div>
            </div>
        </div>
        

</body>
</html>