<!DOCTYPE html>
<html>
<head>
	<title>Add Product</title>
  <style>
    body{
      margin-top: 100px;
      margin-left: 500px;
      margin-right: 700px;
    }
    form{
      text-align: center;
    }
  </style>
</head>
<body>

<form action="Controller/addProductController.php" method="POST" enctype="multipart/form-data">
  <fieldset >
<legend style="font-size: 25px;"><B>Add Product</B></legend> <br>
  <div style="float: left; text-align: right;">  
  Name: <input type="text" name="name" size="40">
  <br><hr>
  Buying Price: <input type="text" name="bprice" size="40">
  <br><hr>
  Selling Price: <input type="text" name="sprice" size="40">
  <br><hr>
  <input type="checkbox" name="display" value="Yes">
  <label for="display">Display</label>
  <br><hr>
  <input type="submit" name="submit" value="Save"></div>
 
</form>
 </fieldset>
</body>
</html>