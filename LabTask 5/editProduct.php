<?php if(!empty($_GET['id'])){ ?>
<?php 

require_once 'Controller/displayController.php';
$tableName = 'product_info';
$product = fetchProduct($tableName, $_GET['id']);

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Product</title>
  <style>
    legend{
      font-size: 25px;
    }
  body{
    margin-top: 100px;
             margin-left: 500px;
             margin-right: 800px;
  }
  </style>
</head>
<body>

<form action="Controller/editProductController.php?id=<?php echo $_GET['id'] ?>" method="post" enctype="multipart/form-data">
<fieldset>
<legend><B>Edit Product</B></legend> <br> 

  Name
  <br><input type="text" id="name" name="name" size="40" value="<?php echo $product['Name']; ?>">
  <br><br>
  Buying Price
  <br><input type="text" id="bprice" name="bprice" size="40" value="<?php echo $product['BuyingPrice']; ?>">
  <br><br>
  Selling Price
  <br><input type="text" id="sprice" name="sprice" size="40" value="<?php echo $product['SellingPrice']; ?>">
  <br><br><hr>
   <input type="checkbox" name="display" value="Yes" <?php if($product['Display']=='Yes'){echo 'checked';} ?>>
  <label for="display">Display</label>
  <br><hr>
  <input type="submit" name="submit" value="Save">
</form>
</fieldset>
</body>
</html>
<?php }
else{
  echo "You are not allowed to visit this page";
} ?>