<?php
  $hostname="localhost";
  $db="hungrykya";
  $Username="root";
  $Password="dpm";
  
  $conn = mysqli_connect('localhost','root','dpm','hungrykya');
  if(!$conn){
		die("Connection failed! : " .mysqli_connect_errno);
	}else{
		
	}
  
  if(!empty($_GET['q']))
  {
  	
  	$q=$_GET['q'];
  	
  	//$query= "SELECT * from users where user_email like '%q%'";
  	$query= "SELECT * from users where user_first like '$q%' ";
  	$result=mysqli_query($conn,$query);

  	echo '
  	<table class="customers">
  								
							  <tr>
							    <th>Username</th>
                                <th>first name</th>
                                <th>last name</th>
                         	    <th>email</th>
                                <th>phone</th> 
                                <th>address</th>
							  </tr>
							  ';
							  


  	

  	while($output=mysqli_fetch_assoc($result))
  	{
  	

						
						echo "<tr align='center' >";
							
							echo "<td >" . $output['user_uid'] . "</td>";
							echo "<td>" . $output['user_first'] . "</td>";
							echo "<td>" . $output['user_last'] . "</td>";
							echo "<td>" . $output['user_email'] . "</td>";
							echo "<td>" . $output['user_ph'] . "</td>";
							echo "<td>" . $output['user_address'] . "</td>";
							echo "</tr>";
							echo "</table>";
							
  		

  	
  	}
  	
  	
  	
  }
?>