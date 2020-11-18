<?php
$user = 'root';
$pass = '';
$db='admin';
$db=mysqli_connect('localhost',$user,$pass,$db) or die("Error in Connection");
$name=$_POST['name'];
$id=$_POST['id'];
$divcode=$_POST['dc'];
$des=$_POST['desg'];
$doj=$_POST['doj'];
$dor=$_POST['dor'];
$addr=$_POST['addr'];
$mobno=$_POST['mobno'];
$sprov=$_POST['sprov'];
$lprov=$_POST['lprov'];
$lnum=$_POST['lnum'];
$gpay=$_POST['gpay'];
$gpayw=$_POST['gpayw'];
$accno=$_POST['accno'];

$query="INSERT INTO tblempmst (Name,ID,DivCode,Designation,DOJ,DOR,Address,MobNo,Mobservprov,LandlineProvider,LandlineNumber,GradePay,GPwef,AccNo) VALUES ('$name','$id','$divcode','$des','$doj','$dor','$addr','$mobno','$sprov','$lprov','$lnum','$gpay','$gpayw','$accno')";/*,Landline Provider,Grade Pay,Account Number) VALUES ('$name','$id','$divcode','$des','$doj','$dor','$addr','$email','$mobno','$sprov','$lprov','$gpay','$accno')";/*,DCode,Designation,DOJ,DOR,Address,Email,Mobile Number,Service Provider,Landline Provider,Grade Pay,Account Number) 
VALUES ('$name', '$id', '$divcode', '$des', '$doj', '$dor', '$addr', '$email', '$mobno', '$sprov', '$lprov', '$gpay', '$accno')";*/

if(mysqli_query($db,$query))
{
	header("Location:http://localhost/Website/Website/ins.html");	
}
else
{
	echo "Error: " . $query . "<br>" . mysqli_error($db);
}
mysqli_close($db);
?>