<?php
$user = 'root';
$pass = '';
$db='admin';
$db=mysqli_connect('localhost',$user,$pass,$db) or die("Error in Connection");
$gpc=$_POST['gpc'];
$ca=$_POST['ca'];
$query="INSERT INTO tblceiling (GPC,CeilingAmt) VALUES ('$gpc','$ca')";
if(mysqli_query($db, $query))
{
	header("Location:http://localhost/Website/Website/ins.html");
}
else {
    echo "Error: " . $query . "<br>" . mysqli_error($db);
}
mysqli_close($db);
?>
