<!DOCTYPE HTML>  
<html>
<head>
  <title>Change Password</title>
<style>
.error {color: #FF0000;}
legend{
  font-size: 25px;
}
form{
  font-size: 20px;
}
input[type="submit"] {
    padding: 0px 20px;
    background-color: green;
    border: 2px;
    color: #fff;
    border-radius: 2px;
    margin-bottom: 4px;
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
// define variables and set to empty values

$currentpasswordErr = $newpasswordErr = $retypepasswordErr = "";
$currentpassword = $newpassword = $retypepassword = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["currentpassword"])) {
    $currentpasswordErr = "Current password field is required";
  } else {
     $currentpassword = test_input($_POST["currentpassword"]);
     
     if(strlen($currentpassword)<8){
     $currentpasswordErr = "Must not be less than eight (8) characters";
     $currentpassword = "";
  }
  
     elseif (!preg_match("/[@, #, $,  %]/",$currentpassword)) {
       $currentpasswordErr ="Password must contain at least one of the  special characters (@, #, $,  %)";
       $currentpassword = "";
    }
     else {
         $currentpassword = test_input($_POST["currentpassword"]);
     }
    
   }

if (empty($_POST["newpassword"])) {
    $newpasswordErr = "New password field is required";
  } else {
      $newpassword = test_input($_POST["newpassword"]);
      if(strlen($newpassword)<8){
      $newpasswordErr = "Must not be less than eight (8) characters";
      $newpassword = "";
  }
  elseif (!preg_match("/[@, #, $,  %]/",$newpassword)) {
      $newpasswordErr ="Password must contain at least one of the special characters (@, #, $,  %)";
      $newpassword = "";
    }

  elseif (strcmp($newpassword, $currentpassword)==0) {
        $newpasswordErr = "New Password should not be same as the Current Password!";
        $newpassword = "";
            }
            else {
         $newpassword = test_input($_POST["newpassword"]);
     }
          

     }

if (empty($_POST["retypepassword"])) {
    $retypepasswordErr = "Retype password field is required";
  } else {
      $retypepassword = test_input($_POST["retypepassword"]);
      if(strlen($retypepassword)<8){
      $retypepasswordErr = "Must not be less than eight (8) characters";
      $retypepassword = "";
  }
  elseif (!preg_match("/[@, #, $,  %]/",$retypepassword)) {
      $retypepasswordErr ="Password must contain at least one of the special characters (@, #, $,  %)";
      $retypepassword = "";
    }

  elseif (!strcmp($retypepassword, $newpassword)==0) {
        $retypepasswordErr = "New Password must match with the Retype Password!";
        $retypepassword = "";
            }
            else {
         $retypepassword = test_input($_POST["retypepassword"]);
     }
     }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?> 

<fieldset>

<legend><B>Change Password</B></legend><br>

<form method="post"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
  <div style="font-size: 20px;">
  Current Password : 
  <input type="text" size= "30" name="currentpassword" placeholder="Enter your old password" >
  <span class="error"> <?php echo $currentpasswordErr;?></span>
  <br><br>
  
  New Password :
  <input type="text" size="30" name="newpassword" placeholder="Enter your new password" >
  <span class="error"> <?php echo $newpasswordErr;?></span>
  <br><br>

  Retype New Password : 
  <input type="text" size= "30" name="retypepassword" placeholder="Re-type your new password" >
  <span class="error"> <?php echo $retypepasswordErr;?></span>
  <br><br>

  <input type="submit" name="submit" value="Submit" size="30">  </div>
</form>
</fieldset><br>
</tr> 
</table>

<div><?php include 'Source/footer.php';?></div><hr>
</body>
</html>