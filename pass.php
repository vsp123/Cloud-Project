<?php
$user = 'root';
$pass = '';
$db='testdb';
$db=mysqli_connect('localhost',$user,$pass,$db) or die("Error in Connection");
mysqli_select_db($db,'testdb');
$uname=$_POST['username'];
$pass=$_POST['pass'];
$result=mysqli_query($db,"SELECT * FROM `loginid` WHERE Username= '$uname' AND Password='$pass'");
while($row=mysqli_fetch_array($result))
{
	if ($row['Username']!="$uname")
	{
		echo "Username not found.";
	}
	else
	{
		if ($row['Password']!="$pass")
		{
			echo "password wrong";
		}
		else
		{
            header("Location:http://localhost/Website/Website/Complaint.html");			
		}
	}
}
?>
