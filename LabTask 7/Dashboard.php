<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style3.css">
</head>
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
    echo "<div style='float: right;font-size:20px;margin-right: 40px;';>"." Logged in as&nbsp; <a class='button1' href='Profile.php'>".$_SESSION['username']."</a> | ";
    echo "<a class='button1' href='Sources/Logout.php'>Logout</a>";
    echo "</div><br><hr>";
}
 ?>
 <div><?php include 'Sources/AccountDesign.php';?></div>
</header>

<table>
  <tr>
    <th>
    	<span>Account</span><hr>
      <div class="account">
    	<a href="Dashboard.php"><img src="Sources/logo1.jpg" width="60" height="60">Dashboard</a><br><br>
    	<a href="Profile.php"><img src="Sources/logo2.jpg" width="50" height="50">View Profile</a><br><br>
    	<a href="ApplyForm.php"><img src="Sources/logo3.jpg" width="50" height="50">Apply for Test</a><br><br>
    	<a href="Report.php"><img src="Sources/logo4.jpg" width="50" height="50">Report</a><br><br>
    	<a href="Sources/Logout.php" ><img src="Sources/logo5.jpg" width="50" height="40">Logout</a><br><br>
    </th>
    <th style="border: 1px black;"><?php if (isset($_SESSION['username'])) {
	echo "<div style= 'text-align: center;margin-right: 300px;margin-left: 200px;font-size: 35px;'> Thanks For Sign-In! <br>Welcome ".$_SESSION['username']."</div>";

}
?>
</th>
  </tr> 
</table>

<div><?php include 'Sources/footer.php';?></div><hr>
</body>
</html>