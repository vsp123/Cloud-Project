<?php

	$host="localhost";
	$user="root";
	$password="";
	$db="demo";

	$mysqli_connect($host,$user,$password);
	$mysqli_select_db($db);

	if(isset($_POST['username'])){
		$uname=$_POST['username'];
		$password=$_POST['password'];

		$sql="select User,Pass from loginform where User='".$uname."' AND Pass='".$password."' limit l";

		$result=mysql_query($cal,$sql);

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