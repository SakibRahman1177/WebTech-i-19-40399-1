<!DOCTYPE HTML>
<html>

<head>
  <title>Apply for Test</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style2.css">
  <style>

    body{
    background-image: url('Sources/FormCover.jpg');
    background-repeat: no-repeat;
    background-size: 1600px 780px;
      }
    .form{
    font-family: "Roboto", sans-serif;
    background: #FFFFFF;
    max-width: 600px;
    margin: 33px auto 50px;
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
  <a href="Dashboard.php">Dashboard</a>
  <a href="Profile.php">Profile</a>
  <a class="active" href="ApplyForm.php">Apply</a>
  <a href="Report.php">Report</a></div>
</div><br>
    <div><?php include 'Sources/AccountDesign.php';?></div>
    <div class="form">
     <form method="post" action="controller/ApplyFormController.php">
      
      <h2><span style="font-weight: bold;font-size: 30px;color: #2F4F4F;">APPLICATION FORM</span></h2><hr><br>
            
            Name: <input type="text" name="name" placeholder="Enter Your Name" size="25">
            <br>
            <br>
            E-mail: <input type="text" name="email" placeholder="Enter your Email" size="25">
            
            <br>
            <br>
           Phone Number: <input type="text" name="phone" placeholder="Enter your phone number" size="30">
            
            <br>
            <br>

            Address:
                <input type="text" name="address" size="40">
                
                <br>
            <br>
                 Gender:&nbsp;&nbsp;&nbsp;
                <input type="radio" name="gender" value="female">Female
                &nbsp;&nbsp;<input type="radio" name="gender" value="male">Male
                &nbsp;&nbsp;<input type="radio" name="gender" value="other">Other
                <br>
            
            <hr>
          
            <input type="submit" name="submit" value="Submit"> <input type="reset" value="Reset"><br><br>

</form></div>
<div><?php include 'Sources/footer.php';?></div>
</div>
</body>
</html>