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
<h1 style="text-align:center"><div1>Create Employee</div1></h1>
<form action="cremp.php" method="POST">
  <div class="imgcontainer">
    <img src="clogo.png" alt="Avatar" class="avatar">
  </div>

  <div align="left" class="container">
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" required>

    <label for="id"><b>Id No:</b></label>
    <input type="password" placeholder="Enter ID" name="id" required>
	
	<label for="dc"><b>Div Code</b></label>
    <select name="dc">
  <?php
  $res=mysqli_query($link,"select * from tbldivmst");
  if($res)
  {
  while($row=mysqli_fetch_array($res))
  {
  $div=$row["DCode"];
  echo"<option>$div<br></option>";
  }
  }
  ?>
  </select><br><br>
	
	<label for="desg"><b>Designation </b></label>
    <select name="desg">
	<option value="Scientist B">Scientist B</option>
	<option value="Scientist C">Scientist C</option>
	<option value="Scientist E">Scientist E</option>
	<option value="Scientist F">Scientist F</option>
	<option value="Scientist G">Scientist G</option>
	<option value="Director">Director</option>
	</select><br><br>
	
	<label for="doj"><b>DOJ</b></label>
    <input type="date" name="doj" required><br><br>
	
	<label for="dor"><b>DOR</b></label>
    <input type="date"  name="dor" required><br>
	
	<label for="addr"><b>Address</b></label>
    <input type="text" placeholder="Enter Address" name="addr" required><br>
	
    
    <label for="mobno"><b>Mobile no:</b></label>
    <input type="int" placeholder="Enter Mobile Number" name="mobno" required><br><br>
	
	<label for="sprov"><b>Service Provider</b></label>
    <select name="sprov">
	<option value="Jio">Jio</option>
	<option value="Vodafone">Vodafone</option>
	<option value="Airtel">Airtel</option>
	<option value="Idea">Idea</option>
	<option value="Dolphin">Dolphin</option>
	<option value="Aircel">Aircel</option>
	<option value="BSNL">BSNL</option>
	</select>
	
	<label for="lprov"><b>Lanline service Provider</b></label>
    <input type="text" placeholder="Enter Landline Service Provider" name="lprov" required>
	
	<label for="lnum"><b>Lanline Number</b></label>
    <input type="text" placeholder="Enter Landline Service Provider" name="lnum" required>
	
	
	<label for="gpay"><b>Grade Pay</b></label>
    <select name="gpay">
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
	
	<label for="gpayw"><b>Grade Pay Wef</b></label>
    <input type="date" placeholder="Enter Grade Pay" name="gpayw" required><br><br>
	
	<label for="accno"><b>Account Number</b></label>
    <input type="int" placeholder="Enter Account Number" name="accno" required>
	
	
 
    <button type="submit">Create</button>


</body>
</html>