<?php
session_start();
include("connection.php");
?>
<html>
    <head>
        <title>MARKET PLACE | LOCAL BUSINESS|SERVICES</title>
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
    <!----------------------topper-------------------------------->
<section id="topper">
  <div class="container1">
      <div class="logo">
              <img src="images/LOGO.jpeg" alt="">
      </div>
        <div class="search">
          <div class="autocomplete" >
                <form name="frm" action="takeme.php"  method="POST">
                    <input type="text" placeholder="   servics | location "  id="myInput"  name="myCountry"   size="100"> 
                    <button type="submit"  >
                      <div class="icon">
                            <a href=""><i class="fa fa-search"></i></a>
                      </div> 
                   </button>        
                 </form>

            </div>
                 
        </div>
  </div>
</section>
    <!-----------------------top services----------------------->
    <section id="topservices">
        <div class="container">
            <h1>Top Services</h1>
            <div class="row ">
                    <div class="col-md-3 profile-pic text-center">
                            <div class="img-box" style="color: black !important; background-color: black !important; ">
                           <a href="#"><img src="images/cleaning.jpg" class="img-responsive"></a> 
                            </div>
                            <h2>Sudheer Sharma</h2>
                            <h3>House interior cleaner</h3>
                            <p> sofa, floor, ceiling, bathroom, kitchen cleaning </p>
                    </div>
                    <div class="col-md-3 profile-pic text-center">
                           <div class="img-box">
                            <a href=""> <img src="images/elec.jpg" class="img-responsive"></a> 
                           </div>
                           <h2>Akshay Singh</h2>
                           <h3>Electrician</h3>
                           <p> Specialist in new connection, Avaiable 24x7</p>
                    </div>
                    <div class="col-md-3 profile-pic text-center">
                           <div class="img-box">
                            <a href=""><img src="images/painter.jpg" class="img-responsive"></a> 
                           </div>
                           <h2> Babu Bhaiya </h2>
                           <h3> Painter</h3>
                           <p> Specialist in wall art, <br> ceiling paint </p>
                    </div>
                    <div class="col-md-3 profile-pic text-center">
                            <div class="img-box">
                              <a href=""><img src="images/plumber.jpg" class="img-responsive"></a>
                            </div>
                            <h2> Ramesh Mishra</h2>
                            <h3>Plumber</h3>
                            <p> Terrace tank fitting, <br> house hold pipe fitting </p>
                     </div>
            </div>
        </div>
    </section>
<!---------------Browse by business------------------------->

  <section id="browse">
    <div class="container">
        <h1>Browse by service</h1>
        <div class="row row1">
            <div class="col-md-3">
                    <div class="single-box">
                        <a href="electrician.php"><div class="icon1">
                             <i class="fa fa-plug"></i>
                        </div>
                                 </a>
                         <h5>Electrician</h5>  
                    </div>
            </div>
            <div class="col-md-3">
                    <div class="single-box">
                       <a href="painter.php"> <div class="icon1">
                                <i class="fa fa-paint-brush"></i>
                        </div> </a>
                         <h5>Painter</h5>  
                    </div>
            </div>
            <div class="col-md-3">
                    <div class="single-box">
                      <a href="plumber.html"> <div class="icon1">
                                <i class="fa fa-shower"></i>
                        </div> </a> 
                        <h5>Plumber</h5>  
                    </div>
            </div>
            <div class="col-md-3">
                    <div class="single-box">
                        <a href="#">  <div class="icon1">
                                <i class="fa fa-tv"></i>
                        </div> </a>
                         <h5>TV Repairing</h5>  
                    </div>
            </div>
            
    </div>

    <div class="row row1">
            <div class="col-md-3">
                    <div class="single-box">
                        <a href="#">  <div class="icon1">
                                <i class="fa fa-car"></i>
                        </div> </a>
                         <h5>Car Mechanic</h5>  
                    </div>
            </div>
            <div class="col-md-3">
                    <div class="single-box">
                        <a href="#"> <div class="icon1">
                                <i class="fa fa-truck"></i>
                        </div> </a>
                         <h5>Packers & Movers</h5>  
                    </div>
            </div>
            <div class="col-md-3">
                    <div class="single-box">
                        <a href="#">  <div class="icon1">
                                <i class="fa fa-unlock-alt"></i>
                        </div> </a>
                        <h5>Lock Smith</h5>  
                    </div>
            </div>
            <div class="col-md-3">
                    <div class="single-box">
                        <a href="#">   <div class="icon1">
                                        <i class="fa fa-battery-quarter"></i>
                        </div> </a>
                         <h5>Battery service</h5>  
                    </div>
            </div>
            
    </div>

</section>
<!-------------ABOUT US------------>
<section id="aboutus" >
<div class="container">
  <h2>About Us</h2>
    <h3> Developed by</h3>
     <h4>Komal Swain</h4>
     <h5>Student, TE, UMIT</h5>
     <h4> Raju Potharaju</h4>
     <h5>Student, TE, ACE</h5>
    <a href="#" class="btn btn-primary">Contact us</a>
</div>
</section>








<!-----------------CONTACT US------------------------->
<section id="contactus">
    <div class="container">
        <h1>CONTACT US</h1>
        <div class="contact-box">
            <div class="row">
                <div class="col-md-4 email">
                        <label>Name</label>
                        <input type="text" size="20"> 
                </div>
                <div class="col-md-4 email">
                        <label>Email</label>
                        <input type="text"> 
                </div>
                <div class="col-md-4 email">
                        <label>Phone</label>
                        <input type="text" > 
                </div>
            </div>
            <div class="abc">
                    <label>Message</label> <br>
                    <textarea name="" id="" cols="72" rows="10"></textarea> <br>
                    <a href="#" class="btn btn-primary">SEND FORM</a>
                
                
            </div>
                
        </div>
    </div>
</section>

<script>
        var scroll = new SmoothScroll('a[href*="#"]');
    </script>
    



    <script>


function myfun()
  {
    var str = "goto";
    var result1 = str.link("painter.html");
    document.getElementById("demo").innerHTML = result1;
  }
                function autocomplete(inp, arr) {
                  /*the autocomplete function takes two arguments,
                  the text field element and an array of possible autocompleted values:*/
                  var currentFocus;
                  /*execute a function when someone writes in the text field:*/
                  inp.addEventListener("input", function(e) {
                      var a, b, i, val = this.value;
                      /*close any already open lists of autocompleted values*/
                      closeAllLists();
                      if (!val) { return false;}
                      currentFocus = -1;
                      /*create a DIV element that will contain the items (values):*/
                      a = document.createElement("DIV");
                      a.setAttribute("id", this.id + "autocomplete-list");
                      a.setAttribute("class", "autocomplete-items");
                      /*append the DIV element as a child of the autocomplete container:*/
                      this.parentNode.appendChild(a);
                      /*for each item in the array...*/
                      for (i = 0; i < arr.length; i++) {
                        /*check if the item starts with the same letters as the text field value:*/
                        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                          /*create a DIV element for each matching element:*/
                          b = document.createElement("DIV");
                          /*make the matching letters bold:*/
                          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                          b.innerHTML += arr[i].substr(val.length);
                          /*insert a input field that will hold the current array item's value:*/
                          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                          /*execute a function when someone clicks on the item value (DIV element):*/
                          b.addEventListener("click", function(e) {
                              /*insert the value for the autocomplete text field:*/
                              inp.value = this.getElementsByTagName("input")[0].value;
                              /*close the list of autocompleted values,
                              (or any other open lists of autocompleted values:*/
                              closeAllLists();
                          });
                          a.appendChild(b);
                        }
                      }
                  });
                  /*execute a function presses a key on the keyboard:*/
                  inp.addEventListener("keydown", function(e) {
                      var x = document.getElementById(this.id + "autocomplete-list");
                      if (x) x = x.getElementsByTagName("div");
                      if (e.keyCode == 40) {
                        /*If the arrow DOWN key is pressed,
                        increase the currentFocus variable:*/
                        currentFocus++;
                        /*and and make the current item more visible:*/
                        addActive(x);
                      } else if (e.keyCode == 38) { //up
                        /*If the arrow UP key is pressed,
                        decrease the currentFocus variable:*/
                        currentFocus--;
                        /*and and make the current item more visible:*/
                        addActive(x);
                      } else if (e.keyCode == 13) {
                        /*If the ENTER key is pressed, prevent the form from being submitted,*/
                        e.preventDefault();
                        if (currentFocus > -1) {
                          /*and simulate a click on the "active" item:*/
                          if (x) x[currentFocus].click();
                        }
                      }
                  });
                  function addActive(x) {
                    /*a function to classify an item as "active":*/
                    if (!x) return false;
                    /*start by removing the "active" class on all items:*/
                    removeActive(x);
                    if (currentFocus >= x.length) currentFocus = 0;
                    if (currentFocus < 0) currentFocus = (x.length - 1);
                    /*add class "autocomplete-active":*/
                    x[currentFocus].classList.add("autocomplete-active");
                  }
                  function removeActive(x) {
                    /*a function to remove the "active" class from all autocomplete items:*/
                    for (var i = 0; i < x.length; i++) {
                      x[i].classList.remove("autocomplete-active");
                    }
                  }
                  function closeAllLists(elmnt) {
                    /*close all autocomplete lists in the document,
                    except the one passed as an argument:*/
                    var x = document.getElementsByClassName("autocomplete-items");
                    for (var i = 0; i < x.length; i++) {
                      if (elmnt != x[i] && elmnt != inp) {
                        x[i].parentNode.removeChild(x[i]);
                      }
                    }
                  }
                  /*execute a function when someone clicks in the document:*/
                  document.addEventListener("click", function (e) {
                      closeAllLists(e.target);
                  });
                }
                
                /*An array containing all the country names in the world:*/
                var countries = ["Painter","Carpenter","Pest control","Plumber","Driver","Electrician","Cleaner","House hold cleaner","TV repair","Auto Mechanic","Aoto Battery service","Lock smith","Packers & Movers","Car Mechanic","Zimbabwe"];
                
                /*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
                autocomplete(document.getElementById("myInput"), countries);
                </script>
                




</body>
</html>
