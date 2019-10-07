
<?php  

session_start();
include("connection.php");

if(isset($_SESSION['username']))
        {
          echo "<script> alert(\"You Are already logged in as user\");
          window.location.href='http://localhost/hackathon/index.php';
          </script> ";
        }
        else{
            header("Location: http://localhost/hackathon/service_login.php");
        }
?>