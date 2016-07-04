<?php
session_start();

if( !empty($_POST['user']) && !empty( $_POST['pwd'] )) {

	$user = $_POST['user'];
	$pwd = $_POST['pwd'];

	$sql = "select * from users where username = '$user' and password='$pwd'";
echo $sql;
	$con=mysql_connect("localhost","root","student");
	if(!$con){
		die("Could not connect to database".mysql_error());
	}
	mysql_select_db("rt123",$con);

	$res = mysql_query( $sql , $con );

	if( mysql_num_rows( $res ) > 0  ) {
		$_SESSION['user'] = $user;
		$row=mysql_fetch_array($res);
		$_SESSION['userid'] = $row["id"];
		header('Location: welcome.php');
	}
}

echo "<h1 align='center' style='color:red'>In Valid User</h1>";
?>
