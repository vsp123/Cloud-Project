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
<h1 style="text-align:center"><div1>Division Master</div1></h1>
<br>
<form action="divemp.php" method="POST">
  <div class="imgcontainer">
    <img src="clogo.png" alt="Avatar" class="avatar">
  </div>

  <div align="left" class="container">
    <label for="name"><b>Division Code</b></label>
    <input type="text" placeholder="Enter Division Code" name="dc" required><br><br>

    <label for="dde"><b>Division Description</b></label>
    <input type="text" placeholder="Enter Division description" name="dde" required>
	
	<label for="dc"><b>Division Date</b></label>
    <input type="date" placeholder="Enter Division date" name="dde" required>
 
	<button type="submit">Create</button>
<br>
<br>
<br>

</body>
</html>