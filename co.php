<?php
$user = 'root';
$pass = '';
$db='testdb';
$db=mysqli_connect('localhost',$user,$pass,$db) or die("Error in Connection");
mysqli_select_db($db,'testdb');
echo "graet work";
?>