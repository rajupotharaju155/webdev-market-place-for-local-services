<?php
session_start();

if(isset($_SESSION['username'])){
    session_destroy();
    header("Location: http://localhost/hackathon/index.php");
}
else{
    header("Location: http://localhost/hackathon/index.php");
}