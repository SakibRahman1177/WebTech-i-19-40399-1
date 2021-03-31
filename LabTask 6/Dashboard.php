<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
<style>
    body{
        margin: 0px;
        font-family: Arial, Helvetica, sans-serif;
    }
</style>
</head>
<body>
<div class="topnav">
  <a style="float: left;font-style: italic;font-size: 20px;">Covid-19 Test</a>
  <div style="float: right;">
  <a class="active" href="Dashboard.php">Dashboard</a>
  <a href="Profile.php">Profile</a>
  <a href="ApplyForm.php">Apply</a>
  <a href="Report.php">Report</a></div>
</div><br>
<header>
<?php 
session_start();

if (empty($_SESSION['username'])) {
    echo "<a href='Login.php' style= 'float: right;' margin-right: '20px;'>Go to login!</a></div><br><br><br><hr>";
    
}

else{
    echo "<div style='float: right;font-size:20px;';>"." Logged in as <a href='Profile.php'>".$_SESSION['username']."</a> | ";
    echo "<a href='Sources/Logout.php'>Logout</a>";
    echo "</div><br><br><hr><br>";
}
 ?>
</header><br><br>
<table style="width:97%;margin-right: 20px;margin-left: 20px; border: 2px solid black;">
  <tr style="border: 2px solid black;">
    <th style="border: 2px solid black;font-size: 25px;">
    	Account<hr><br>
    	<div style="float: left; text-align: left;margin-left: 60px;">
    	<li> <a href="Dashboard.php">Dashboard</a></li><br><br>
    	<li><a href="Profile.php">View Profile</a></li><br><br>
    	<li><a href="ApplyForm.php">Apply for Test</a></li><br><br>
    	<li><a href="Report.php">Report</a></li><br><br>
    	<li><a href="Sources/Logout.php">Logout</a></li><br><br>
    </th>
    <th style="border: 1px black;"><?php if (isset($_SESSION['username'])) {
	echo "<div style= 'text-align: center;margin-right: 850px;font-size: 35px;'> Thanks For Sign-In! <br>Welcome ".$_SESSION['username']."</div>";

}
?>
</th>
  </tr> 
</table>

<div><?php include 'Sources/footer.php';?></div><hr>
</body>
</html>