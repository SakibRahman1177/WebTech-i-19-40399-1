
<!DOCTYPE HTML>  
<html>
<head>
  <title>Form Login</title>
<style>
  h2{  font-style: bold;
       font-size: 40px;
       text-align: center; }
  form{ padding-top: 120px;
        text-align: center;
        font-size: 20px;}
  input{
       height: 20px;
       border: 2px solid #ddd;
       border-radius: 2px;
       padding: 4px;
       background-color: #fff;
       box-shadow: inset 1px 1px 3px rgba(0,0,0,0.1);
  }
    input[type="submit"] {
    padding: 0px 20px;
    background-color: green;
    border: 2px;
    color: #fff;
    border-radius: 2px;
    margin-bottom: 4px;
}
  span{ font-size: 20px;
        text-align: center;  }

</style>
</head>
<body>  
<div style="background-color:silver;color:black;padding:5px;">
<?php
// define variables and set to empty values
$usernameErr = $passwordErr = "";
$username = $password = "";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $usernameErr = "<span style='color: red;font-size: 15px'>Username is required</span>";
  } else {
    $username = test_input($_POST["username"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$username)) {
      $usernameErr = "<span style='color: red;font-size: 15px'>Only letters, white space, period & dash is allowed</span>";
      $username = "";
          }
       else if(strlen($username)<2)
          {
           $usernameErr = "<span style='color: red;font-size: 15px'>User Name must contain at least two (2) characters </span>";
           $username = "";

          }
     }
}

  if (empty($_POST["password"])) {
    $passwordErr = "<span style='color: red;font-size: 15px'>password is required.</span>";
  } else {
    $password = test_input($_POST["password"]);
    if(strlen($password)<8){
    $passwordErr = "<span style='color: red;font-size: 15px'>must not be less than eight (8) characters</span>";
    $password = "";
  }
   
   else if (!preg_match("/[@, #, $,  %]/",$password)) {
      $passwordErr = "<span style='color: red;font-size: 15px'> Password must contain at least one of the special characters (@, #, $,  %)</span>";
      $password = "";
    }
  }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<h2>User Login</h2>

<form method="post" style="border: 5px;margin-left: 285px;margin-right: 285px;border-style: solid;border-color: black;padding: 1em;"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 

  User Name: <input type="text" size= "30" name="username" placeholder="Enter your name" >
  <span class="error">&nbsp; &nbsp;<br><?php echo $usernameErr;?></span>
  <br><br>

  Password: &nbsp;&nbsp;<input type="password" size="30" name="password" placeholder="Enter your password" >
  <span class="error">&nbsp;&nbsp;<br> <?php echo $passwordErr;?></span>
  <br>
  <input type="checkbox"  name="save" >Remember me<br><br>
  <hr>
  <input type="submit" name="submit" value="Submit" size="30">&nbsp;<a href="http://">Forgot password?</a>  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo "<span>User Name : " . $username;
echo "<br>";
echo "Password &nbsp;&nbsp;&nbsp;: " . $password;
echo "<br></span>";

?>
</div>
</body>
</html>














