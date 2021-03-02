<!DOCTYPE html>
<html>
<head>
	<title>Edit Profile</title>
	<style>
     .error {color: #FF0000;
      }
      form{
      	text-align: center;
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

<?php
$flag=1;
$nameErr = $emailErr = $genderErr = $dobErr = $name = $email = $dob = $gender = "";
$username = $password = "";
$message = '';  
$error = ''; 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
    $flag=0;
  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z-.' ]*$/",$name)) {
      $nameErr = "Only letters white space, period & dash allowed";
      $name ="";
      $flag=0;
    }
    else if (str_word_count($name)<2) {
      $nameErr = "At least two words needed";
      $name ="";
      $flag=0;
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
    $flag=0;
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
      $email ="";
      $flag=0;
    }
}
  if (empty($_POST["gender"])) {
    $genderErr = "Select your gender";
    $flag=0;
  } else {
    $gender = test_input($_POST["gender"]);
  }
  if (empty($_POST["birthday"])) {
    $dobErr = "Date of birth is required";
    $flag=0;
  } else {
    $dob = test_input($_POST["birthday"]);
  }
 	




function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
}
?>
  
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">      
	<fieldset><div style="font-size: 20px;"><legend><B>Edit Profile</B><br><br>  
  Name: <input type='text' name='name'>
  <span class='error'>*</span>
  <br><hr>
  E-mail: <input type='text' name='email'>
  <span class='error'>*</span>
  <br><hr>
  <fieldset>
  <legend>Gender</legend>
  Gender:
  <input type='radio' name='gender'>Female
  <input type='radio' name='gender'>Male
  <input type='radio' name='gender'>Other
  <span class='error'>*</span>
  </fieldset>
  <hr>
  <fieldset>
  <legend>Date Of Birth</legend>
  <input type='date' name='birthday'>
  <span class='error'>*</span>
  <br></fieldset><hr>
  <input type='submit' name='submit'></legend>
  </div>
  </fieldset><br>
</form>

</tr> 
</table>

<div><?php include 'Source/footer.php';?></div><hr>
</body>
</html>