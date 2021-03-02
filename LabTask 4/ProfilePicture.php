<!DOCTYPE html>
<html>
<head>

<style>
.avatar {
  width: 10%;
  border-radius: 15%;
}
</style>
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
      <div style="font-size: 20px;">Account</div>
      <hr>
      <div style="float: left; text-align: left;margin-left: 60px;">
      <li> <a href="Dashboard.php">Dashboard</a></li><br>
      <li><a href="ViewProfile.php">View Profile</a></li><br>
      <li><a href="EditProfile.php">Edit Profile</a></li><br>     
      <li><a href=".php">Change Profile Picture</a></li><br>
      <li><a href="changePassword.php">Change Password</a></li><br>
      <li><a href="UserLogin.php">Logout</a></li><br>
    </div>
    </th> 

  <fieldset>
	<legend style="font-size: 30px;"><B>Profile Picture</B></legend><br><br>
	<img src="img_avatar.png" alt="Avatar" class="avatar">
<form action="Source/UploadPicture.php" method="post" enctype="multipart/form-data">
	Select an Image:
  <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
  <input type="submit" value="Upload Image" name="submit">
  </fieldset>
</form><br><hr>

</tr>
</table>
<div><?php include 'Source/footer.php';?></div><hr>
</body>
</html>