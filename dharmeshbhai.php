<?php
session_start();
include("connection.php");
echo "Welcome user " .$_SESSION['username'];
?>


<html>
    <head>
        <title>MARKET PLACE | LOCAL BUSINESS|SERVICES</title>
<link rel="stylesheet" href="indiworker.css">
<link rel="stylesheet" href="mystyle.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href=“https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css”/>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="js/smooth-scroll.js"></script>

    </head>
    <body>
    <section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#"><img src="images/LOGO.jpeg"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                      <a class="nav-link" href="service_login.html">I have a Business!</a>
                    </li>
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">HOME</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="logout.php">LOG OUT  </a>
                </li>

                  <li class="nav-item active">
                    <a class="nav-link" href="login.html"> <?php  if(isset($_SESSION['username'])){ echo " loggedin (".$_SESSION['username']. ")";  } else{ echo "<h4> please log in </h4>"; }  ?>   </a>
                  </li>
                  <li class="nav-item active">
                        <a class="nav-link" href="#topservices">TOP SERVICES</a>
                      </li>
                <li class="nav-item">
                  <a class="nav-link" href="#browse">BROWSE BUSINESS</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">ABOUT US</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#contactus">CONTACT US</a>
                </li>
                
              </ul>
            </div>
          </nav>
    </section>
            <div class="info">
                <?php
                mysqli_select_db($con, 'hackathon');
                $sql = " select * from booking ";
	              $result = $con->query($sql);

	if ($result->num_rows > 0)
	{
    // output data of each row
   
    while($row = $result->fetch_assoc()) {
      echo "<h4>  &nbsp; Recent enquiry.. </h4> ";
      echo "<br>";

      echo "DATE OF BOOKING =  " . $row["date_of_booking"].  "    YOUR SERVICE IS SCHEDULED ON  " . $row["service_date"].  "          NAME OF CUSTOMER =        "   . $row["name_of_user"].  "      CUSTOMER PHONE NO. =      " . $row["phone"]. "    ADDRESS =    " . $row["address"]."  ";
        }
         

  }
	else {
  	  echo "0 results";
  }
  ?>

    </div>
    </body>
</html>