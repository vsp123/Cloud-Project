<!DOCTYPE html>
<html>
<body>
	<?php

	$host="localhost";
	$user="root";
	$password="";
	$db="demo";

	mysql_connect($host,$user,$password);
	$mysql_select_db($db);

	if(isset($_POST['username'])){
		$uname=$_POST['username'];
		$password=$_POST['password'];

		$sql="select * from loginform where User='".$uname."' AND Pass='".$password."' limit l";

		$result=mysql_query($sql);

		if(mysql_num_rows($result)==1){
			echo "You have succesfully login";
			exit();
		}
		else{
			echo "I'm sorry";
			exit();
		}
	}
	?>
</body>
</html>