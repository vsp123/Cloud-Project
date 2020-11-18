<?php
$user = 'root';
$pass = '';
$db='user';
$conn=mysqli_connect('localhost',$user,$pass,$db) or die("Error in Connection");
mysqli_select_db($db,'user');
echo "connection succesfull";
	$name=$_POST['name'];
	$id=$_POST['id'];
	$gpay=$_POST['GradePay'];
	$prov=$_POST['provider'];
	$des=$_POST['desg'];
	$acc=$_POST['accno'];
	$llno=$_POST['lineno'];

	$sql="SELECT * FROM adlogin WHERE Name= '$name' , ID='$id' , GradePay='$gpay' , ServiceProvider='$prov' , Designation='$des', AccountNumber='$acc' , LandlineNumber='$llno' ";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($result);
	if ($row['Name'] == $name && $row['ID'] == $id && $row['GradePay'] == $gpay && $row['ServiceProvider'] == $prov && $row['Designation'] ==$des && $row['AccountNumber'] == $acc && $row['LandlineNumber'] == $llno) {
		echo "login success";
	} else {
		echo "enter correct data";
	}
	

?>

