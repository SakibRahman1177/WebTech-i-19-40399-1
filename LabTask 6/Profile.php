
 <!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>
<body>
<div class="topnav">
  <a style="float: left;font-style: italic;font-size: 20px;">Covid-19 Test</a>
  <div style="float: right;">
  <a href="Dashboard.php">Dashboard</a>
  <a class="active" href="Profile.php">Profile</a>
  <a href="ApplyForm.php">Apply</a>
  <a href="Report.php">Report</a></div>
</div><br>
<html>
<br><br>
 <?php
session_start();
require_once 'controller/ViewProfileController.php';

if(isset($_SESSION['username']))
{ 
$data = fetchPatient($_SESSION['username']);


  if($data!=NULL)
  {
    foreach ($data as $i => $patient):

         $name= $patient['name'] ;
         $email=$patient['email'];
         $username= $patient['username'] ;
         $dob=$patient['dateofbirth'];
         $address= $patient['address'] ;
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
    echo "<br />Username: $username<hr>";
    echo "<br />Date of Birth: $dob<hr>";
    echo "<br />Address: $address</div></div>";

}
?>
</th>
</table>
<div><?php include 'Sources/footer.php';?></div><hr>
</body>
</html>



 
 