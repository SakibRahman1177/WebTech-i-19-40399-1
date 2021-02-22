<!DOCTYPE html>
<html>

<head>
    <title>Uploaded</title>
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
  <div style="background-color:silver;color:black;padding:10px;">
    <?php
$target_dir = "pic/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    $uploadOk = 1;
  } else {
    echo "File is not an image<br>";
    $uploadOk = 0;
  }
}

if (file_exists($target_file)) {
  echo "Sorry, file already exists<br>";
  $uploadOk = 0;
}

if ($_FILES["fileToUpload"]["size"] > 4000000) {
  echo "Picture size should not be more than 4MB<br>";
  $uploadOk = 0;
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
  echo "Sorry, only JPG, JPEG, & PNG files are allowed<br>";
  $uploadOk = 0;
}

if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded<br>";
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "Profile Picture Uploaded Succesfully<br>";
  } else {
    echo "Sorry, there was a problem uploading your file<br>";
  }
}
?>
    <fieldset>
        <legend><B>PROFILE PICTURE</B></legend> <br>
        <br><img src="uploads/<?php echo($_FILES["fileToUpload"]["name"]) ?>" alt="Profile Picture" width="180"
            height="200">
    </fieldset>
</div>
</body>

</html>