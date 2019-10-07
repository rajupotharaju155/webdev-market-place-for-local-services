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

$name = $_POST['name'];
$service_date = $_POST['date'];
$time = $_POST['time'];
$phone = $_POST['phone'];
$address = $_POST['address'];



$q = "insert into booking (date_of_booking, service_date, name_of_user, time, phone, address) values (NOW(),'$service_date', '$name', '$time', '$phone', '$address') ";
mysqli_query($con, $q);
echo "<br>";
	echo "<br>";
	echo "Inserted SUCCESSFULLY $name";
	echo "<br>";
	echo "<br>";
	echo '<a href="index.php">back to home page</a>';
    
?>