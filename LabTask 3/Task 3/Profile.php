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

    <form style="border: 5px;margin-left: 285px;margin-right: 285px;border-style: solid;border-color: black;padding: 1em;" action="page2/part2.php" method="post" enctype="multipart/form-data">

            <h2>PROFILE PICTURE</h2>
            <img src="files/logo.png"><br><br>
            <input type="file" name="fileToUpload" id="fileToUpload">
            <br>
            <hr>
            <input type="submit" name="submit">
    </form>
    </fieldset>
</div>
</body>

</html>