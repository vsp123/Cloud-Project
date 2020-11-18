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
<h1 style="text-align:center"><div1>Fee Details</div1></h1>
<form action="feed.php" method="POST">
  <div class="imgcontainer">
    <img src="clogo.png" alt="Avatar" class="avatar">
  </div>
<div align="left" class="container">
   <label for="name"><b>Select Employee</b></label>
   <select name="name">
  <?php
  $res=mysqli_query($link,"select * from tblempmst");
  if($res)
  {
  while($row=mysqli_fetch_array($res))
  {
  $nm=$row["Name"];
  echo"<option>$nm<br></option>";
  }
  }
  ?>
  </select><br><br>
  
  <label for="id"><b>ID No:</b></label>
   <select name="id">
  <?php
  $res=mysqli_query($link,"select * from tblempmst");
  if($res)
  {
  while($row=mysqli_fetch_array($res))
  {
  $id=$row["ID"];
  echo"<option>$id<br></option>";
  }
  }
  ?>
  </select><br><br>
   
  
  <label for="bno"><b>BROADBAND NO:</b></label>
   <input type="int" placeholder="Enter Broadband number" name="bno" required><br><br>
   
  <label for="desg">Designation</b></label>
  <select name="desg">
  <option value="Scientist B">Scientist B</option>
	<option value="Scientist C">Scientist C</option>
	<option value="Scientist E">Scientist E</option>
	<option value="Scientist F">Scientist F</option>
	<option value="Scientist G">Scientist G</option>
	<option value="Director">Director</option>
	</select><br><br>

	<label for="gp">Grade pay</b></label>
  <select name="gp">
  <?php
  $res=mysqli_query($link,"select * from tblgp");
  if($res)
  {
  while($row=mysqli_fetch_array($res))
  {
  $gp=$row["GP"];
  echo"<option>$gp<br></option>";
  }
  }
  ?>
  </select><br><br>
  
  <label for="accno"><b>CRRI SB Account No</b></label>
   <input type="int" placeholder="Enter Account number" name="accno" required><br><br>
   
   <label for="bno"><b>LANDLINE NO:</b></label>
   <input type="int" placeholder="Enter Landline number" name="lno" required><br><br>
   
   <button type="submit">Submit</button>
<br>
<br>
<br>

</body>
</html>
