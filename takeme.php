<?php

session_start();


$con = mysqli_connect('localhost','root');
if($con){
	echo" connnection succesfull <br> <br> ";
}else{
	echo " no connection"; 
}

mysqli_select_db($con, 'hackathon');

$name = $_POST['myCountry'];

        if($name == "Plumber"){      
            header("Location: http://localhost/hackathon/plumber.html"); 
        }
        if ($name == "Painter"){   
            header("Location: http://localhost/hackathon/painter.html");    
        }
        if ($name == "Electrician"){   
            header("Location: http://localhost/hackathon/electrician.html");    
        }
?>
