<?php
$con=mysqli_connect("localhost:8080","root","");
if(!$con)
{
	die('error in connection'.mysql_error());
}
mysql_select_db("demo",$con);
$uname=int($_POST['username']);
$result=mysql_query("SELECT User,Pass FROM logininfo WHERE uname=$uname");
while($row=mysql_fetch_array($result))
{
	if($row['User']=$_POST['username'] && $row['']=$_POST[''])
	{
		echo "something";
	}
	else{
		echo"sory";
	}
}
?>