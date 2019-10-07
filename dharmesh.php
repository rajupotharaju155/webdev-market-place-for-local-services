<?php
session_start();
include("connection.php");
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
     <!---------------------Navigation Bar-------------------->
    <!---------------------Navigation Bar-------------------->
    <section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#"><img src="images/LOGO.jpeg"></a>
            
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                      <a class="nav-link" href="checkactive.php" > I have a Business!</a>
                    </li>
                <li class="nav-item active">
                  <a class="nav-link" href="#topper">HOME</a>
                </li>
                <?php  if(isset($_SESSION['username'])){
                echo " <li class=\"nav-item active\"> 
                  <a class=\"nav-link\" href=\"logout.php\"> LOG OUT(" .$_SESSION['username']. ") </a> 
                </li> ";
                }else{ 
                 echo " <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"login.html\"> LOG IN </a>
                  </li> ";
                } ?>
                  <li class="nav-item active">
                        <a class="nav-link" href="#topservices">TOP SERVICES</a>
                      </li>
                <li class="nav-item">
                  <a class="nav-link" href="#browse">BROWSE BUSINESS</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#aboutus">ABOUT US</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#contactus">CONTACT US</a>
                </li>
                
              </ul>
            </div>
          </nav>
    </section>
<section id="price">
        <div class="container">
          <h1>Dharmesh Mishra</h1>
          <div class="pro">
              <img src="images/painter.jpg" alt="">
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="single-price">
                <div class="price-head">
                  <h2>Painter <br>Specialist Wall art, Ceiling paint </h2>
                  <p>Rs. 500/<span>hour</span></p>
                </div>
                <div class="price-content">
                  <ul>
                    <li> <i class="fa fa-check-circle"></i> Monday   &nbsp; &nbsp; 9AM - 6PM </li>
                    <li><i class="fa fa-check-circle"></i> Tuesday &nbsp; &nbsp; 9AM - 6PM</li>
                    <li><i class="fa fa-check-circle"></i> Wednesday &nbsp; &nbsp; 9AM - 6PM</li>
                    <li><i class="fa fa-times-circle"></i>Thursday</li>
                    <li><i class="fa fa-check-circle"></i> Friday &nbsp; &nbsp; 9AM - 6PM</li>
                    <li><i class="fa fa-times-circle"></i> Saturday</li>
                    <li><i class="fa fa-check-circle"></i>Sunday &nbsp; &nbsp; 9AM - 6PM</li>
                </ul>
                </div>
              </div>
            </div>
            <div class="col-md-4 book">
                    <form  method="POST" action="booking.php" >
                        <h2>Book the service men!</h2>
                        Name: <br> <input type="text" name = "name" placeholder="Please enter your name" required  > <br> <br>
                        Date:(When service is required) <br> <input type="date" name="date" required > <br> <br>
                        Time: <br> <select name="time"  required >
                            <option value="" > Please choose </option>
                            <option value="9-10am">9-10am</option>
                            <option value="9-10am">10-11am</option>
                            <option value="9-10am">11-12pm</option>
                            <option value="9-10am">12-1pm</option>
                            <option value="9-10am">1-2pm</option>
                            <option value="9-10am">2-3pm</option>
                            <option value="9-10am">3-5pm</option>
                            <option value="9-10am">5-6pm</option>
                            <option value="9-10am">6-7pm</option> 
                        </select> <br> <br>
                        Phone: <br> <input type="text"  name="phone" size="43
                        " placeholder="Phone number(will be displayed to service men)"  required /> <br><br>
                        Addres: <br><textarea name="address" cols="30" rows="4" required ></textarea>
                        <br><br>
                        <input type="submit" >
                    </form>
                  </div>


          </div>
          
        </div>
</section>