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
<h1 style="text-align:center"><div1>Designation Master</div1></h1>
<br>
<br>
<br>
<br>
<form action="desemp.php" method="POST">
  <div class="imgcontainer">
    <img src="clogo.png" alt="Avatar" class="avatar">
  </div>

  <div align="left" class="container">
    <label for="name"><b>Designation Code</b></label>
    <input type="int" placeholder="Enter Division Code" name="dc" required><br><br>

    <label for="desg"><b>Designation </b></label>
    <select name="desg">
	<option value="Scientist B">Scientist B</option>
	<option value="Scientist C">Scientist C</option>
	<option value="Scientist E">Scientist E</option>
	<option value="Scientist F">Scientist F</option>
	<option value="Scientist G">Scientist G</option>
	<option value="Director">Director</option>
	</select><br><br>
<button type="submit">Create</button>
<br>
<br>
<br>

</body>
</html>