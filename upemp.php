<?php
$link=mysqli_connect("localhost","root","","admin");
mysqli_select_db($link,"admin");
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="rec.css">
</head>
<body>
<h1 style="text-align:center"><div1>Update Employee</div1></h1>
<form action="" method="GET">
  <div class="imgcontainer">
    <img src="clogo.png" alt="Avatar" class="avatar">
  </div>

  <div align="left" class="container">
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" value="<?php echo $_GET['name'];?>" required>

    <label for="id"><b>Id No:</b></label>
    <input type="password" placeholder="Enter ID" name="id" value="<?php echo $_GET['id']; ?>" required>
	
	<label for="dc"><b>Div Code</b></label>
    <select name="dc" value="<?php echo $_GET['div']; ?>" >
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
    <select name="desg" value="<?php echo $_GET['desg']; ?>" >
	<option value="Scientist B">Scientist B</option>
	<option value="Scientist C">Scientist C</option>
	<option value="Scientist E">Scientist E</option>
	<option value="Scientist F">Scientist F</option>
	<option value="Scientist G">Scientist G</option>
	<option value="Director">Director</option>
	</select><br><br>
	
	<label for="doj"><b>DOJ</b></label>
    <input type="date" name="doj" value="<?php echo $_GET['doj']; ?>" required><br><br>
	
	<label for="dor"><b>DOR</b></label>
    <input type="date"  name="dor" value="<?php echo $_GET['dor']; ?>" required><br>
	
	<label for="addr"><b>Address</b></label>
    <input type="text" placeholder="Enter Address" name="addr" value="<?php echo $_GET['addr']; ?>" required><br>
	
    
    <label for="mobno"><b>Mobile no:</b></label>
    <input type="int" placeholder="Enter Mobile Number" name="mobno" value="<?php echo $_GET['mobno']; ?>"  required><br><br>
	
	<label for="sprov"><b>Service Provider</b></label>
    <select name="sprov" value="<?php echo $_GET['ms']; ?>" >
	<option value="Jio">Jio</option>
	<option value="Vodafone">Vodafone</option>
	<option value="Airtel">Airtel</option>
	<option value="Idea">Idea</option>
	<option value="Dolphin">Dolphin</option>
	<option value="Aircel">Aircel</option>
	<option value="BSNL">BSNL</option>
	</select>
	
	<label for="lprov"><b>Lanline service Provider</b></label>
    <input type="text" placeholder="Enter Landline Service Provider" name="lprov" value="<?php echo $_GET['lprov']; ?>" required>
	
	<label for="lnum"><b>Lanline Number</b></label>
    <input type="text" placeholder="Enter Landline Service Provider" name="lnum" value="<?php echo $_GET['lnum']; ?>"  required>
	
	
	<label for="gpay"><b>Grade Pay</b></label>
    <select name="gpay" value="<?php echo $_GET['gp']; ?>" >
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
    <input type="date" placeholder="Enter Grade Pay" name="gpayw" value="<?php echo $_GET['gpe']; ?>" required><br><br>
	
	<label for="accno"><b>Account Number</b></label>
    <input type="int" placeholder="Enter Account Number" name="accno" value="<?php echo $_GET['accno']; ?>" required><br><br>
	
	
 

   <input type="submit" name="submit" value="Update">
	</form>
<?php


if(isset($_GET['submit']))
{
	$name=$_GET['name'];
	$id=$_GET['id'];
	$dc=$_GET['dc'];
	$desg=$_GET['desg'];
	$doj=$_GET['doj'];
	$dor=$_GET['dor'];
	$addr=$_GET['addr'];
	$mobno=$_GET['mobno'];
	$sprov=$_GET['sprov'];
	$lprov=$_GET['lprov'];
	$lnum=$_GET['lnum'];
	$gpay=$_GET['gpay'];
	$gpayw=$_GET['gpayw'];
	$accno=$_GET['accno'];
	$query = "UPDATE tblempmst SET ID='$id' , DivCode = '$dc' , Designation='$desg' , DOJ='$doj' , DOR='$dor' , Address='$addr' , MobNo='$mobno' , Mobservprov='$sprov' , LandlineProvider='$lprov' , LandlineNumber='$lnum' , GradePay='$gpay' , GPwef='$gpayw' , AccNo='$accno' WHERE Name='$name'";
   $data=mysqli_query($link,$query);
   if($data)
  {
	  echo "record updated successfully";
  }
   else
   {
	   echo "Error: " . $query . "<br>" . mysqli_error($link);
   }
   
}
else
{
echo "Click on update button to update records";	
}
?>

</body>
</html>