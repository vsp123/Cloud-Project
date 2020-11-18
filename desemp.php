<?php
$user = 'root';
$pass = '';
$db='admin';
$db=mysqli_connect('localhost',$user,$pass,$db) or die("Error in Connection");
$dc=$_POST['dc'];
$des=$_POST['des'];
$query="INSERT INTO tbldesgmst (Desigcode,Designation) VALUES ('$dc','$des')";
if(mysqli_query($db, $query))
{
header("Location:http://localhost/Website/Website/ins.html");
}
else {
    echo "Error: " . $query . "<br>" . mysqli_error($db);
}
mysqli_close($db);
?>
