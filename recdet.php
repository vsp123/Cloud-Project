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
<h1 style="text-align:center"><div1>Your Bill</div1></h1>
<form action="billrec.php" method="POST">
  <div class="imgcontainer">
    <img src="clogo.png" alt="Avatar" class="avatar">
  </div>
<div align="left" class="container">

<label for="nm">Select The Name</b></label>
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
  
  
  <button type="submit">Display</button>
<br>
<br>
<br>

</body>
</html>
