<?php
$user = 'root';
$pass = '';
$db='admin';
$db=mysqli_connect('localhost',$user,$pass,$db) or die("Error in Connection");
$dc=$_POST['dc'];
$dd=$_POST['dd'];
$dde=$_POST['dde'];
$query="INSERT INTO tbldivmst (DCode,Divdescr,DivDate) VALUES ('$dc','$dd','$dde')";
if(mysqli_query($db, $query))
{
header("Location:http://localhost/Website/Website/ins.html");
}
else {
    echo "Error: " . $query . "<br>" . mysqli_error($db);
}
mysqli_close($db);
?>
