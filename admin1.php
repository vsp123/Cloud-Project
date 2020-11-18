<?php
$name=$_POST['name'];
$id=$_POST['id'];
$gpay=$_POST['GradePay'];
$prov=$_POST['provider'];
$des=$_POST['desg'];
$acc=$_POST['accno'];
$llno=$_POST['lineno'];
$name=stripcslashes($name);
$id=stripcslashes($id);
$gpay=stripcslashes($gpay);
$prov=stripcslashes($prov);
$des=stripcslashes($des);
$acc=stripcslashes($acc);
$llno=stripcslashes($llno);
$name=mysql_real_escape_string($name);
$id=mysql_real_escape_string($id);
$gpay=mysql_real_escape_string($gpay);
$prov=mysql_real_escape_string($prov);
$des=mysql_real_escape_string($des);
$acc=mysql_real_escape_string($acc);
$llno=mysql_real_escape_string($llno);
$user = 'root';
$pass = '';
$db='user';
$tb=mysql_connect('localhost',$user,$pass) or die("Error in Connection");
mysql_select_db('user');
$query="select * from `adlogin` where Name='$name' , ID='$id' , GradePay='$gpay' , ServiceProvider='$prov' , Designation='$des', AccountNumber='$acc' , LandlineNumber='$llno'";
$result=mysql_query($query) or die("failed to query database" .mysql_error());
while($row=mysql_fetch_array($result))
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
