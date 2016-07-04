<?php

session_start();
if( !isset( $_SESSION['user'] ) ) {
	header('Location: login.php');
}
?>
 
<?php 
	$title = "Twitter";
	$heading = "Home";
	include 'header.php';
?>
       	<div style="margin:100px 0 100px 0; display:block" >
        <h1>Welcome <?php echo $_SESSION['user'] ?></h2>
            <p>Today's Date : <?php echo date('l n F Y') ?></p>	

	
		
        


</div>
        
       
		
        
<?php include 'footer.php' ?>
