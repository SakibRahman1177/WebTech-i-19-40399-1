<!DOCTYPE HTML>  
<html>
<head>
  <title>Update Password</title>
<style>
.error {color: #FF0000;}
h2{  font-style: bold;
       font-size: 40px;
       text-align: center; }
  form{ padding-top: 120px;
        text-align: center;
        font-size: 24px;}
  input{
       height: 25px;
       font-size: 15px;
       border: 1px solid #ddd;
       border-radius: 2px;
       padding: 5px;
       background-color: #fff;
       box-shadow: inset 1px 1px 5px rgba(0,0,0,0.2);
  }
  input[type="submit"] {
    padding: 0px 20px;
    background-color: green;
    border: 2px;
    color: #fff;
    border-radius: 2px;
}

  span{ font-size: 20px;
        text-align: center;  
      }

</style>
</head>
<body>  
<div style="background-color:silver;color:black;padding:5px;">
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


<h2>Change Password</h2>

<form method="post" style="border: 5px;margin-top: 50px;margin-bottom: 50px; margin-left: 285px;margin-right: 285px;border-style: solid;border-color: black;padding: 1em;"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Current Password : 
  <input type="text" size= "30" name="currentpassword" placeholder="Enter your old password" >
  <span class="error">&nbsp; &nbsp;<br><?php echo $currentpasswordErr;?></span>
  <br><br>
  
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  New Password :
  <input type="text" size="30" name="newpassword" placeholder="Enter your new password" >
  <span class="error">&nbsp;&nbsp;<br> <?php echo $newpasswordErr;?></span>
  <br><br>

  Retype New Password : 
  <input type="text" size= "30" name="retypepassword" placeholder="Re-type your new password" >
  <span class="error">&nbsp; &nbsp;<br><?php echo $retypepasswordErr;?></span>
  <br><br>

  <input type="submit" name="submit" value="Submit" size="30">  
</form>


</div>
</body>
</html>