<?php
$user = 'root';
$pass = '';
$db='admin';
$db=mysqli_connect('localhost',$user,$pass,$db) or die("Error in Connection");
mysqli_select_db($db,'admin');
$name=$_POST['name'];
$id=$_POST['id'];
$bno=$_POST['bno'];
$desg=$_POST['desg'];
$gp=$_POST['gp'];
$accno=$_POST['accno'];
$lno=$_POST['lno'];
$result=mysqli_query($db,"SELECT * FROM tbldetails");

while($row=mysqli_fetch_array($result))
{


	if ($row['Employee']!="$name")
	{
		echo "wrong details provided";
	}
	else
	{
		if ($row['ID']!="$id")
		{
			echo "wrong details provided";
		}
		else if($row['BroadbandNo']!="$bno")
		{
			echo "wrong details provided";
		}
		else if($row['Designation']!="$desg")
		{
			echo "wrong details provided";
		}
		else if($row['GP']!="$gp")
		{
			echo "wrong details provided";
		}
		else if($row['AccNo']!="$accno")
		{
			echo "wrong details provided";
		}
		else if($row['LNo']!="$lno")
		{
			echo "wrong details provided";
		}
		
		else
		{
            header("Location:http://localhost/Website/Website/bill.php");			
		}
	}
}
?>	
