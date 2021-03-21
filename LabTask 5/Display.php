<?php  
require_once 'Controller/displayController.php';
$tableName = 'product_info';
$products = fetchAllProducts($tableName);

?>
<!DOCTYPE html>
<html>
<head>
	<style>
		form{
			text-align: center;
		}
		body{
			 margin-top: 100px;
             margin-left: 500px;
             margin-right: 500px;
		}
		legend{
			font-size: 25px;
		}
	table, th, td {
  	border: 1px solid black;
	}
	th, td {
  	padding: 15px;
	}
</style>
	<title>Display Product</title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
<hr><a href="searchProduct.php">Search Your Product</a><hr><br>
<fieldset>
<legend><B>DISPLAY</B></legend> <br>
<div style="margin-left: 140px;">
<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Profit</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($products as $i => $product): ?>
			<?php if($product['Display']=='Yes'){ ?>
			<tr>
				<td><?php echo $product['Name'] ?></td>
				<td><?php echo $product['SellingPrice']-$product['BuyingPrice'] ?></td>
				<td><a href="editProduct.php?id=<?php echo $product['ID'] ?>">Edit</a>&nbsp;|&nbsp;<a href="delete.php?id=<?php echo $product['ID'] ?>">Delete</a></td>
			</tr></div>
		<?php } ?>
		<?php endforeach; ?>
		

	</tbody>
	

</table>
</fieldset>

</body>
</html>