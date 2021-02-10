<!DOCTYPE html>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
<div style="background-color:silver;color:black;padding:5px;">
<?php
// define variables and set to empty values
$nameErr = $emailErr = $dateofbirthErr = $birthDateErr = $birthMonthErr = $birthYear = $genderErr = $degreeErr = $bloodgroupErr = "";
$name = $email = $dateofbirth = $birthDate = $birthMonth = $birthYear = $gender = $degree = $bloodgroup = "";
$i = 1;
$degree1 = $degree2 = $degree3 = $degree4 = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)&&$namecontains>"2") {
      $nameErr = "Only letters and white space allowed";    }
       else  {
             if(str_word_count($name)<2)
          {
           $nameErr = "1. Contains at least two  words,  2. Must start with a letter,  3. Can contain a-z, A-Z,  period, dash only";

          }
      else {
        $name = test_input($_POST["name"]);
      }
    }
  }
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format,
      Example: (email_address : anything@example. Com )";
    }
  }
    
if (empty($_POST["birthDate"]) || empty($_POST["birthMonth"]) || empty($_POST["birthYear"])) {
    $dateofbirthErr = "Date / Month / Year is required";
  } else {

    $birthDate=test_input($_POST["birthDate"]);
    $birthMonth=test_input($_POST["birthMonth"]);
    $birthYear=test_input($_POST["birthYear"]);

    if(!is_numeric($birthDate))
    {
      $birthErr="Please input valid Date";
    }
    else {

      if(!is_numeric($birthMonth))
      {
          $birthErr="Please input valid month";
      }
      else {
        if(!is_numeric($birthYear))
        {
          $birthErr="Please input valid Year";
        }
 
    else {
          if($birthDate>31 || $birthDate<1)
          {
              $birthErr=" Input Date between 1 to 31";
          }
          else {
              if($birthMonth>12 || $birthMonth<1)
              {
                  $birthErr=" Input Month between 1 to 12";
              }
              else {
                  if($birthYear>1998 || $birthYear<1953)
                  {
                    $birthErr=" Input Year between 1953 to 1998";
                  }
                  else {
                    $birthErr="Must be valid numbers  (dd: 1-31, mm: 1-12,  yyyy: 1953-1998)";
                  }
              }
            }
          }  
       }
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  if(empty($_POST["SSC"]) && empty($_POST["HSC"]) && empty($_POST["BSc"]) && empty($_POST["MSc"]))
  {
    $degreeErr="Degree is required";
  }
  else {
  if(!empty($_POST["SSC"]))
  {
    $i=$i+1;
    $degree1=test_input($_POST["SSC"]);
  }
  if(!empty($_POST["HSC"]))
  {
    $i=$i+1;
      $degree2=test_input($_POST["HSC"]);
  }
  if(!empty($_POST["BSc"]))
  {
    $i=$i+1;
    $degree3=test_input($_POST["BSc"]);
  }
  if(!empty($_POST["MSc"]))
  {
    $i=$i+1;
    $degree4=test_input($_POST["MSc"]);
  }
  if($i<3)
  {
    $degreeErr="*At least two is required";
  }
}

  if (empty($_POST["bloodgroup"])) {
    $bloodgroupErr = "Blood-Group is required";
  } 
  else {
    $bloodgroup = test_input($_POST["bloodgroup"]);
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

<h2><span>[Lab Task 2] PHP Form Validation Example</span></h2>
<p><span class="error">* required field</span></p>
<form method="post" style="border: 4px;border-style: solid;border-color: gray;padding: 1em;"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

  NAME: <br>
  <input type="text" name="name" placeholder="Enter Your Name" size="30">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>

  E-MAIL: <br>
  <input type="text" name="email" placeholder="Enter Your E-mail" size="30">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>

  DATE OF BIRTH: <br>
  <input type="text" size="1" placeholder="dd" name="birthDate" value="<?php echo $birthDate; ?>"> /
  <input type="text" size="1" placeholder="mm" name="birthMonth" value="<?php echo $birthMonth; ?>"> /
  <input type="text" size="2" placeholder="yyyy" name="birthYear" value="<?php echo $birthYear; ?>">
  <span class="error">* <?php echo $dateofbirthErr;?></span>
  <br><br>

  GENDER:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  DEGREE: 
  <input type="checkbox"  name="SSC" value="SSC">SSC
  <input type="checkbox" name="HSC" value="HSC">HSC
  <input type="checkbox" name="Bsc" value="Bsc">BSc
  <input type="checkbox" name="Msc" value="Msc">MSc
  <span class="error">&nbsp;*<?php echo $degreeErr;?></span>
  <br><br>
  BLOOD GROUP:
  <select name="bloodgroup" name="bloodgroup">
  <option value="">choose anyone</option>
  <option value="A+">A+</option>
  <option value="A-">A-</option>
  <option value="AB+">AB+</option>
  <option value="AB-">AB-</option>
  <option value="O+">O+</option>
  <option value="O-">O-</option>
</select>
  <span class="error">* <?php echo $bloodgroupErr;?></span>
<br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo "Name: "  . $name;
echo "<br>";
echo "Email: " . $email;
echo "<br>";
echo "DOB: "  . $birthDate . "/" . $birthMonth . "/" . $birthYear;
echo "<br>";
echo "Gender: " . $gender;
echo "<br>";
echo "Degree: " . $degree1." ".$degree2." ".$degree3." ".$degree4;
echo "<br>";
echo "Blood-Group: " . $bloodgroup;
echo "<br>";
?>
</div>
</body>
</html> 