<?php
$user = 'root';
$pass = '';
$db='testdb';
$db=mysqli_connect('localhost',$user,$pass,$db) or die("Error in Connection");
mysqli_select_db($db,'testdb');
$uname=$_POST['username'];
$pass=$_POST['pass'];
$result=mysqli_query($db,"SELECT * FROM `loginid`");
while($row=mysqli_fetch_array($result))
{
	if ($row['Username']!="$uname" && $row['Password']!="$pass")
	{
		header("Location:http://localhost/Website/Website/tadmin.html");
	}
		
	else if($row['Username']=="$uname" && $row['Password']=="$pass")
	{
            header("Location:http://localhost/Website/Website/Dashboard.html");			
	}
}

?>