<!DOCTYPE html>
<html lang="en">

<head>
	<title>Report</title>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<div class="topnav">
  <a style="float: left;font-style: italic;font-size: 20px;">Covid-19 Test</a>
  <div style="float: right;">
  <a href="Dashboard.php">Dashboard</a>
  <a href="Profile.php">Profile</a>
  <a href="ApplyForm.php">Apply</a>
  <a class="active" href="Report.php">Report</a></div>
</div><br>
<?php
session_start();
require_once ('controller/ReportController.php');

if(isset($_SESSION['name']))
{ 
$data = fetchApplyInfo($_SESSION['name']);


  if($data!=NULL)
  {
    foreach ($data as $i => $patient):

         $name= $patient['name'] ;
         $email=$patient['email'];
         $Pnumber= $patient['phone'] ;
         $address= $patient['address'] ;
         $gender= $patient['gender'];
    endforeach;
  }
}
else {
  echo "You cannot access this page!!";
}

 ?>
  <body><br><br><br><br>
    <table style="width:97%;margin-right: 20px;margin-left: 20px; border: 2px solid black;">
  <tr style="border: 2px solid black;">
    <th style="border: 2px solid black;font-size: 24px;">
      Account<br><hr><br>
      <div style="float: left; text-align: left;margin-left: 60px;">
      <li> <a href="Dashboard.php">Dashboard</a></li><br><br>
      <li><a href="Profile.php">View Profile</a></li><br><br>
      <li><a href="ApplyForm.php">Apply for Test</a></li><br><br>
      <li><a href="Report.php">Report</a></li><br><br>
      <li><a href="Sources/Logout.php">Logout</a></li><br><br>
    </th></div>
 <th style="border: 1px black;"><?php if (isset($_SESSION['username'])) {
  
    echo "<div style='font-size:45px;'>Profile:<br><br><div style='font-size:30px;float=left;'<br />Name: $name<hr>";
    echo "<br />Email: $email<hr>";
    echo "<br />Phone Number: $phone<hr>";
    echo "<br />Address: $address<hr>";
    echo "<br />Gender: $gender<hr>";
    echo "<br /><span style = 'color:green;'>Result:</span> [ POSITIVE! / NEGATIVE! ]<hr></div></div>";

}
?>
</th>
</table>
<div><?php include 'Sources/footer.php';?></div><hr>
</body>
</html>