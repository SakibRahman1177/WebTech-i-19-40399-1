<!DOCTYPE HTML>  
<html>
<head>
  <title>Form Login</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style2.css">
<style>
  /*create a form box*/
  .form{
    font-family: "Roboto", sans-serif;
    background: #FFFFFF;
    max-width: 400px;
    margin: 50px auto 100px;
    padding: 10px 45px 30px 45px;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    border-radius: 10px;
  }
  /*add a background picture and declaring a size*/
  body{
    background-image: url('Sources/covid-19.jpg');
    background-repeat: no-repeat;
    background-size: 1600px 780px;
    }
</style>
</head>
<body>
<div class="topnav">
  <a style="float: left;font-style: italic;font-size: 20px;">Covid-19 Test</a>
  <div style="float: right;">
  <a href="WebHome.php">Home</a>
  <a class="active" href="Login.php">Login</a>
  <a href="RegistrationForm.php">Registration</a></div>
</div>
 <div><?php include 'Sources/AccountDesign.php';?></div>  
<div class="form">
<form  method="post" enctype="multipart/form-data" action="controller/LoginController.php"> 
<h2 style="font-size: 50px;">Login</h2>
  <hr>
  User Name: 
  <input type="text" size= "30" name="username" placeholder="Enter your name" >
  <br><br>

  Password:
  <input type="password" size="30" name="password" placeholder="Enter your password" >
  
  <br>
  <hr>

  <input type="submit" name="submit" value="Submit" size="30">&nbsp;
  <a href="ForgotPassword.php" class="active" style="font-size: 17px;color: #4169E1;">Forgot password?</a><br><br><br>
  <p style="font-style: italic;font-size: 15px;">Don't have an account?&nbsp;<a href="RegistrationForm.php" class="active" style="font-size: 15px;color: #4169E1;">Sign Up</a></p> 
</form></div><br>
<div>
  <?php include 'Sources/footer.php';?></div><hr>
</div>

</body>
</html>