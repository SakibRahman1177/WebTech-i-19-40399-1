<!DOCTYPE html>
<html>
<head>
	<title>View Profile</title>
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
<?php 
  session_start();
       if (isset($_SESSION['username'])) {

         $password=$_SESSION['password'];
         $email=$_SESSION['email'];
         $name=$_SESSION['name'];
         $gender=$_SESSION['gender'];
         $dob= $_SESSION['birthday'];
 }    
     else{
        $msg="error";
    header("location:Login.php");

}
?>
<table style="width:100%; border: 2px solid black;">
  <tr style="border: 2px solid black;">
    <th style="border: 2px solid black;">
      <div style="font-size: 20px;">Account</div>
      <hr>
      <div style="float: left; text-align: left;margin-left: 60px;">
      <li> <a href="Dashboard.php">Dashboard</a></li><br>
      <li><a href="ViewProfile.php">View Profile</a></li><br>
      <li><a href="EditProfile.php">Edit Profile</a></li><br>     
      <li><a href="ProfilePicture.php">Change Profile Picture</a></li><br>
      <li><a href="changePassword.php">Change Password</a></li><br>
      <li><a href="Source/Logout.php">Logout</a></li><br>
    </div>
    </th> 
		
		<fieldset>
						<legend style="font-style: italic;margin-left: 35px; font-size: 35px;">PROFILE:</legend>
						<br>
						<div style="font-size: 25">
						<a>Name          : <?php echo $name; ?></a><br><hr><br>
						<a>Email         : <?php echo $email; ?></a><br><hr><br>
						<a>Gender        : <?php echo $gender; ?></a><br><hr><br>
						<a>Date of Birth : <?php echo $dob; ?></a><br><hr><br>
					</div>


		</fieldset>
</th>
</tr>
</table>
<div><?php include 'Source/footer.php';?></div><hr>
</body>
</html>
