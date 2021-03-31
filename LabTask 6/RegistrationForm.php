<!DOCTYPE HTML>
<html>

<head>
  <title>Registration</title>
    <style>
    .error {
        color: #FF0000;
        font-size: 14px;
    }
    .form{
    font-family: "Roboto", sans-serif;
    background: #FFFFFF;
    max-width: 500px;
    margin: 50px auto 50px;
    padding: 10px 45px 30px 45px;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    border-radius: 10px;
  }
    h2{
       text-align: center; }
  form{ padding-top: 20px;
        text-align: center;
        font-size: 20px;}
  input{
       padding: 5px 12px;
       border: 1px solid #ddd;
       border-radius: 2px;
       background-color: #fff;
       box-shadow: inset 1px 1px 5px rgba(0,0,0,0.2);
  }
  input[type="submit"] {
    padding: 5px 15px;
    background-color: green;
    border: 8px;
    color: #fff;
    border-radius: 8px;
}  
  input[type="reset"] {
    padding: 5px 15px;
    background-color: gray;
    border: 8px;
    color: #fff;
    border-radius: 8px;

}

  span{ font-size: 15px;
        text-align: center;  
      }
    </style>
</head>

<body>
<div class="topnav">
  <a style="float: left;font-style: italic;font-size: 20px;">Covid-19 Test</a>
  <div style="float: right;">
  <a  href="WebHome.php">Home</a>
  <a href="Login.php">Login</a>
  <a class="active" href="RegistrationForm.php">Registration</a></div>
</div>.

    <div class="form">
  <form method="post" action="controller/RegistrationFormController.php">
      
      <h2><span style="font-weight: bold;font-size: 25px;">REGISTRATION:</span></h2><hr><br>
            
            Name: <input type="text" name="name" placeholder="Enter Your Name">
            <br>
            <br>
            E-mail: <input type="text" name="email" placeholder="Enter your Email">
            <br>
            <br>
            User Name: <input type="text" name="username" placeholder="Enter Your Username">
            
            <br>
            <br>
            Password: <input type="Password" name="Password" placeholder="Enter Your Password">
            
            <br>
            <br>
            Confirm Password: <input type="Password" name="confirmpass" placeholder="Retype Your Password">
            
            <br>
            <br>
                Gender:
                <input type="radio" name="gender" value="female">Female
                <input type="radio" name="gender" value="male">Male
                <input type="radio" name="gender" value="other">Other
                
            <br>
            Date Of Birth
                <input type="date" name="birthday">
                
                <br>
            <br>
            Address:
                <input type="text" name="address" size="40">
                
                <br>
            <br>
            <hr>
            <br>
            <input type="submit" name="submit" value="Submit"> <input type="reset" value="Reset"><br>

</form></div>
<div><?php include 'Sources/footer.php';?></div>
</div>
</body>
</html>