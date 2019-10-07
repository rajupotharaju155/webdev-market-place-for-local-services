<?php

session_start();

$con = mysqli_connect('localhost','root');
if($con){
	echo" CONNECTION SUCCESULLY \n";
	echo "<br>";
}else{
	echo " no connection"; 
}
mysqli_select_db($con, 'hackathon');


$fullname = $_POST['fullname'];
$username = $_POST['username'];
$password = $_POST['pass2'];
$phone = $_POST['phone'];
$type_of_service = $_POST['type_of_service'];
$email = $_POST['email'];






$q = " select * from service  where username = '$username' && password = '$password' ";

$result = mysqli_query($con, $q);
$num = mysqli_num_rows($result);

if($num == 1){
	echo "<br>";
	echo" THIS USER ACCOUNT ALREADY EXISTS! ";
	echo "<br>";
	echo "<br>";
	echo 'PLEASE LOGIN TO CONTINUE BOOKING';
	echo "<br>";
	echo '<a href="service_login.php">LOG IN</a>';
}else{

	$qy= " insert  into service(fullname, username, password, phone, type_of_service, email) values ('$fullname' ,'$username', '$password',  '$phone', '$type_of_service' ,'$email' ) ";
	mysqli_query($con, $qy);
	$_SESSION['username'] = $username;
	header("Location: http://localhost/hackathon/index.php");
}
?>