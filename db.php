<?php
$link=mysqli_connect("localhost","root","","admin");
mysqli_select_db($link,"admin");
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="admin1.css">
</head>
<body>
<h1 style="text-align:center"><div1>Ceiling Amount</div1></h1>
<br>
<br>
<br>
<br>
<form action="" method="POST">
<div class="imgcontainer">
    <img src="logo.png" alt="Avatar" class="avatar">
  </div>
  <div align="left" class="container">
  <label for="name"><b>DESIGNATION</b></label>
  <select name="dc">
  <?php
  $res=mysqli_query($link,"select * from tblempmst");
  if($res)
  {
  while($row=mysqli_fetch_array($res))
  {
  $desg=$row["Designation"];
  echo"<option>$desg<br></option>";
  }
  }
  ?>
  </select>
  </form>
  </head>
  </html>