<?php
  $hostname="localhost";
  $db="hungrykya";
  $Username="root";
  $Password="dpm";
  
  $conn = mysqli_connect('localhost','root','dpm','hungrykya');
  
  if(!empty($_GET['p']))
  {
  	
  	$p=$_GET['p'];
    
  	
  	//$query= "SELECT * from users where user_email like '%q%'";
  	$query= "SELECT * from orders where DATE(order_DateTime) = '$p';";
  	$result=mysqli_query($conn,$query);

  	echo '
  	<table class="customers">
  								
							  <tr>
							                 <th>order id</th>
                                <th>username</th>
                                <th>quantity</th>
                         	    <th>item name</th>
                                <th>base</th> 
                                <th>topping</th>
                                <th>sauce</th>
                                <th>garnish</th>
                                <th>order date and time</th>
                                <th>order status</th>
							  </tr>
							  ';
							  


  	

  	while($output=mysqli_fetch_assoc($result))
  	{
  	

						
						echo "<tr align='center' >";
							
							echo "<td >" . $output['order_id'] . "</td>";
							echo "<td>" . $output['user_uid'] . "</td>";
							echo "<td>" . $output['quantity'] . "</td>";
							echo "<td>" . $output['item_name'] . "</td>";
							echo "<td>" . $output['base'] . "</td>";
							echo "<td>" . $output['topping'] . "</td>";
              echo "<td>" . $output['sauce'] . "</td>";
              echo "<td>" . $output['garnish'] . "</td>";
              echo "<td>" . $output['order_DateTime'] . "</td>";
              echo "<td>" . $output['order_status'] . "</td>";
							echo "</tr>";
							echo "</table>";
							
  		

  	
  	}
  	
  	
  	
  }
?>