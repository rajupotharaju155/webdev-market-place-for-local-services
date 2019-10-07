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
$emailid = $_POST['email'];
$phone = $_POST['phone'];
$username = $_POST['username'];
$address = $name = $_POST['address'];
$password = $_POST['pass2'];


$q = " select * from user  where username = '$username' && password = '$password' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
	echo "<br>";
	echo" THIS USER ACCOUNT ALREADY EXISTS! ";
	echo "<br>";
	echo "<br>";
	echo 'PLEASE LOGIN TO CONTINUE BOOKING';
	echo "<br>";
	echo '<a href="login.html">LOG IN</a>';
}else{

	$qy= " insert  into user(fullname, emailid, phone, address, password, username) values ('$fullname' , '$emailid', '$phone' , '$address', '$password' , '$username') ";
	mysqli_query($con, $qy); 
	header("Location: http://localhost/hackathon/index.php");
}
?>