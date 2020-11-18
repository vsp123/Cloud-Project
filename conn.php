<?php
$conn= mysqli_connect("localhost","root","");
mysqli_select_db($conn,'loginform');
$uname=$_POST['username'];
$pass=$_POST['pass'];
$result=mysqli_query($conn,"SELECT * FROM `loginform` WHERE User= '$uname' AND Pass='$pass'");
while($row=mysqli_fetch_array($result))
{
	if ($row['User']!="$uname")
	{
		echo "Username not found.";
	}
	else
	{
		if ($row['Pass']!="$pass")
		{
			echo "password wrong";
		}
		else
		{
            header("Location:http://localhost:8080/Website/Website/Complaint.html");			
		}
	}
}
?>