<!DOCTYPE HTML>  
<html>
<head>
  <title>Update Password</title>
<style>

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

$current_passErr = $new_passErr = $retype_passErr = "";
$current_pass = $new_pass = $retype_pass = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["current_pass"])) {
    $current_passErr = "<span style='color: red;font-size: 15px'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Current password field is required</span>";
  } else {
        if (!strcmp($current_pass, $new_pass) == 0) {
              $current_passErr="Password is not correct";
            }
            $current_pass = test_input($_POST["current_pass"]);
   }
   

   if (empty($_POST["new_pass"])) {
    $new_passErr = "<span style='color: red;font-size: 15px'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;New password field is required</span>";
  } else {
            $new_pass = test_input($_POST["new_pass"]);
            if (!strcmp($new_pass, $retype_pass)==0) {
              $retype_passErr = "<span style='color: red;font-size: 15px'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;New Password & Retyped Password must be same!</span>";
            }

     }
}
?> 


<h2>Change Password</h2>

<form method="post" style="border: 5px;margin-top: 50px;margin-bottom: 50px; margin-left: 285px;margin-right: 285px;border-style: solid;border-color: black;padding: 1em;"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Current Password : 
  <input type="text" size= "30" name="currentpassword" placeholder="Enter your old password" >
  <span class="error">&nbsp; &nbsp;<br><?php echo $current_passErr;?></span>
  <br><br>
  
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  New Password :
  <input type="text" size="30" name="newpassword" placeholder="Enter your new password" >
  <span class="error">&nbsp;&nbsp;<br> <?php echo $new_passErr;?></span>
  <br><br>

  Retype New Password : 
  <input type="text" size= "30" name="retypepassword" placeholder="Re-type your new password" >
  <span class="error">&nbsp; &nbsp;<br><?php echo $retype_passErr;?></span>
  <br><br>

  <input type="submit" name="submit" value="Submit" size="30">  
</form>


</div>
</body>
</html>