<?php if(!empty($_GET['id'])){ ?>
<?php 

require_once 'Controller/displayController.php';
$tableName = 'product_info';
$product = fetchProduct($tableName, $_GET['id']);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Delete Product</title>
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
<fieldset>
<legend><B>Delete Product</B></legend> <br>
<form action="Controller/deleteController.php?id=<?php echo $_GET['id'] ?>" method="post" enctype="multipart/form-data">
	Name: <?php echo $product['Name']; ?> <br>
	Buying Price: <?php echo $product['BuyingPrice']; ?> <br>
	Selling Price: <?php echo $product['SellingPrice']; ?> <br>
	Displayable: <?php echo $product['Display']; ?>
</div>
<hr>
  <input type="submit" name="submit" value="delete">
</form>
</fieldset>
</body>
</html>
<?php }
else{
	echo "You are not allowed to visit this page";
} 
?>