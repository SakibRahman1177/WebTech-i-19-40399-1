<!DOCTYPE HTML>
<html>

<head>
  <title>Registration</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style2.css">
  <style>
    /*add a background picture and declaring a size*/
    body{
    background-image: url('Sources/covid-19.jpg');
    background-repeat: no-repeat;
    background-size: 1600px 900px;
      }
      /*create a form box*/
      .form{
    font-family: "Roboto", sans-serif;
    background: #FFFFFF;
    max-width: 700px;
    margin: 20px auto 50px;
    padding: 10px 45px 30px 45px;
   box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    border-radius: 10px;
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
</div>
<div><?php include 'Sources/AccountDesign.php';?></div>
    <div class="form">
  <form method="post" action="controller/RegistrationFormController.php">
      
      <h2><span style="font-weight: bold;font-size: 25px;">REGISTRATION:</span></h2><hr>
            
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
            <br>
            Date Of Birth
                <input type="date" name="birthday">
                
                <br>
            <br>
            Address:
                <input type="text" name="address" size="40">
                
                
            
            <hr>
            
            <input type="submit" name="submit" value="Submit"> <input type="reset" value="Reset"><br>

</form></div>
<div><?php include 'Sources/footer.php';?></div><hr>

</div>
</body>
</html>