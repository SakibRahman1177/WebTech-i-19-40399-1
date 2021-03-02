<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>
        <div class="menu">
                 <ul>
                         <a class="Page" style="font-style: italic;font-size: 30px;padding: 10px;">PicoGraphy</a>
                         
                    </ul>

    </div> 
<header>
<?php 
session_start();

if (empty($_SESSION['username'])) {
    echo "<div style='float: right';><a href='index.php'>Home</a> |";
    echo "<a href='UserLogin.php'>Login</a> |";
    echo "<a href='RegistrationForm.php'>Registration</a> </div><br><br><br><br><hr>";
    
}

else{
    echo "<div style='float: right';>"." Logged in as <a href='Profile.php'>".$_SESSION['username']."</a> | ";
    echo "<a href='UserLogin.php'>Logout</a>";
    echo "</div><br><br><hr><br>";
}
 ?>
</header>
<table style="width:100%; border: 2px solid black;">
  <tr style="border: 2px solid black;">
    <th style="border: 2px solid black;">
    	Account<hr>
    	<div style="float: left; text-align: left;margin-left: 60px;">
    	<li> <a href="Dashboard.php">Dashboard</a></li><br><br>
    	<li><a href="ViewProfile.php">View Profile</a></li><br><br>
    	<li><a href="EditProfile.php">Edit Profile</a></li><br><br>
    	<li><a href="ProfilePicture.php">Change Profile Picture</a></li><br><br>
    	<li><a href="ChangePassword.php">Change Password</a></li><br><br>
    	<li><a href="UserLogin.php">Logout</a></li><br><br>
    </div>
    </th>
    <th style="border: 1px black;"><?php if (isset($_SESSION['username'])) {
	echo "<div style= 'margin-right: 850px;font-size: 30px;'> Welcome ".$_SESSION['username']."</div>";

}
?>
</th>
  </tr> 
</table>

<div><?php include 'Source/footer.php';?></div><hr>
</body>
</html>