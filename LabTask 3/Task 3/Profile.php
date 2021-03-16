<!DOCTYPE html>
<html>

<head>
    <title>Profile Picture</title>\
<style>
h2{  font-style: bold;
       font-size: 25px;
       text-align: center; }
  form{ padding-top: 120px;
        text-align: center;
        font-size: 24px;}
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

            <h2>PROFILE PICTURE</h2>
            <img src="img_avatar.png" alt="Avatar" class="avatar">
            <form action="Source Page/ProfileSource.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
    </form>
    </fieldset>
</div>
</body>

</html>