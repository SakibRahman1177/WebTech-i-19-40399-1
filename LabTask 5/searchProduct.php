<!DOCTYPE html>
<html>
<title>Search Product</title>
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
  <body>
  	<fieldset>
	<legend><B>Search Product</B></legend>  
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
      <input type="text" name="Name" value="<?php if (!empty($_POST['Name'])) {echo $_POST['Name'];} ?>" required/>
      <input type="submit" name="findProduct" value="Search By Name"/>
    </form><br>
<?php require_once 'Controller/searchProductController.php'; ?>
</fieldset>
  </body>
</html>