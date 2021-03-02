
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Demo Webpage</title>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <style>
   	  h2{
   	  	text-align: center;
   	  	font-style: italic;
   	  	font-size: 40px;
   	  }
   </style>
</head>
<body>
<?php
$page = "";
?>
<div class="menu">
                 <ul>
                 	     <a class="Page" style="font-style: italic;font-size: 30px;padding: 10px;">PicoGraphy</a>
                 	     
                         <br><a href="index.php" class="active">Home  </a> &nbsp;|&nbsp;                         
                         <a href="UserLogin.php" class="active">Login </a>&nbsp;|&nbsp;
                         <a href="RegistrationForm.php" class="active">Registration </a>&nbsp;
                         
                    </ul>

    </div> 

<div style="padding:10px">
  <h2>Welcome to PicoGraphy</h2><hr>
  <img src="Source/PageCover.png" alt="Camera" style="width:1350px;height:500px;margin-left: 120px;">
</div>
<div><?php include 'Source/footer.php';?></div>

</body>
</html>