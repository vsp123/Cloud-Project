<html>
<head>
<link rel="stylesheet" type="text/css" href="rec.css">
</head>
<body>
<h1 style="text-align:center" color="blue"><div1>Bill Receipt</div1></h1>
<br>
<br>
<?php
$link=mysqli_connect("localhost","root","","admin");
mysqli_select_db($link,"admin");
$nm=$_POST['nm'];

$query="select * from billdet where Name='$nm'";
$data=mysqli_query($link,$query);
$total=mysqli_num_rows($data);
if($total!=0)
{
?>
<table border="2px" align="center">
		<tr>
			<th>Name</th>
			<th>ID</th>
			<th>Period</th>
			<th>Year</th>
			<th>Landline Amt</th>
			<th>Internet Amt</th>
			<th>Mobile Amt</th>
			<th>Total</th>
			<th>Ceiling Amt</th>
			<th>Reimbursable Amt</th>
		</tr>
<?php
while($row=mysqli_fetch_array($data))
{
	echo   "<tr>
		    <td>".$row['Name']."</td>
			<td>".$row['ID']."</td>
			<td>".$row['Period']."</td>
			<td>".$row['Year']."</td>
			<td>".$row['LandlineAmt']."</td>
			<td>".$row['InternetAmt']."</td>
			<td>".$row['MobileAmt']."</td>
			<td>".$row['Total']."</td>
			<td>".$row['CeilingAmt']."</td>
			<td>".$row['RAmt']."</td>
			</tr>"; 
}
}
else
{
echo "No data found";
}
?>
</body>
</html>