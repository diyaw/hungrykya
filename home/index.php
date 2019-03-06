<?php
		include_once 'header.php';
?>

	<section class="main-container" >
		<div class="main-wrapper" >
			
			<?php
				//if(isset($_SESSION['u_id'])){
				//	echo "logged in !";
				//	echo $_SESSION['u_uid'];
				//}
				if(isset($_SESSION['login_user'])){
					
					header("Location: wel.php ");
					
				}
				
			?>
			
		</div>
		
	</section>
<?php
		include_once 'footer.php';
?>

