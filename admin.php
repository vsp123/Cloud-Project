<?php
$user = 'root';
$pass = '';
$db='user';
$db=mysqli_connect('localhost',$user,$pass,$db) or die("Error in Connection");
mysqli_select_db($db,'user');
$name=$_POST['name'];
$id=$_POST['id'];
$gpay=$_POST['GradePay'];
$prov=$_POST['provider'];
$des=$_POST['desg'];
$acc=$_POST['accno'];
$llno=$_POST['lineno'];
$result=mysqli_query($db,"SELECT * FROM alogin");

while($row=mysqli_fetch_array($result))
{


	if ($row['Name']!="$name")
	{
		echo "Name is not found.";
	}
	else
	{
		if ($row['ID']!="$id")
		{
			echo "wrong Id";
		}
		else if($row['GradePay']!="$gpay")
		{
			echo "wrong grade pay";
		}
		else if($row['ServiceProvider']!="$prov")
		{
			echo "wrong detail of provider";
		}
		else if($row['Designation']!="$des")
		{
			echo "wrong desg entered";
		}
		else if($row['AccountNumber']!="$acc")
		{
			echo "wrong detail of provider";
		}
		else if($row['LandlineNumber']!="$llno")
		{
			echo "wrong landline number entered";
		}
		else
		{
            header("Location:http://localhost/Website/Website/Dashboard.html");			
		}
	}
}
?>	
