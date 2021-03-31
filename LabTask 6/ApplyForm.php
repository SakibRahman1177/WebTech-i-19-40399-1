<!DOCTYPE HTML>
<html>

<head>
  <title>Apply for Test</title>
    <style>
    .error {
        color: #FF0000;
        font-size: 14px;
    }
    .form{
    font-family: "Roboto", sans-serif;
    background: #FFFFFF;
    max-width: 400px;
    margin: 90px auto 100px;
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
  <a href="Dashboard.php">Dashboard</a>
  <a href="Profile.php">Profile</a>
  <a class="active" href="ApplyForm.php">Apply</a>
  <a href="Report.php">Report</a></div>
</div><br>
    
    <div class="form">
     <form method="post" action="controller/ApplyFormController.php">
      
      <h2><span style="font-weight: bold;font-size: 25px;">APPLICATION FORM</span></h2><hr><br>
            
            Name: <input type="text" name="name" placeholder="Enter Your Name">
            <br>
            <br>
            E-mail: <input type="text" name="email" placeholder="Enter your Email">
            
            <br>
            <br>
           Phone Number: <input type="text" name="phone" placeholder="Enter your phone number" size="30">
            
            <br>
            <br>

            Address:
                <input type="text" name="address" size="40">
                
                <br>
            <br>
                 Gender:
                <input type="radio" name="gender" value="female">Female
                <input type="radio" name="gender" value="male">Male
                <input type="radio" name="gender" value="other">Other
                <br>
            <br>
            <hr>
            <br>
            <input type="submit" name="submit" value="Submit"> <input type="reset" value="Reset"><br>

</form></div><br><br><br>
<div><?php include 'Sources/footer.php';?></div>
</div>
</body>
</html>