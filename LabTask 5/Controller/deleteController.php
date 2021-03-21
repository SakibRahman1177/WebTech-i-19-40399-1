<?php if(!empty($_GET['id'])){ ?>
<?php 

require_once '../Model/model.php';
$tableName = 'product_info';
//echo $_GET['id'];
if (deleteProduct($tableName, $_GET['id'])) {
    header('Location: ../Display.php');
}
else{
	echo '<p>Product Not Deleted!!</p>';
}
 ?>
<?php }
else{
	echo "You are not allowed to visit this page";
} ?>