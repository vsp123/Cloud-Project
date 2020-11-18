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
<h1 style="text-align:center"><div1>Bill Details</div1></h1>
<form action="billamt.php" method="POST">
  <div class="imgcontainer">
    <img src="clogo.png" alt="Avatar" class="avatar">
  </div>
<div align="left" class="container">

<label for="nm">Name</b></label>
  <select name="nm">
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
<label for="id">ID</b></label>
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

  <label for="per">Period</b></label>
  <select name="per">
  <option value="January">January</option>
	<option value="February">February</option>
	<option value="March">March</option>
	<option value="April">April</option>
	<option value="May">May</option>
	<option value="June">June</option>
	<option value="July">July</option>
	<option value="August">August</option>
	<option value="September">September</option>
	<option value="October">October</option>
	<option value="November">November</option>
	<option value="December">December</option>
	</select><br><br>
	
	 <label for="yr">Year</b></label>
  <input type="int" placeholder="Enter year" name="yr" required><br><br>
  
  <label for="lamt">Landline Amt</b></label>
  <input type="int" placeholder="Enter Landline amount" name="lamt" required><br><br>
  
  <label for="iamt">Internet Amt</b></label>
  <input type="int" placeholder="Enter Internet amount" name="iamt" required><br><br>
  
  <label for="mamt">Mobile Amt</b></label>
  <input type="int" placeholder="Enter Mobile amount" name="mamt" required><br><br>
  
  <label for="tot">Total</b></label>
  <input type="int" placeholder="Enter Total" name="tot" required><br><br>
  
  <label for="camt">Ceiling Amt</b></label>
  <select name="id">
  <?php
  $res=mysqli_query($link,"select * from tblceiling");
  if($res)
  {
  while($row=mysqli_fetch_array($res))
  {
  $ce=$row["CeilingAmt"];
  echo"<option>$ce<br></option>";
  }
  }
  ?>
  </select><br><br>
  
  <label for="ramt">Reimbursable Amt</b></label>
  <input type="int" placeholder="Enter Reimbursable amount" name="ramt" required><br><br>
  
  <button type="submit">Save</button>
<br>
<br>
<br>

</body>
</html>
