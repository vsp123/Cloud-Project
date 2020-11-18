<?php
$link=mysqli_connect("localhost","root","","admin");
mysqli_select_db($link,"admin");
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="rec.css">
</head>
<body>
<h1 style="text-align:center"><div1>Grade Pay Master</div1></h1>
<br>
<br>
<br>
<br>
<form action="gpe.php" method="POST">
  <div class="imgcontainer">
    <img src="clogo.png" alt="Avatar" class="avatar">
  </div>

  <div align="left" class="container">
    <label for="name"><b>GP Code</b></label>
    <input type="int" placeholder="Enter Division Code" name="gpc" ><br><br>

    <label for="gp"><b>Grade Pay</b></label>
    <input type="int" placeholder="Enter Grade Pay" name="gp" required><br><br>
	<button type="submit">Create</button>
<br>
<br>
<br>

</body>
</html>
