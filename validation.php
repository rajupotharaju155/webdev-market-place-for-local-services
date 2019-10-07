<?php
session_start();
$con = mysqli_connect('localhost','root');
if($con){
	echo" connnection succesfull <br> <br> ";
}else{
	echo " no connection"; 
}

mysqli_select_db($con, 'hackathon');

$username = $_POST['username'];
$password = $_POST['password'];



$q = " select * from user  where username = '$username' && password = '$password' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1)
{
	$_SESSION['username'] = $username;
	$_SESSION['loggedin'] = true;
    header("Location: http://localhost/hackathon/index.php");
	
}
else{
	echo "<br>";
	echo "<br>";
	echo("ACCOUNT NOT REGISTERED !");
	echo "<br>";
	echo "<br>";
	echo "OR";
	echo "<br>";
	echo "<br>";
	echo "	INVALID CREDENTIALS ";
	echo "<br>";
	echo "<br>";
	echo "PLEASE REGISTER FIRST  ";
	echo '<a href="signup.html">REGISTER HERE</a>';
	
}


?>