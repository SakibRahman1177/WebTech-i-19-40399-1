<!DOCTYPE HTML>  
<html>
<head>
  <title>Form Login</title>
<style>
  .error {
    color: #FF0000;
    font-size: 14px;  }
  .form{
    font-family: "Roboto", sans-serif;
    background: #FFFFFF;
    max-width: 260px;
    margin: 50px auto 50px;
    padding: 10px 45px 30px 45px;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    border-radius: 10px;
  }
  h2{  font-style: bold;
       font-size: 40px;
       text-align: center; }
  form{ padding-top: 30px;
        font-size: 20px;}
  input{
       height: 20px;
       border: 2px solid #ddd;
       border-radius: 2px;
       padding: 4px;
       background-color: #fff;
       box-shadow: inset 1px 1px 3px rgba(0,0,0,0.2);
  }
    input[type="submit"] {
    padding: 0px 25px;
    background-color: green;
    border: 2px;
    color: #fff;
    margin-left: 5px;
    border-radius: 2px;
    margin-bottom: 4px;
}


</style>
</head>
<body>  
<div class="topnav">
  <a style="float: left;font-style: italic;font-size: 20px;">Covid-19 Test</a>
  <div style="float: right;">
  <a href="WebHome.php">Home</a>
  <a class="active" href="">Login</a>
  <a href="RegistrationForm.php">Registration</a></div>
</div>
   

<div class="form">
<form  method="post" enctype="multipart/form-data" action="controller/LoginController.php">
  <fieldset > 
<h2>Login</h2><br>
  <hr><br>
  User Name: 
  <input type="text" size= "35" name="username" placeholder="Enter your name" >
  <br><br>

  Password:
  <input type="password" size="35" name="password" placeholder="Enter your password" >
  
  <br><br>
  <hr>
  <input type="submit" name="submit" value="Submit" size="30">&nbsp;
  <a href="ForgotPassword.php" class="active" style="font-size: 17px;">Forgot password?</a><br><br><br>
  <p style="font-style: italic;font-size: 15px;">Don't have an account?&nbsp;<a href="RegistrationForm.php" class="active" style="font-size: 15px;">Sign Up</a></p> 
</form></div><br><br><br><br><br><br><br>
<div><?php include 'Sources/footer.php';?></div>
</div>

</body>
</html>