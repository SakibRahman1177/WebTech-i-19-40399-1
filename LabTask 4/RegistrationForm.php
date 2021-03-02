<!DOCTYPE HTML>
<html>

<head>
    <style>
    .error {
        color: #FF0000;
    }
    h2{
       text-align: center; }
  form{ padding-top: 20px;
        text-align: center;
        font-size: 20px;}
  input{
       padding: 5px 12px;
       border: 1px solid #ddd;
       border-radius: 2px;
       background-color: #fff;
       box-shadow: inset 1px 1px 5px rgba(0,0,0,0.2);
  }
  input[type="submit"] {
    padding: 5px 15px;
    background-color: green;
    border: 8px;
    color: #fff;
    border-radius: 8px;
}  
  input[type="reset"] {
    padding: 5px 15px;
    background-color: gray;
    border: 8px;
    color: #fff;
    border-radius: 8px;

}

  span{ font-size: 15px;
        text-align: center;  
      }
    </style>
</head>

<body>
 <div class="menu">
                 <ul>
                       <a class="Page" style="font-style: italic;font-size: 30px;padding: 10px;
                       ">PicoGraphy</a>
                       
                         <br><a href="index.php" class="active">Home  </a> &nbsp;|&nbsp;                         
                         <a href="UserLogin.php" class="active">Login </a>&nbsp;|&nbsp;
                         <a href="RegistrationForm.php" class="active">Registration </a>&nbsp;
                         
                    </ul>

    </div>
<div style="background-color:silver;color:black;padding:5px;">
    <?php
$flag=1;
$nameErr = $emailErr = $genderErr = $dobErr = $name = $email = $dob = $gender = "";
$username = $password = "";
$userNameErr = $passErr = $confirmpassErr = $confirmpass = "";
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

  if (empty($_POST["birthday"])) {
    $dobErr = "Date of birth is required";
    $flag=0;
  } else {
    $dob = test_input($_POST["birthday"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Select gender";
    $flag=0;
  } else {
    $gender = test_input($_POST["gender"]);
  }

  if (empty($_POST["username"])) {
    $userNameErr = "Username is required";
    $flag=0;
  } else {
    $username = test_input($_POST["username"]);
    if (!preg_match("/^[a-zA-Z-._]*$/",$username)) {
      $userNameErr = "Only alpha numeric characters, period, dash or underscore allowed";
      $username ="";
      $flag=0;
    }
    else if (strlen($username)<2) {
      $userNameErr = "At least two charecters needed";
      $username ="";
      $flag=0;
    }
  }
  
  if (empty($_POST["Password"])) {
    $passErr = "Password is required";
    $flag=0;
  } else {
    $password = test_input($_POST["Password"]);
    if (strlen($password)<8) {
      $passErr = "Password must be 8 charecters";
      $password ="";
      $flag=0;
    }
    else if (!preg_match("/[@,#,$,%]/",$password)) {
      $passErr = "Password must contain at least one of the special characters (@, #, $,%)";
      $password ="";
      $flag=0;
    }
  }
  if (empty($_POST["confirmpass"])) {
    $confirmpassErr = "Retype The Current Password";
    $flag=0;
  } else {
    $confirmpass = test_input($_POST["confirmpass"]);
    if (strcmp($password, $confirmpass)==1) {
      $confirmpassErr = "Password & Retyped Password Must be Same!";
      $confirmpass ="";
      $flag=0;
    }
  } 
 if ($flag==1) {
 	if(isset($_POST["submit"]))  
    {
 	if(file_exists('Source/RegistrationForm.json'))
 		{
 			$current_data = file_get_contents('Source/RegistrationForm.json');  
            $array_data = json_decode($current_data, true);  
            $extra = array(  
                 'name'               =>     $_POST['name'],
                 'email'          =>     $_POST["email"],
                 'username'          =>     $_POST["username"],
                 'password'          =>     $_POST["confirmpass"],  
                 'gender'          =>     $_POST["gender"],  
                 'dateOfBirth'     =>     $_POST["birthday"]  
                );  
            $array_data[] = $extra;  
            $final_data = json_encode($array_data);  
            if(file_put_contents('Source/RegistrationForm.json', $final_data))  
            {  
                 $message = "Data Recorded Successfully";  
            }  
        }  
        else  
        {  
           $error = 'JSON File not exits';  
        }  
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
    <hr>
    <form method="post" style="border: 5px;margin-top: 10px;margin-bottom: 0px; margin-left: 300px;margin-right: 300px;border-style: solid;border-color: black;padding: 1em;" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      
      <h2><span style="font-weight: bold;font-size: 25px;">REGISTRATION:</span></h2>  <hr>
            
            Name: <input type="text" name="name" placeholder="Enter Your Name">
            <span class="error">* <?php echo $nameErr;?></span>
            <br>
            <br>
            E-mail: <input type="text" name="email" placeholder="Enter your Email">
            <span class="error">* <?php echo $emailErr;?></span>
            <br>
            <br>
            User Name: <input type="text" name="username" placeholder="Enter Your Username">
            <span class="error">* <?php echo $userNameErr;?></span>
            <br>
            <br>
            Password: <input type="Password" name="Password" placeholder="Enter Your Password">
            <span class="error">* <?php echo $passErr;?></span>
            <br>
            <br>
            Confirm Password: <input type="Password" name="confirmpass" placeholder="Retype Your Password">
            <span class="error">* <?php echo $confirmpassErr;?></span>
            <br>
            <br>
            <fieldset style="border-color: black;">
                <legend>Gender</legend>
                Gender:
                <input type="radio" name="gender" value="female">Female
                <input type="radio" name="gender" value="male">Male
                <input type="radio" name="gender" value="other">Other
                <span class="error">* <?php echo $genderErr;?></span>
                </fieldset>
            
            <fieldset style="border-color: black;">
                <legend>Date Of Birth</legend>
                <input type="date" name="birthday">
                <span class="error">* <?php echo $dobErr;?></span>
                <br>
            </fieldset>
            <br>
            <hr>
            <br>
            <input type="submit" name="submit" value="Submit"> <input type="reset" value="Reset">
       
    </form>
    <div><?php include 'Source/footer.php';?></div>
    <?php
echo $error;
echo "<br>";
echo $message;
echo "<br>";
?>
</div>
</body>

</html>