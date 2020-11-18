<?php
$user = 'root';
$pass = '';
$db='testdb';
$db=mysqli_connect('localhost',$user,$pass,$db) or die("Error in Connection");
$uname=$_POST['username'];
$passw=$_POST['pass'];
$query="INSERT INTO loginid (Username,Password) VALUES ('$uname','$passw')";
if(mysqli_query($db, $query))
{
header("Location:http://localhost/Website/Website/insert.html");
}
else {
    echo "Error: " . $query . "<br>" . mysqli_error($db);
}
mysqli_close($db);
?>
