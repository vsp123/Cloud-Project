<!DOCTYPE html>
<html>
<body>
	<?php
	$uname=$_POST['username'];
$password=$_POST['password'];

$con=mysqli_connect("localhost","root","","demo");
$result=mysqli_query($con,"select * from loginform where User='$uname' AND Pass='$password'");
$count=mysql_no_rows($result);
 if($count==1)
 {
 	echo "login success";
 }
 else
 {
 	echo "sorry";
 }
 ?>
</body>
</html>