<?php
$user = 'root';
$pass = '';
$db='admin';
$db=mysqli_connect('localhost',$user,$pass,$db) or die("Error in Connection");
mysqli_select_db($db,'admin');
$nm=$_POST['nm'];
$id=$_POST['id'];
$per=$_POST['per'];
$lamt=$_POST['lamt'];
$iamt=$_POST['iamt'];
$mamt=$_POST['mamt'];
$tot=$_POST['tot'];
$camt=$_POST['camt'];
$ramt=$_POST['ramt'];
$year=$_POST['yr'];
$query="INSERT INTO billdet (Name,ID,Period,LandlineAmt,InternetAmt,MobileAmt,Total,CeilingAmt,RAmt,Year) VALUES ('$nm','$id','$per','$lamt','$iamt','$mamt','$tot','$camt','$ramt','$year')";

if(mysqli_query($db, $query))
{
	header("Location:http://localhost/Website/Website/ins.html");
}
else {
    echo "Error: " . $query . "<br>" . mysqli_error($db);
}
mysqli_close($db);
?>
