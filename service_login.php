
<!DOCTYPE HTML>
<html>
<head>
  <title>Login123</title>
  <link rel="stylesheet" type="text/css" href="login_style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
</head>

<body>

<div class="logo">
        <img src="images/LOGO.jpeg" alt="">
</div>
<div class="login-page">
  <h3>SERVICE LOGIN</h3>
  <div class="form">
    <form action="service_validation.php" method="POST" >
      <input type="text" placeholder="&#xf007;  username" name="username" required/>
      <input type="password" placeholder="&#xf023;  password"  name="password" required   />
      <button type="submit">LOGIN</button>
      <p class="message"> Dont have an account?</p>
    </form>
    <form class="login-form">
       <a href="service_signup.html"> <button type="button" > SIGN UP</button> </a>
    </form>
  </div>
</div>

</body>
</html>

