<!DOCTYPE html>
<html lang="en">

<head>
	<title>Project Webpage</title>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Sources/style.css"> 
</head>
<body>
<?php
$page = "";
?>
<div class="topnav">
  <a style="float: left;font-style: italic;font-size: 20px;">Covid-19 Test</a>
  <div style="float: right;">
  <a class="active" href="WebHome.php">Home</a>
  <a href="Login.php">Login</a>
  <a href="RegistrationForm.php">Registration</a></div>
</div>
<div style="padding:10px">
  <h2>Covid'19 Test Webpage</h2>
    <p>Here you can apply for test & get a quick result within 2 days.......... </p><br>
  <hr>
  <img src="Sources/covid-19.jpg" alt="Covid-19" style="width:1580px;height:660px;">
</div>
<div><?php include 'Sources/footer.php';?></div>
</body>
</html>