<?php


$title = "New Contact:Registration";
$heading = "REGISTERED";
include 'header.php';
echo "<div style='margin:100px 0 100px 0; display:block'>";


if(!empty($_POST['fname']) && !empty($_POST['email']) && !empty( $_POST['usname']) && !empty($_POST['Pwd']) ) {
	
	$fn=$_POST['fname'];
	$ln=$_POST['lname'];
	
	$gn=$_POST['Gender'];
	$em=$_POST['email'];
	$cn=$_POST['contact'];
	$un=$_POST['usname'];
	$pwd=$_POST['Pwd'];
	
	
	
	$sql="insert into users(fname,lname,Gender,email,contact,username,password) values('$fn','$ln','$gn','$em','$cn','$un','$pwd')";
	$con=mysql_connect("localhost","root","student");
	
	if(!$con){
		die("Could not connect to database".mysql_error());
		exit(0);
	}
	mysql_select_db( "rtcamp123", $con );
	
	if( mysql_query( $sql, $con ) ) {
		
		echo "<h1 align='center' style='color:red'>YOU ARE REGISTERED SUCCESSFULLY.</h1>";
		
	} else {
		
		echo "error while saving contact".mysql_error();
		
	}
	
} else {
	
	echo "<h1 align='center' style='color:red'>In Valid Form Data</h1>";
	
}

echo "<a href='login.php'>CLICK HERE FOR LOGIN</a>";
echo "</div>";
include 'footer.php';

?>

