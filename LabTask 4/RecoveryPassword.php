<!DOCTYPE HTML>  
<html>
<head>
  <title>Form Login</title>
<style>
  .error {color: #FF0000;}
  legend{  font-style: bold;
       font-size: 20px;
       text-align: center; }
  form{ padding-top: 40px;
        padding-bottom: 50px;
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
<div class="menu">
                 <ul>
                       <a class="Page" style="font-style: italic;font-size: 30px;">PicoGraphy</a>
                       
                         <br><a href="index.php" class="active">Home  </a> &nbsp;|&nbsp;                         
                         <a href="UserLogin.php" class="active">Login </a>&nbsp;|&nbsp;
                         <a href="RegistrationForm.php" class="active">Registration </a>&nbsp;
                         
                    </ul>

    </div>  
<div style="background-color:silver;color:black;padding:5px;">
<?php

$emailErr = "";
$email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format,
      Example: (email_address : anything@example.com )";
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
    <legend>FORGOT PASSWORD:</legend>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

     Enter Email:
     <input type="text" name="email" placeholder="Enter Your E-mail" size="30">
     <span class="error"><br>* <?php echo $emailErr;?></span>
     <br><br>
     <input type="submit" name="submit" value="Submit" size="50">
     </form>
</fieldset>
<div><?php include 'Source/footer.php';?></div>
</div>
</body>
</html>